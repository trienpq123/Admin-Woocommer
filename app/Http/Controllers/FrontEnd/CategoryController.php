<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public function index(Request $request, $slug){
        $category = CategoryModel::slug($slug)->with('product')->first();
        // dd($category);
        // Find Price Min
        return view('users.pages.category', compact('category'));
    }
}
