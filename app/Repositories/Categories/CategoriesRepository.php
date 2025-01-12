<?php

namespace App\Repositories\Categories;

use App\Models\AttributeModel;
use App\Models\attributeValueModel;
use App\Models\CategoryModel;
use App\Repositories\Categories\CategoriesRepositoryInterface;
use App\Repositories\BaseRepository;

class CategoriesRepository extends BaseRepository implements CategoriesRepositoryInterface
{
    public function getModel()
    {
        return CategoryModel::class;
    }

    public function apiListAttr()
    {
        return $this->_model::with('attributevalue')->orderBy('id_attr', 'desc')->get();
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
        if ($request['attr']) {
            if ($request['attr']['option']) {
                foreach ($request['attr']['option'] as $option) {
                    $attr = new AttributeModel();
                    $attr->name = $option['name'];
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
                            $attr->image = $link_url;
                        }
                    }
                    $attr->save();
                    if ($option['position']) {
                        $positions = explode(',', $option['position']);
                        foreach ($positions as $o) {
                            $attVal = new attributeValueModel();
                            $attVal->attribute_id = $attr->id_attr;
                            $attVal->value = $o;
                            $attVal->save();
                        }
                        // $attVal->save();
                    }
                }
            }
        }
    }

    public function update($id, $request = [])
    {
        if ($request['attr']['option']) {
            foreach ($request['attr']['option'] as $option) {
                $getAttribute = AttributeModel::where('id_attr', '=', $id)->with('attributevalue')->first();
                $getAttribute->name = $option['name'];
                foreach (explode(',', $option['position']) as $p) {
                    // $attVal = new attributeValueModel();
                    $attVal = attributeValueModel::where('value', 'like', '%' . $p . '%')->where('attribute_id', '=', $id)->first();
                    if (empty($attVal)) {
                        $attVal = new attributeValueModel();
                        $attVal->attribute_id = $id;
                        $attVal->value = $p;
                        $attVal->save();
                    }
                }
                // $getAttribute->name = $request->attr['option'];
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
}
