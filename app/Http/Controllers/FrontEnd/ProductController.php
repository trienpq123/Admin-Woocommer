<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class ProductController extends Controller
{
    public function index(Request $request, $slug){
        $product = ProductModel::where('slug',$slug)->with(['images' => function($query){
           return $query->select('link_img','name_img','id_product');
        }])->first();
        $productRelated = ProductModel::where('id_category',$product->id_category)->where('id_product','<>',$product->id_product)->with(['images' => function($query){
            return $query->select('link_img','name_img','id_product');
         }])->get();
        return view('users.pages.product',compact('product','productRelated'));
    }
}
