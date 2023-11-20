<?php

namespace App\Http\Controllers;

use App\Models\AttributeModel;
use App\Models\attributeValueModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttributeController extends Controller
{

    public function listAttr(Request $request)
    {
        // $listAttr = AttributeModel::with('category')->orderBy('id_attr', 'desc')->get();
        // dd($listAttr);
        return view('admin.layouts.attr.list');
    }

    public function apiListAttr(Request $request)
    {
        $listAttr = AttributeModel::with('attributevalue')->orderBy('id_attr','desc')->get();
        return response()->json([
            'data' => $listAttr
        ]);
    }

    public function addAttr(Request $request)
    {
        $listAttr = AttributeModel::with('category')->orderBy('id_attr', 'desc')->get();
        $listCategory = CategoryModel::whereNull('parent_category')->get();

        return view('admin.layouts.attr.add', compact('listAttr', 'listCategory'));
    }

    public function editAttr(Request $request)
    {
        $listAttr = AttributeModel::find($request->id)->with('attributevalue')->orderBy('id_attr', 'desc')->first();
        // $listCategory = CategoryModel::whereNull('parent_category')->get();
        // return view('admin.layouts.attr.edit', compact('listAttr', 'listCategory'));
        return response()->json([
            'data' => $listAttr
        ]);
    }

    public function postAddAttr(Request $request)
    {
        // $validate = Validator::make($request->all(),[
        //     'name' => 'required|max:50'
        // ],
        // [
        //     'name.required' => 'Tên thuộc tính không được bỏ trống',
        //     'name.max' => 'Tên thuộc tính không được vượt quá 50 ký tự'
        // ]);

        // if ($validate->fails()) {
        //     return back()->withErrors($validate)->withInput();
        // }

        // dd($request->all());
        if ($request->attr) {
            if ($request->attr['option']) {
                foreach ($request->attr['option'] as $option) {
                  
                    
                  
                        $attr = new AttributeModel();
                        
                        $attr->name = $option['name'];
                        if ($option['file']) {
             
                                $imageName = $option['file'];
                                // dd($imageName);
                                $name_image = time() . '_' . $imageName->getClientOriginalName();
                                $explode = explode('.', $name_image);
                                $typeImage = end($explode);
                                $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd','webp'];
                                if (in_array($typeImage, $imageExtensions)) {
                                    $path = 'admin/uploads/images/attribute/';
                                    $imageName->move($path, $name_image);
                                    $link_url = env('APP_URL') . '/' . $path . $name_image;

                                    $attr->image = $link_url;
                         
                                }
                
                        }
                        $attr->save();
                        if($option['position']){
                            $attVal = new attributeValueModel();
                            $attVal->attribute_id = $attr->id_attr;
                            $attVal->value = json_encode($option['position']);
                            
                            $attVal->save();
                        }
                }
            }
        }


        // return redirect(route('admin.attr.listAttr'))->with(['message' => 'Thêm thành công']);
    }

    public function putEditAttr(Request $request)
    {
        // $validate = Validator::make(
        //     $request->all(),
        //     [
        //         'name' => 'required|max:50'
        //     ],
        //     [
        //         'name.required' => 'Tên thuộc tính không được bỏ trống',
        //         'name.max' => 'Tên thuộc tính không được vượt quá 50 ký tự'
        //     ]
        // );

        // if ($validate->fails()) {
        //     return back()->withErrors($validate)->withInput();
        // }
        $attr = AttributeModel::find($request->id);
        $attr->name_attr = $request->name;
        $attr->status = $request->status;
        if ($request->parent_category) {
            $attr->id_category = $request->parent_category;
        }
        $attr->save();
        return redirect(route('admin.attr.listAttr'))->with(['message' => 'Cập nhật thành công']);
    }

    public function deleteAttr(Request $request)
    {
        if ($request->id) {
            $c_attr = AttributeModel::find($request->id);
            if ($c_attr) {
                $c_attr->delete();
            }
        }
        return back()->with(['message' => 'Xóa thành công']);
    }
}
