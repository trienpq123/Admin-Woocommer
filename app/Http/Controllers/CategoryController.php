<?php

namespace App\Http\Controllers;

use App\Models\AttributeModel;
use App\Models\CategoryModel;
use App\Models\FilterCategory;
use App\Models\filterCategoryModel;
use App\Models\FilterCategoryOption;
use App\Models\FilterModel;
use CKSource\CKFinder\Filesystem\File\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Termwind\Components\Raw;

class CategoryController extends Controller
{
    public function listCategory(Request $request)
    {



        return view('admin.layouts.categories.list');
    }

    public function apiListCategory(Request $request)
    {
        $listCategory = CategoryModel::orderBy('id_category', 'desc')->get();
        return response()->json([
            'status' => 200,
            'data' => $listCategory
        ]);
    }

    public function addCategory(Request $request)
    {
        $attr = AttributeModel::all();
        $listCategory = CategoryModel::all();
        return view('admin.layouts.categories.add', compact('listCategory', 'attr'));
    }

    public function editCategory(Request $request)
    {
        $cate =  CategoryModel::find($request->id);
        $att_cat = $cate->with(['attribute_category'])->where('id_category', $request->id)->first();
        $att_option = FilterCategoryOption::where('id_filter_category', $att_cat->attribute_category->id_filter_category)->get();

        // dd($attr->attribute_category->id_attr);
        // $childrend = $cate->childrendCategory();
        $listCategory = CategoryModel::whereNot('id_category', '=', $request->id)->get();
        if ($att_option) {

            return view('admin.layouts.categories.edit', compact('cate', 'listCategory', 'att_cat', 'att_option'));
        }
        return view('admin.layouts.categories.edit', compact('cate', 'listCategory', 'att_cat'));
    }

    public function postAddCategory(Request $request)
    {

        $validator = Validator::make(

            [
                'name' => 'required|max:255',

            ],
            [
                'name.required' => 'Tên không được bỏ trống',
            ]
        );
        if ($validator->fails()) {
            // dd($validator->errors());
            return back()->with(['errors' => $validator->errors()]);
        };
        $category = new CategoryModel();
        $category->name_category = $request->name;
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
            // else{
            //     return response()->json(
            //      [
            //         'status' => 404,
            //         'message' => ["image" =>  "Tệp phải là hình ảnh"]
            //      ]
            //     );
            // }
        }
        $category->hide = $request->status;
        $category->meta_title =  $request->meta_title;
        $category->meta_description =  $request->meta_description;
        $category->meta_keyword =  $request->meta_keywords;
        $category->tags = $request->tags;
        $category->save();
        $lastCategory =  CategoryModel::orderBy('id_category', 'desc')->first();

        if ($request->attr && $request->attr['id_attr']) {
            // dd($request->attr);
            if ($request->attr['id_attr']) {
                $filterCategory =  filterCategoryModel::create([
                    'id_category' => $lastCategory->id_category,
                    'id_attr' => $request->attr['id_attr']
                ]);

                $filterCategorys = filterCategoryModel::orderBy('id_filter_category', 'desc')->first();

                if ($filterCategorys) {
                    if ($request->attr['option'] && count($request->attr['option']) > 0) {
                        foreach ($request->attr['option'] as $item) {
                            $filter = new FilterCategoryOption();
                            $filter->id_category = $lastCategory->id_category;
                            $filter->id_filter_category = $filterCategorys->id_filter_category;
                            $filter->name = $item['name'];
                            $filter->value = $item['value'];
                            $filter->save();
                        }
                    }
                }
            }
        }

        return back()->with(['status' => 200, 'message' => 'Thêm thành công']);
    }

    public function putEditCategory(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:255',
                'slug' => 'required',
            ]
        );
        if ($validator->fails()) {
            return back()->with(['errors' => $validator->errors()]);
        };
        $category =  CategoryModel::where('id_category', '=', $id)->first();
        $category->name_category = $request->name;
        $category->slug = $request->slug;
        $category->desc_category = $request->desc;
        if ($request->parent_category) {
            $category->parent_category = $request->parent_category;
        };
        if ($request->image) {
            // Xóa hình ảnh trong thư mục
            $path = 'public/uploads/images/';

            if (file_exists($path . $category->name_image)) {
                unlink($path . $category->name_image);
            }
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
        $category->hide = $request->status;
        $category->meta_title =  $request->meta_title;
        $category->meta_description =  $request->meta_description;
        $category->meta_keyword =  $request->meta_keywords;
        $category->tags = $request->tags;
        $category->desc_category = $request->desc_short;
        $category->save();
        if ($request->attr && $request->attr['id_attr']) {
           
            if ($request->attr['id_attr']) {
                $filterCategorys =  filterCategoryModel::where('id_category', '=', $id)->first();
                if ($filterCategorys) {
                    if ($request->attr['option'] && count($request->attr['option']) > 0) {
                        // dd($request->attr['option']);
                        foreach ($request->attr['option'] as $item) {
                            $filter = FilterCategoryOption::where('id_filter_category', '=', $filterCategorys->id_filter_category)->where('name','regexp',$item['name'])->first();
                            if($filter){
                                $filter->value = $item['value'];
                                $filter->save();
                                continue;
                            }else{
                                $filter = new FilterCategoryOption();
                                $filter->id_category = $id;
                                $filter->id_filter_category = $filterCategorys->id_filter_category;
                                $filter->name = $item['name'];
                                $filter->value = $item['value'];
                                $filter->save();
                                continue;
                            }
                        }
                       
                            
                        
                    }
                }
            }
        }
        // if ($request->idFilter) {
        //     $filter = explode(',', $request->idFilter);
        //     $filderModel  = FilterModel::find($filter);
        //     $category->filters()->sync($filderModel);
        // }
        // return response()->json([
        //     "status" => 200,
        //     "data" => $request->all()
        // ]);
        return back()->with(['status' => 200, 'message' => 'Cập nhật thành công']);
    }

    public function deleteCategory(Request $request)
    {
        if ($request->data) {
            foreach ($request->data as $item) {
                $find_category = CategoryModel::where('id_category', '=', $item)->first();
                if ($find_category) {
                    // Xoá hình ảnh
                    // $path = 'public/uploads/images/';
                    // if (file_exists($path . $find_category->name_image)) {
                    //     unlink($path . $find_category->name_image);
                    // }
                    $find_category->delete();
                }
            }
        }
        return response()->json([
            "status" => 200,
            "message" => "Xoá thành công",
            'id' => $request->data
        ]);
    }

    public function getChildCategory(Request $request)
    {
        if ($request->id) {
            // $childCategory = CategoryModel::where('parent_category', '=', $request->id)->get();
            // $filter = FilterCategory::where('id_category', '=', $request->id)->with('childFilter', 'category', 'filter')->get();
            $filters = filterCategoryModel::where('id_category', '=', $request->id)->with('filterCategoryOption')->get();
            return response()->json([
                'status' => 200,
                'data' => $filters
            ]);
        }
    }
}
