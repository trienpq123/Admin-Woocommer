<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\PromotionModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PromotionProduct extends Controller
{
    protected $product;
    public function __contruct(ProductModel $product)
    {
        $this->product = $product;
    }
    public function index()
    {   
        $promotion = PromotionModel::all();
        $timeNow = Carbon::now();
        $timeNow = $timeNow->toDateTimeString();
        
        // $product = $this->product::all('id_product', 'name_product');;
        return view('admin.layouts.promotion.list',compact('promotion','timeNow'));
    }

    public function create(Request $request)
    {

        $product = ProductModel::all();
        return view('admin.layouts.promotion.add', compact('product'));
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $date_start = '';
        $date_end = '';
        if ($request->date_start) {
            $date_start = Carbon::parse($request->date_start)->toDateTimeString();
        }
        if ($request->date_end) {
            $date_end = Carbon::parse($request->date_end)->toDateTimeString();
        }
        $promotion = PromotionModel::create([
            'title' => $request->name,
            'discount' => $request->discount,
            'from' => $date_start,
            'to' => $date_end,
            'status' => $request->status,
            'type' => $request->type,
        ]);
        if ($promotion) {
            // dd($promotion);
            $promotion->product_promotion()->create([
                'id_promotion' => $promotion->id,
                'id_product' => $request->id_product
            ]);
        }
        return back();
    }

    public function edit(Request $request,$id)
    {
        $promotion = PromotionModel::find($id);
        $product_promotion = $promotion->product_promotion->first();

        dd($product_promotion->product->whereIn('id_product',$product_promotion->id_product)->get());
        
        if($promotion) {
            dd($promotion);
            return view('admin.layouts.promotion.edit', compact('product','promotion'));
        }
        return view('admin.layouts.promotion.edit', compact('product'));
    }

    public function update()
    {
    }

    public function delete()
    {
    }
    public function destroy()
    {
    }

    public function find()
    {
    }
}
