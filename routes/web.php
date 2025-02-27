<?php

use App\Http\Controllers\AttriButeCatController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromotionProductController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\UserController;
use App\Models\FilterCategoryOption;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [IndexController::class, 'indexUser'])->name('index');
Route::group(['middleware' => ['role:Administrator']], function () {
    Route::get('/pulse-overview',function(){
        echo 'ok';
    });
});
Route::get('login',[DashboardController::class,'login'])->name('login');
Route::post('login',[DashboardController::class,'loginPost'])->name('loginPost');

Route::get('/redirect/{driver}',[DashboardController::class,'redirectToProvider'])->name('redirectToGoogle');
Route::get('/auth/{driver}/callback',[DashboardController::class,'handleGoogleCallback'])->name('handleGoogleCallback');
Route::group([ 'middleware' => 'Localization'],function() {
    Route::get('logout',[DashboardController::class,'logout'])->name('logout');
    Route::middleware(['check_login'])->prefix('admin')->name('admin.')->group(function(){
        Route::get('/dashboard',[IndexController::class,'index'])->name('DashboardAdmin');
        Route::prefix('filter')->name('filter.')->group(function() {
            Route::get('/',[FilterController::class,'listFilter'])->name('listFilter');
            Route::get('/api/list',[FilterController::class,'apiListFilter'])->name('apiListFilter');
            Route::get('/add',[FilterController::class,'addFilter'])->name('addFilter');
            Route::get('/edit',[FilterController::class,'editFilter'])->name('editFilter');
            Route::post('/add',[FilterController::class,'postAddFilter'])->name('postAddFilter');
            Route::post('/edit',[FilterController::class,'putEditFilter'])->name('putEditFilter');
            Route::delete('/delete',[FilterController::class,'deleteFilter'])->name('deleteFilter');
        });
        Route::prefix('category')->name('category.')->group(function() {
            Route::get('/',[CategoryController::class,'listCategory'])->name('listCategory');
            Route::get('/api/list',[CategoryController::class,'apiListCategory'])->name('apiListCategory'); // Trả Api về form edit popup
            Route::get('/add',[CategoryController::class,'addCategory'])->name('addCategory');
            // Route::get('/edit/',[CategoryController::class,'editCategory'])->name('editCategory'); // Xử lý form edit popup
            Route::get('/edit',[CategoryController::class,'editCategory'])->name('editCategory');
            Route::post('/add',[CategoryController::class,'postAddCategory'])->name('postAddCategory');
            Route::put('/edit/{id}',[CategoryController::class,'putEditCategory'])->name('putEditCategory');
            Route::delete('/delete/',[CategoryController::class,'deleteCategory'])->name('deleteCategory');
            Route::get('/getChild/',[CategoryController::class,'getChildCategory'])->name('getChildCategory');
        });
        Route::prefix('product')->name('product.')->group(function() {
            Route::get('/',[ProductController::class,'listProduct'])->name('listProduct');
            Route::get('/api/list',[ProductController::class,'apiListProduct'])->name('apiListProduct');
            Route::get('/add',[ProductController::class,'addProduct'])->name('addProduct');
            Route::get('/edit',[ProductController::class,'editProduct'])->name('editProduct');
            Route::post('/add',[ProductController::class,'postAddProduct'])->name('postAddProduct');
            Route::post('/edit',[ProductController::class,'putEditProduct'])->name('putEditProduct');
            Route::post('/delete',[ProductController::class,'deleteProduct'])->name('deleteProduct');
            Route::delete('/delete-product-delete',[ProductController::class,'deleteDetailProduct'])->name('deleteProductDetail');
            Route::delete('/delete-product-image',[ProductController::class,'deleteImageProduct'])->name('deleteImageProduct');
        });
        Route::prefix('promotion')->name('promotion.')->group(function(){
            Route::get('/',[PromotionProductController::class,'index'])->name('index');
            Route::get('/create',[PromotionProductController::class,'create'])->name('create');
            Route::post('/store',[PromotionProductController::class,'store'])->name('store');
            Route::get('/edit/{id}',[PromotionProductController::class,'edit'])->name('edit');
            Route::post('/update/{id}',[PromotionProductController::class,'update'])->name('update');
            Route::get('/delete/{id}',[PromotionProductController::class,'delete'])->name('delete');
        });
        Route::prefix('comment')->name('comment.')->group(function(){
            Route::get('/',[CommentController::class,'index'])->name('index');
            Route::get('/create',[CommentController::class,'create'])->name('create');
            Route::get('/store',[CommentController::class,'store'])->name('store');
            Route::get('/edit/{id}',[CommentController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[CommentController::class,'update'])->name('update');
            Route::get('/delete/{id}',[CommentController::class,'delete'])->name('delete');
        });
        Route::prefix('rate')->name('rate.')->group(function(){
            Route::get('/',[RateController::class,'index'])->name('index');
            Route::get('/create',[CommentController::class,'create'])->name('create');
            Route::get('/store',[CommentController::class,'store'])->name('store');
            Route::get('/edit/{id}',[CommentController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[CommentController::class,'update'])->name('update');
            Route::get('/delete/{id}',[RateController::class,'delete'])->name('delete');
        });
        Route::prefix('brand')->name('brand.')->group(function() {
            Route::get('/',[BrandController::class,'listBrand'])->name('listBrand');
            Route::get('/api/list',[BrandController::class,'apiListBrand'])->name('apiListBrand');
            Route::get('/add',[BrandController::class,'addBrand'])->name('addBrand');
            Route::get('/edit',[BrandController::class,'editBrand'])->name('editBrand');
            Route::post('/add',[BrandController::class,'postAddBrand'])->name('postAddBrand');
            Route::post('/edit',[BrandController::class,'putEditBrand'])->name('putEditBrand');
            Route::delete('/delete',[BrandController::class,'deleteBrand'])->name('deleteBrand');
        });
        Route::prefix('order')->name('order.')->group(function() {
            Route::get('/',[OrderController::class,'listOrder'])->name('listOrder');
            Route::get('/api/list',[OrderController::class,'apiListOrder'])->name('apiListOrder');
            Route::get('/order-detail',[OrderController::class,'orderDetail'])->name('orderDetail');
            // Route::get('/edit',[OrderController::class,'editBrand'])->name('editBrand');
            Route::get('/add',[OrderController::class,'orderAdd'])->name('orderAdd');
            Route::post('/add',[OrderController::class,'orderAddStore'])->name('orderAddStore');
            // Route::post('/edit',[OrderController::class,'putEditBrand'])->name('putEditBrand');
            // Route::delete('/delete',[OrderController::class,'deleteBrand'])->name('deleteBrand');
        });
        Route::prefix('pages')->name('pages.')->group(function() {
            Route::get('/',[PagesController::class,'listPages'])->name('listPages');
            Route::get('/api/list',[PagesController::class,'apiListPages'])->name('apiListPages');
            Route::get('/add',[PagesController::class,'addPages'])->name('addPages');
          
            Route::post('/add',[PagesController::class,'postAddPages'])->name('postAddPages');
            Route::post('/edit',[PagesController::class,'putEditPages'])->name('putEditPages');
            Route::delete('/delete',[PagesController::class,'deletePages'])->name('deletePages');
            // Ajax routes
            Route::get('/edit',[PagesController::class,'editPages'])->name('editPages');
        });
        Route::prefix('news')->name('news.')->group(function() {
            Route::get('/',[NewsController::class,'listNews'])->name('listNews');
            Route::get('/api/list',[NewsController::class,'apiListNews'])->name('apiListNews');
            Route::get('/add',[NewsController::class,'addNews'])->name('addNews');
            Route::get('/edit',[NewsController::class,'editNews'])->name('editNews');
            Route::post('/add',[NewsController::class,'postAddNews'])->name('postAddNews');
            Route::post('/edit',[NewsController::class,'putEditNews'])->name('putEditNews');
            Route::delete('/delete',[NewsController::class,'deleteNews'])->name('deleteNews');
        });
        Route::prefix('banner')->name('banner.')->group(function() {
            Route::get('/',[BannerController::class,'listBanner'])->name('listBanner');
            Route::get('/api/list',[BannerController::class,'apiListBanner'])->name('apiListBanner');
            Route::get('/add',[BannerController::class,'addBanner'])->name('addBanner');
            Route::get('/edit',[BannerController::class,'editBanner'])->name('editBanner');
            Route::post('/add',[BannerController::class,'postAddBanner'])->name('postAddBanner');
            Route::post('/edit/{id}',[BannerController::class,'putEditBanner'])->name('putEditBanner');
            Route::delete('/delete',[BannerController::class,'deleteBanner'])->name('deleteBanner');
        });
        Route::prefix('menu')->name('menu.')->group(function() {
            Route::get('/',[MenuController::class,'listMenu'])->name('listMenu');
            Route::get('/add',[MenuController::class,'addMenu'])->name('addMenu');
            Route::post('/add',[MenuController::class,'postAddMenu'])->name('postAddMenu');
            Route::get('/edit',[MenuController::class,'putEditMenu'])->name('putEditMenu');
            Route::get('/api/edit',[MenuController::class,'editEditMenu'])->name('editEditMenu');
            Route::post('/type-menu',[MenuController::class,'typeMenu'])->name('typeMenu');
            Route::post('/api/edit-menu',[MenuController::class,'apiPutEditMenu'])->name('apiPutEditMenu');
            Route::delete('/delete-menu',[MenuController::class,'deleteMenu'])->name('deleteMenu');
            // New
            Route::get('/add-type-menu',[MenuController::class,'addTypeMenu'])->name('addTypeMenu');
            Route::get('/add-type-menu/{id}',[MenuController::class,'editTypeMenu'])->name('editTypeMenu');
            Route::post('/add-type-menu/{id}',[MenuController::class,'updateTypeMenu'])->name('updateTypeMenu');
            Route::post('/create-type-menu',[MenuController::class,'creatingMenu'])->name('creatingMenu');
            
        });
        Route::prefix('attr')->name('attr.')->group(function() {
            Route::get('/',[AttributeController::class,'listAttr'])->name('listAttr');
            Route::get('/api/list',[AttributeController::class,'apiListAttr'])->name('apiListAttr');
            Route::get('/add',[AttributeController::class,'addAttr'])->name('addAttr');
            Route::get('/edit/',[AttributeController::class,'editAttr'])->name('editAttr');
            Route::post('/add',[AttributeController::class,'postAddAttr'])->name('postAddAttr');
            Route::put('/edit/',[AttributeController::class,'putEditAttr'])->name('putEditAttr');
            Route::delete('/delete',[AttributeController::class,'deleteAttr'])->name('deleteAttr');
            Route::get('/delete-attribute-set',[AttributeController::class,'deleteAttrSet'])->name('deleteAttrSet');
            Route::get('/delete-more',[AttributeController::class,'deleteMore'])->name('deleteMore');
            // AJAX
            Route::post('/ajax/attribute',[AttributeController::class,'ajaxAttribute'])->name('ajaxAttribute');
        });

        Route::prefix('attr-cat')->name('attr-cat.')->group(function() {
            // Route::get('/',[AttributeController::class,'listAttr'])->name('listAttr');
            // Route::get('/api/list',[AttributeController::class,'apiListAttr'])->name('apiListAttr');
            // Route::get('/add',[AttributeController::class,'addAttr'])->name('addAttr');
            // Route::get('/edit/',[AttributeController::class,'editAttr'])->name('editAttr');
            // Route::post('/add',[AttributeController::class,'postAddAttr'])->name('postAddAttr');
            // Route::put('/edit/',[AttributeController::class,'putEditAttr'])->name('putEditAttr');
            Route::delete('/delete',[AttriButeCatController::class,'deleteAttrCatOption'])->name('deleteAttrCatOption');
            // Route::get('/delete-attribute-set',[AttributeController::class,'deleteAttrSet'])->name('deleteAttrSet');
            // Route::get('/delete-more',[AttributeController::class,'deleteMore'])->name('deleteMore');
        });

        Route::prefix('system')->name('system.')->group(function(){

            Route::match(['get','post'],'/',[SystemController::class,'index'])->name('config');

        });
        Route::prefix('roles')->name('roles.')->group(function(){
            Route::get('/',[RoleController::class,'index'])->name('role.index');
            Route::get('/api/get',[RoleController::class,'index'])->name('role.list');
            Route::get('/add',[RoleController::class,'RoleFormAdd'])->name('role.create');
            Route::get('/edit-role/{id}',[RoleController::class,'RoleFormEdit'])->name('role.edit');
            Route::put('/edit-role/{id}',[RoleController::class,'RoleFormUpdate'])->name('role.update');
            Route::post('/add',[RoleController::class,'RoleFormPostAdd'])->name('role.store');
            Route::get('/delete/{id}',[RoleController::class,'RoleDelete'])->name('role.delete');
            Route::delete('/delete-checked/',[RoleController::class,'RoleDeleteCheck'])->name('role.delete-checked');
        });
      
        Route::prefix('permisson')->name('permisson.')->group(function(){
            Route::get('/',[PermissionController::class,'index'])->name('permisson.index');
            Route::get('/add',[PermissionController::class,'PermissionFormAdd'])->name('permisson.create');
            Route::get('/edit-permisson/{id}',[PermissionController::class,'PermissionFormEdit'])->name('permisson.edit');
            Route::put('/edit-permisson/{id}',[PermissionController::class,'PermissionFormUpdate'])->name('permisson.update');
            Route::post('/add',[PermissionController::class,'PermissionFormPostAdd'])->name('permisson.store');
            Route::get('/delete/{id}',[PermissionController::class,'PermissionDelete'])->name('permisson.delete');
        });
        Route::prefix('User')->name('User.')->group(function(){
            Route::get('/',[UserController::class,'index'])->name('User.index') ;
            // Route::get('/add',[UserController::class,'UserFormAdd'])->name('User.create')->middleware(['permission:add_user']);
            Route::get('/add',[UserController::class,'UserFormAdd'])->name('User.create')->middleware(['role_or_permission:user.add|Super Admin']);
            Route::get('/edit-user/{id}',[UserController::class,'UserFormEdit'])->name('User.edit')->middleware(['role_or_permission:user.edit|Super Admin']);
            // ->middleware(['permission:edit user']);
            Route::put('/edit-user/{id}',[UserController::class,'UserFormUpdate'])->name('User.update');
            // Route::post('/add',[UserController::class,'UserFormPostAdd'])->name('User.store')->middleware(['permission:add_user']);
            Route::post('/add',[UserController::class,'UserFormPostAdd'])->name('User.store')->middleware(['role_or_permission:user.add|Super Admin']);
            Route::get('/delete/{id}',[UserController::class,'UserDelete'])->name('User.delete');
            // Route::post('destroy',[UserController::class,'destroy'])->name('User.destroy');
            Route::get('/get-permission-role',[UserController::class,'getPermissionRole'])->name('user.getPermissionRole');
        });

        Route::prefix('profile')->name('profile.')->group(function(){
            Route::get('/',[ProfileController::class,'index'])->name('index');
            
            Route::put('/change-password',[ProfileController::class,'update'])->name('updatePassword');
            // Route::post('/edit-profile',[ProfileController::class,'editProfile'])->name('editProfile');
        });
        Route::get('ckeditor', [FileController::class,'index'])->name('indexCkeditor');
        Route::post('ckeditor/upload', [FileController::class,'uploadFile'])->name('uploadFile');
    });
    Route::get('lang/{language}',[IndexController::class,'checkLanguage'])->name('checkLanguage');
});


// require __DIR__.'/auth.php';
