<?php

use App\Http\Controllers\FrontEnd\CategoryController;
use App\Http\Controllers\FrontEnd\ProductController;
use Illuminate\Support\Facades\Route ;

Route::get('/product/{slug}',[ProductController::class,'index'])->name(name: 'product.detail');
Route::get('/category/{slug}',[CategoryController::class,'index'])->name(name: 'category');