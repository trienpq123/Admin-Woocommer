<?php

namespace App\Http\Controllers;

use App\Models\RateModel;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function index(){
        $rates = RateModel::all();
        return view('admin.layouts.rate.list',compact('rates'));
    }

    public function create(){

    }

    public function store(){

    }

    public function edit(Request $request, $id){
        $rate = RateModel::find($id);
        if($rate){
            return view('admin.layouts.rate.edit',compact('rate'));
        }
        return view('admin.layouts.rate.edit');
    }

    public function update(){

    }
    public function delete(Request $request, $id){
        $rate = RateModel::find($id);
        if($rate){
            $rate->delete();
            return redirect()->back()->with('success','Xóa đánh giá thành công');
        }
        return  redirect()->back()->with('error','Xóa đánh giá thất bại');
    }
    public function destroy(){

    }
}
