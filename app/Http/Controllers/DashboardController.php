<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class DashboardController extends Controller
{
    public function login(Request $request){
        return view('admin.login');
    }

    public function loginPost(Request $request){
        $array = $request->only('email','password');
        $user = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($user)){
            
            return redirect()->route('admin.DashboardAdmin');
        }
        notify()->error('Tài khoản hoặc mật khẩu không đúng!','Lỗi');
        return back()->with('success','Tài khoản hoặc mật khẩu không đúng');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
