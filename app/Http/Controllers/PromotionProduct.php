<?php

namespace App\Http\Controllers;

use App\Models\PromotionModel;
use Illuminate\Http\Request;

class PromotionProduct extends Controller
{
    public function index(){
        return view('admin.layouts.promotion.list');
    }

    public function create(Request $request){
        
        return view('admin.layouts.promotion.add');
    }

    public function store(Request $request){
        // dd($request->all());
        $promotion = PromotionModel::create([
            'title' => $request->name,
            'discount' => $request->discount,
            'from' => $request->date_start,
            'to' => $request->date_end,
            'status' => $request->status,
            'type' => $request->type,
            
        ]);
        if($promotion){
            dd($promotion);
        }
        return back();
    }

    public function edit(){

    }

    public function update(){

    }

    public function delete(){

    }
    public function destroy(){

    }

    public function find()
    {
        
    }
}
