<?php

namespace App\Repositories\Attributes;

use App\Models\AttributeModel;
use App\Models\attributeValueModel;
use App\Repositories\Attributes\AttributeRepositoryInterface;
use App\Repositories\BaseRepository;

class AttributeRepository extends BaseRepository implements AttributeRepositoryInterface
{
    public function getModel()
    {
        return AttributeModel::class;
    }

    public function apiListAttr()
    {
        return $this->_model::with('attributevalue')->Active()->Desc();
    }

    public function addAttr()
    {
        return  $this->_model::with('category')->orderBy('id_attr', 'desc')->get();
    }

    public function edit($id)
    {
        return $this->_model::where('id_attr', '=', $id)->with('attributevalue')->first();
    }

    public function store(array $request)
    {
        $attrModel = $this->_model;
        if($request['attr']['option']['id']){
            $attrModel = $this->_model::find($request['attr']['option']['id']);
        }
        $attrModel->name = $request['attr']['option']['name'];
        if (key_exists('file', $request)) {
            $imageName = $request['file'];
            $name_image = time() . '_' . $imageName->getClientOriginalName();
            $explode = explode('.', $name_image);
            $typeImage = end($explode);
            $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd', 'webp'];
            if (in_array($typeImage, $imageExtensions)) {
                $path = 'admin/uploads/images/attribute/';
                $imageName->move($path, $name_image);
                $link_url = env('APP_URL') . '/' . $path . $name_image;
                $attrModel->image = $link_url;
            }
        }
        $attrModel->save();
        if ($option['position']) {
            $positions = explode(',', $option['position']);
            foreach ($positions as $o) {
                $attVal = new attributeValueModel();
                $attVal->attribute_id = $attrModel->id_attr;
                $attVal->value = $o;
                $attVal->save();
            }
            // $attVal = new attributeValueModel();
            // $attVal->attribute_id = $attrModel->id_attr;
            // $attVal->value = json_encode($option['position']);
            // $attVal->save();
        }
    }

    public function update($id, $request = [])
    {
        foreach ($request->attr['option'] as $option) {
            $getAttribute = $this->attributeRepository::getAttribute($request->id)->with('attributevalue')->first();
            if (key_exists('file', $option)) {
                $imageName = $option['file'];
                $name_image = time() . '_' . $imageName->getClientOriginalName();
                $explode = explode('.', $name_image);
                $typeImage = end($explode);
                $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd', 'webp'];
                if (in_array($typeImage, $imageExtensions)) {
                    $path = 'admin/uploads/images/attribute/';
                    $imageName->move($path, $name_image);
                    $link_url = env('APP_URL') . '/' . $path . $name_image;
                    $getAttribute->image = $link_url;
                }
            }
            $getAttribute->name = $option['name'];
            $getAttribute->save();
            foreach (explode(',', $option['position']) as $p) {
                $attVal = attributeValueModel::where('value', 'like', '%' . $p . '%')->where('attribute_id', '=', $request->id)->first();
                if (empty($attVal)) {
                    $attVal = new attributeValueModel();
                    $attVal->attribute_id = $request->id;
                    $attVal->value = $p;
                    $attVal->save();
                }
            }
        }
    }

    public function delete($id, $request = []){
        $getAttribute =  $this->_model::where('attribute_id', '=', $request['id_attr'])->where('value', 'like', '%' . $request['value'] . '%')->first();
        if ($getAttribute) {
            $getAttribute->delete();
           return true;
        }
        return false;
    }

    public function Active()
    {
        return $this->_model->Active();
    }
    public function Desc()
    {
        return $this->_model->Desc();
    }

    public function getCategory()
    {
        return $this->_model::with('category');
    }

    public function attributevalue(){
        return $this->_model::with(['attributevalue' => function($query) {
            $query->where('is_required', AttributeValue::SHOW_IS_REQUIRED);
        }])->where('value', '=', $this->id)->first();
    }
}
