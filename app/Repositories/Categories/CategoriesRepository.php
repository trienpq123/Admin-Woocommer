<?php

namespace App\Repositories\Categories;

use App\Models\AttributeModel;
use App\Models\attributeValueModel;
use App\Models\CategoryModel;
use App\Repositories\Categories\CategoriesRepositoryInterface;
use App\Repositories\BaseRepository;

class CategoriesRepository extends BaseRepository implements CategoriesRepositoryInterface
{
    protected $_categoryRepository;
    public function __construct(CategoryModel $category){
        $this->_model = $category;
    }

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

    public function store($request)
    {
        $category = $this->_model;
        $category->name_category = $request->name_category;
        $category->slug = $request->slug;
        $category->desc_category = $request->desc_short;
        if ($request->parent_category) {
            $category->parent_category = $request->parent_category;
        };
        if ($request->image) {
            $imageName = $request->image;
            $name_image = time() . '_' . $imageName->getClientOriginalName();
            $explode = explode('.', $name_image);
            $typeImage = end($explode);
            $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
            if (in_array($typeImage, $imageExtensions)) {
                $path = 'public/uploads/images/';
                $imageName->move($path, $name_image);
                $link_url = env('APP_URL') . '/' . $path . $name_image;
                $category->image_category = $link_url;
                $category->name_image = $name_image;
            }
        }
        $category->hide = $request->hide;
        $category->meta_title =  $request->meta_title;
        $category->meta_description =  $request->meta_description;
        $category->meta_keyword =  $request->meta_keywords;
        $category->tags = $request->tags;
        $category->save();
        if ($request->attr && !empty($request->attr['value'])) {
            foreach($request->attr as $item){
                filterCategoryModel::create([
                    'id_category' => $category->id_category,
                    'id_attr' => $item['id_attr'],
                    'value' => implode(',', $item['value'])
                ]);
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

    public function getAll(){
        return $this->_model::all();
    }

    // get parent null
    public function parentsNull()
    {
        return $this->_model::whereNull('parent_category');
    }

}
