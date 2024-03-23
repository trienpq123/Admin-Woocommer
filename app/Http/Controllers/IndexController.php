<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index(Request $request){
  
        return view('admin.dashboad');
    }

    public function  indexUser(Request $request){
        return view('users.index');
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
