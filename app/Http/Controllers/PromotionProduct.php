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
        $product = ProductModel::all('id_product', 'name_product');
        if($product_promotion) {
            $product_selected = $product_promotion->product->whereIn('id_product',$product_promotion->id_product)->get('id_product');
    
            return view('admin.layouts.promotion.edit', compact('product','promotion','product','product_selected'));
        }
        return view('admin.layouts.promotion.edit', compact('promotion','product'));
    }

    public function update(Request $request,$id)
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
        $promotion = PromotionModel::updateOrCreate(['id' => $id],[
            'title' => $request->name,
            'discount' => $request->discount,
            'from' => $date_start,
            'to' => $date_end,
            'status' => $request->status,
            'type' => $request->type,
        ]);
        if ($promotion) {

            $promotion->product_promotion()->updateOrCreate( ['promotion_id' => $promotion->id],[
                'promotion_id' => $promotion->id,
                'id_product' => $request->id_product
            ]);
        }
        return back()->with(['success', 'Cập nhật thành công']);
    }

    public function delete(Request $request,$id)
    {
        $promotion =   PromotionModel::find($id);
        if($promotion){
            $promotion->product_promotion()->delete();
            $promotion->delete();
            return back()->with(['success', 'Xóa thanh cong']);
        }
        return back()->with(['error', 'Xóa that bai']);
    }
    public function destroy()
    {
    }

    public function find()
    {
    }
}
