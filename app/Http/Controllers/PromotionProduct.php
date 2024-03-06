<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\PromotionModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PromotionProduct extends Controller
{
    protected $product;
    public function __contruct()
    {
        $this->product = new ProductModel();
    }
    public function index()
    {
        return view('admin.layouts.promotion.list');
    }

    public function create(Request $request)
    {
        $product = $this->product::all('id_product', 'name_product');
        // dd($product);
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
        $promotion = $this->product::create([
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

    public function edit()
    {
        $product = $this->product::all('id_product', 'name_product');;
        return view('admin.layouts.promotion.edit',compact('product'));
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
