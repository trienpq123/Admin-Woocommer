<?php

namespace App\Http\Controllers;

use App\Models\AttributeModel;
use App\Models\AttributeValue;
use App\Models\attributeValueModel;
use App\Models\CategoryModel;
use App\Repositories\Attributes\AttributeRepositoryInterface;
use Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Exists;

class AttributeController extends Controller
{
    private $AttributeInterfaces;
    public function __construct(AttributeRepositoryInterface $_repository){
        $this->AttributeInterfaces = $_repository;
    }

    public function listAttr(Request $request)
    {
        // $listAttr = AttributeModel::with('category')->orderBy('id_attr', 'desc')->get();
        // dd($listAttr);
        return view('admin.layouts.attr.list');
    }

    public function apiListAttr(Request $request)
    {
        $listAttr = $this->AttributeInterfaces->apiListAttr();
        return response()->json([
            'data' => $listAttr
        ]);
    }

    public function addAttr(Request $request)
    {
        $listAttr = $this->AttributeInterfaces->addAttr();
        $listCategory = CategoryModel::whereNull('parent_category')->get();
        return view('admin.layouts.attr.add', compact('listAttr', 'listCategory'));
    }

    public function editAttr(Request $request)
    {
        $listAttr = $this->AttributeInterfaces->edit($request->id);
        return response()->json([
            'data' => $listAttr,

        ]);
    }

    public function postAddAttr(Request $request)
    {
       $save =  $this->AttributeInterfaces->store($request->all());

        if($save){
            return redirect(route('admin.attr.listAttr'))->with(['success' => 'Thêm thành công']);
        }else{
            return redirect(route('admin.attr.listAttr'))->with(['errors' => 'Thêm thất bại']);
        }
    }
    public function putEditAttr(Request $request)
    {
        $save = $this->AttributeInterfaces->update($request->id,$request->all());
        if($save){
            return back()->with(['success' => 'Cập nhật thành công']);
        }else{
            return back()->with(['errors' => 'Lỗi']);
        }
    }

    public function deleteAttr(Request $request)
    {
        $save = $this->AttributeInterfaces->delete($request->id, $request->all());
        if($save){
            return response()->json([
                'alert' => 'Xoa thành công',
                'status' => 200
            ]);
        }else{
            return response()->json([
                'alert' => 'Lỗi',
                'status' => 404
            ]);
        }
    }
    
    public function deleteMore(Request $request)
    {    
        if($request->data){
            foreach($request->data as $data){
                $getAttribute = AttributeValueModel::where('attribute_id', '=', $data)->first();
                $keyAttr = AttributeModel::where('id_attr', '=', $data)->first();
                if ($getAttribute) {
                    $getAttribute->delete();
                }
                if($keyAttr){
                    $keyAttr->delete();
                }
            }
        }
        return response()->json([
            'status' => 200,
            'data' => $request->all()
        ]);
    }
    public function deleteAttrSet(Request $request)
    {
        if ($request->id) {
            $c_attr = AttributeModel::find($request->id);
            if ($c_attr) {
                $c_attr->delete();
            }
        }
        return back()->with(['message' => 'Xóa thành công']);
       
    }

    public function ajaxAttribute(Request $request){
        if ($request->id) {
            $id = $request->id;
            $data = AttributeValue::where('attribute_id', '=', $id)->get(['id','value']);

            return response()->json([
                'data' => $data,
                'status' => 200
            ],200);
        }
        return response()->json([
            'status' => 404
        ],404);

    }
}
