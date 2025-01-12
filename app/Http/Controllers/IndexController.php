<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use App\Models\CategoryModel;
use App\Models\MenuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index(Request $request){
        return view('admin.dashboad');
    }

    public function  indexUser(Request $request){
        $category = MenuModel::ParentNull()->with('chirendMenu')->get();
        $listCategory = CategoryModel::select('image_category','name_category','slug')->show()->get();
        $catProduct = CategoryModel::with([
            'product' => function($query){
            $query->select('name_product','slug','id_product','id_category','attribute','variants')->where('status',1);
            },
            'product.images' => function($query){
                $query->select('link_img','name_img');
            },
            'category' => function($query){
                $query->select('name_category','slug','parent_category')->where('hide',1);
            }
        ])->whereNull('parent_category')->where('ihome',1)->where('hide',1)->get();
        $banners = BannerModel::select('link_img','title','title')->where('status',1)->orderBy('index' , 'asc')->get();
        return view('users.pages.index',compact('category','listCategory','catProduct','banners'));
    }

    public function checkLanguage(Request $request,$language){

            $lang = config('app.locale');
            if($language == 'en')
                $lang = 'en';
            if($language == 'vi')
                $lang = 'vi';
            Session::put('language',$lang);

            return back();

    }
}
