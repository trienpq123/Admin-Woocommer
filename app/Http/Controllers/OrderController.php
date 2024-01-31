<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function listOrder(Request $request){
        return view('admin.layouts.orders.list');
    }
    public function orderDetail(Request $request){
        return view('admin.layouts.orders.detail');
    }

    public function orderAdd(Request $request){
        
        return view('admin.layouts.orders.add');
    }
}
