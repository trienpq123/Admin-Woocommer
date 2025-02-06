<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttributeRequest;
use App\Models\AttributeModel;
use App\Models\AttributeValue;
use App\Models\attributeValueModel;
use App\Models\CategoryModel;
use App\Repositories\Attributes\AttributeRepository;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    private AttributeRepository $attributeRepository;
    public function __construct(AttributeRepository $attributeRepository)
    {
        $this->$attributeRepository = $attributeRepository;
    }

    public function listAttr(Request $request)
    {
        return view('admin.layouts.attr.list');
    }

    public function apiListAttr(Request $request)
    {
        $listAttr = $this->attributeRepository->Active()->Desc()->get();
        return response()->json([
            'data' => $listAttr
        ]);
    }

    public function addAttr(Request $request)
    {
        $listAttr = $this->attributeRepository->getCategory()->Desc()->get();
        $listCategory = CategoryModel::parentsNull()->get();
        return view('admin.layouts.attr.add', compact('listAttr', 'listCategory'));
    }

    public function editAttr(Request $request)
    {

        $listAttr = $this->attributeRepository->getAttribute($request->id)->with('attributevalue')->first();
        return response()->json([
            'data' => $listAttr,
        ]);
    }

    public function postAddAttr(AttributeRequest $request)
    {
        if ($request->attr && $request->attr['option']) {
            foreach ($request->attr['option'] as $option) {
                $this->attributeRepository->store($request->all());
            }
             return redirect(route('admin.attr.listAttr'))->with(['message' => 'Thêm thành công']);

        }
        return back()->with(['message' => 'Thêm thất bại']);
    }

    public function putEditAttr(AttributeRequest $request)
    {
        if ($request->attr['option']) {
            $this->attributeRepository->update($request->all());
            return redirect()->back()->with(['success' => 'Cập nhật thành công']);
        }
        return redirect()->back()->with(['success' => 'Lỗi']);
    }

    public function deleteAttr(Request $request)
    {
        $getAttribute = AttributeValueModel::AttributeId($request->id)->LikeValue($request->value)->first();
        if ($getAttribute) {
            $getAttribute->delete();
            return response()->json([
                'alert' => 'Xoa thành công',
                'status' => 200
            ]);
        }

        return response()->json([
            'alert' => 'Xóa thất bại',
            'status' => 404
        ]);
    }

    public function deleteMore(Request $request)
    {
        if ($request->data) {
            foreach ($request->data as $data) {
                $getAttribute = AttributeValueModel::where('attribute_id', '=', $data)->first();
                $keyAttr = AttributeModel::where('id_attr', '=', $data)->first();
                if ($getAttribute) {
                    $getAttribute->delete();
                }
                if ($keyAttr) {
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

    public function ajaxAttribute(Request $request)
    {
        if ($request->id) {
            $id = $request->id;
            $data = AttributeValue::where('attribute_id', '=', $id)->get(['id', 'value as text']);

            return response()->json([
                'data' => $data,
                'status' => 200
            ], 200);
        }
        return response()->json([
            'status' => 404
        ], 404);
    }

    public function checkAttribute($request)
    {
        if ($request->attr && $request->attr['option']) {
                foreach ($request->attr['option'] as $option) {
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
                    $this->checkPositionAttribute($option['position']);
                }
        }
    }

    public function checkPositionAttribute($option)
    {
        if ($option['position']) {
            $positions = explode(',', $option['position']);
            foreach ($positions as $o) {
                $attVal = new attributeValueModel();
                $attVal->attribute_id = $attr->id_attr;
                $attVal->value = $o;
                $attVal->save();
            }
            // $attVal = new attributeValueModel();
            // $attVal->attribute_id = $attr->id_attr;
            // $attVal->value = json_encode($option['position']);
            // $attVal->save();
        }
    }
}
