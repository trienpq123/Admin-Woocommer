<?php

use App\Http\Controllers\Auth\Product\ProductControler;
use App\Http\Controllers\Auth\User\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login', [UserController::class,'postLoginApi'])->name('login');
Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/user', [UserController::class, 'show'])->name('auth.user');
        Route::delete('/user/destroy', [UserController::class, 'deleteUsers'])->name('auth.user.destroy');
    });

    route::prefix('profile')->name('profile.')->group(function(){
        Route::put('/edit-profile',[ProfileController::class,'editProfile'])->name('auth.profile.editProfile');
    });


    route::prefix('product')->name('product.')->group(function(){
        Route::post('/getIdProduct',[ProductControler::class,'getIdProduct'])->name('getIdProduct');
    });
});


