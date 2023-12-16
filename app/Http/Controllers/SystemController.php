<?php

namespace App\Http\Controllers;

use App\Models\SystemModel;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index(Request $request)
    {
        $system = SystemModel::first();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // dd($request->all());
            $link_logo= '';
            $link_favicon= '';

            if($request->logo){
                $imageName = $request->logo;
                $name_image = time() . '_' . $imageName->getClientOriginalName();
                $explode = explode('.', $name_image);
             
                $typeImage = end($explode);
                $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
                if(in_array($typeImage, $imageExtensions)){
                    $path = 'public/uploads/images/products/';
                    $imageName->move($path, $name_image);
                    $link_logo = env('APP_URL') . '/' . $path . $name_image;
                }
            }
            if($request->favicon){
                $imageName = $request->favicon;
                $name_image = time() . '_' . $imageName->getClientOriginalName();
                $explode = explode('.', $name_image);
             
                $typeImage = end($explode);
                $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
                if(in_array($typeImage, $imageExtensions)){
                    $path = 'public/uploads/images/products/';
                    $imageName->move($path, $name_image);
                    $link_favicon = env('APP_URL') . '/' . $path . $name_image;
                }
            }
            SystemModel::where('id',1)->update([
                'name_site' => $request->name_site,
                'facebook' =>$request->facebook,
                'youtube' =>$request->youtube,
                'zalo' =>$request->zalo,
                'instagram' =>$request->instagram,
                'email' =>$request->email,
                'hotline' =>$request->phone,
                'footer' =>$request->footer,
                'meta_keyword' =>$request->meta_keywords,
                'meta_description' =>$request->meta_description,
                'meta_title' =>$request->meta_title,
                'google_analytics' =>$request->google_analytics,
                'google_map' =>$request->google_map,
                'google_tag_manager' =>$request->google_tag_manager,
                'logo' => $link_logo,
                'favicon' => $link_favicon
            ]);
            return redirect()->back()->with(['status' => 404, 'message' => 'Cập nhật thành công']);
        }
        return view('admin.layouts.system.index', compact('system'));
    }


}
