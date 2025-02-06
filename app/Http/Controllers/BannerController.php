<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function listBanner(Request $request)
    {

        $banner = BannerModel::orderBy('id', 'desc')->get();
        return view('admin.layouts.banner.list', compact('banner'));
    }

    public function apiListBanner(Request $request)
    {
        $banner = BannerModel::orderBy('id', 'desc')->get();
        return response()->json([
            'status' => 200,
            'data' => $banner
        ]);
    }

    public function addBanner(Request $request)
    {
        return view('admin.layouts.banner.add');
    }

    public function editBanner(Request $request,)
    {
        if ($request->id) {
            $id = $request->id;
            $banner = BannerModel::find($id);
            return view('admin.layouts.banner.edit', compact('banner'));
        }
        // if($request->id){
        //     $banner = BannerModel::find($request->id);
        //     return response()->json([
        //         'status' => 200,
        //         'data' => $banner
        //     ]);
        // }
        return view('admin.layouts.banner.edit');
    }

    public function putEditbanner(Request $request,$id)
    {
        
        if ($id) {
            $c_banner = BannerModel::find($id);
            if ($c_banner) {
                if ($request->image) {
                    $imageName = $request->image;
                    $name_image = time() . '_' . $imageName->getClientOriginalName();
                    $explode = explode('.', $name_image);
                    $typeImage = end($explode);
                    $imageExtensions = ['jpg', 'jpeg', 'gif', 'webp', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
                    if (in_array($typeImage, $imageExtensions)) {
                        $path = 'public/uploads/images/banner/';
                        if (File::exists($path . $c_banner->name_img)) {
                            File::delete($path . $c_banner->name_img);
                        }
                        $imageName->move($path, $name_image);
                        $link_url = env('APP_URL') . '/' . $path . $name_image;

                        $c_banner->link_img = $link_url;
                        $c_banner->name_img = $name_image;
                        $c_banner->title = $request->name;
                        $c_banner->status = $request->status;
                        $c_banner->index = $request->index;
                    }
                }
            }
            $c_banner->save();
            return redirect()->route('admin.banner.listBanner')->with(['success' => 'Cập nhật thành công']);
        }
    }

    public function postAddbanner(Request $request)
    {
        // dd($request->all());
        $banner = new BannerModel();
        $banner->title = $request->name;
        $banner->status = $request->status;
        $banner->index = $request->index;
        if ($request->image) {
            $imageName = $request->image;
            $name_image = time() . '_' . $imageName->getClientOriginalName();
            $explode = explode('.', $name_image);
            $typeImage = end($explode);
            $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd', 'webp'];
            if (in_array($typeImage, $imageExtensions)) {
                $path = 'public/uploads/images/banner/';
                $imageName->move($path, $name_image);
                $link_url = env('APP_URL') . '/' . $path . $name_image;
                $banner->link_img = $link_url;
                $banner->name_img = $name_image;
            }
        }
        $banner->save();
        // $c_banner->alt = $request->name;
        //     if ($request->image) {

        //         $imageName = $request->image;
        //         $name_image = time() . '_' . $imageName->getClientOriginalName();
        //         $explode = explode('.', $name_image);
        //         $typeImage = end($explode);
        //         $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
        //         if (in_array($typeImage, $imageExtensions)) {
        //             $path = 'public/uploads/images/banner/';
        //             $imageName->move($path, $name_image);
        //             $link_url = env('APP_URL') . '/' . $path . $name_image;

        //             $c_banner->link_img = $link_url;
        //             $c_banner->name_img = $name_image;

        //         } else {
        //             return response()->json(
        //                 [
        //                     'status' => 404,
        //                     'message' => ["image" =>  "Tệp phải là hình ảnh"]
        //                 ]
        //             );
        //         }
        //     }

        // $c_banner->save();
        // return response()->json([
        //     'status' => 200,
        //     'message' => 'Thêm thành công'
        // ]);
        return back();
    }

    public function deletebanner(Request $request)
    {
        if ($request->data) {
            foreach ($request->data as $id) {
                $banner = BannerModel::find($id);
                if ($banner) {
                    $path = 'public/uploads/images/banner/';
                    if (File::exists($path . $banner->name_img)) {
                        File::delete($path . $banner->name_img);
                    }
                    $banner->delete();
                }
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá thành công'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Banner không tồn tại'
            ]);
        }
    }

    public function deleteDetailNews(Request $request) {}

    public function deleteImageNews(Request $request) {}
}
