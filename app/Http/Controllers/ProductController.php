<?php

namespace App\Http\Controllers;

use App\Models\AttributeModel;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\CategoryProductModel;
use App\Models\FilterProduct;
use App\Models\ProductDetailModel;
use App\Models\ProductImageModel;
use App\Models\ProductModel;
use App\Models\ProductVariantOptions;
use App\Models\ProductVariants;
use App\Models\SkuProductVariantOptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function listProduct(Request $request)
    {
        $listProduct = ProductModel::orderBy('id_product', 'desc')->get();
        $getBrands = BrandModel::orderBy('id_brand', 'desc')->get();
        $listCategory = CategoryModel::whereNull('parent_category')->orderBy('id_category', 'desc')->get();
        $listAttr = AttributeModel::orderBy('id_attr', 'desc')->get();
        return view('admin.layouts.products.list', compact('getBrands', 'listCategory', 'listProduct', 'listAttr'));
    }

    public function apiListProduct(Request $request)
    {
        $listProduct = ProductModel::with('images')->get();
        return response()->json([
            'status' => 200,
            'data' => $listProduct
        ]);
    }

    public function addProduct(Request $request)
    {

        $listProduct = ProductModel::orderBy('id_product', 'desc')->get();
        $getBrands = BrandModel::orderBy('id_brand', 'desc')->get();
        $listCategory = CategoryModel::whereNull('parent_category')->orderBy('id_category', 'desc')->get();
        $listAttr = AttributeModel::orderBy('id_attr', 'desc')->get();
        return view('admin.layouts.products.add', compact('getBrands', 'listCategory', 'listProduct', 'listAttr'));
    }

    public function editProduct(Request $request)
    {
        // if ($request->id) {
        //     $a = ProductModel::where('id_product', '=', $request->id);
        //     $b = $a->FirstOrFail();
        //     $product = ProductModel::where('id_product', '=', $request->id)->with('brands', 'images', 'category', 'product_detail')->first();
        //     return response()->json([
        //         'status' => 200,
        //         'data' => $product
        //     ]);
        // }
        $listProduct = ProductModel::orderBy('id_product', 'desc')->get();
        $getBrands = BrandModel::orderBy('id_brand', 'desc')->get();
        $listCategory = CategoryModel::whereNull('parent_category')->orderBy('id_category', 'desc')->get();
        $listAttr = AttributeModel::orderBy('id_attr', 'desc')->get();
        if ($request->id) {
            $id = $request->id;
            $product = ProductModel::where('id_product',$id)->with('product_variants','skus_product_variant_options','product_variants.optionAttribute', 'product_variants.attribute')->first();
            // dd($product);
            return view('admin.layouts.products.edit', compact('getBrands', 'listCategory', 'listProduct', 'listAttr', 'product'));
        }
        return view('admin.layouts.products.edit', compact('getBrands', 'listCategory', 'listProduct', 'listAttr'));
    }


    public function postAddProduct(Request $request)
    {
        // dd($request->all());
        // $validator = Validator::make(
        //     $request->all(),
        //     [
        //         'name' => "required|unique:product,name_product"
        //     ],
        //     [
        //         'name.required' => 'Tên sản phẩm không được bỏ trống',
        //         'name.unique' => 'Tên sản phẩm đã tồn tại'
        //     ]
        // );
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        $p = new ProductModel();
        $p->name_product = $request->name;
        $p->slug = $request->slug;
        $p->p_desc_short = $request->desc_short;
        $p->p_desc = $request->desc;
        $p->id_brand = $request->idBrand;

        $id_category = '';

        $p->product_SKU = $request->product_sku;
        $p->status = $request->status;
        $p->save();
        if ($request->parent_category) {
            $cateProduct = new CategoryProductModel();
            foreach ($request->parent_category as $cate) {
                $cateProduct->id_category =  $cate;
                $cateProduct->id_product = $p->id_product;
                $cateProduct->save();
            }
        }
        $get_last_product = ProductModel::orderBy('id_product', 'desc')->first();
        if ($request->image) {

            foreach ($request->image as $image) {

                $imageName = $image;
                $name_image = time() . '_' . $imageName->getClientOriginalName();
                $explode = explode('.', $name_image);
                $typeImage = end($explode);
                $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
                if (in_array($typeImage, $imageExtensions)) {
                    $p_image = new ProductImageModel();
                    $path = 'public/uploads/images/products/';
                    $imageName->move($path, $name_image);
                    $link_url = env('APP_URL') . '/' . $path . $name_image;
                    $p_image->link_img = $link_url;
                    $p_image->name_img = $name_image;
                    $p_image->id_product = $get_last_product->id_product;
                    $p_image->save();
                }
                // else {
                //     return response()->json(
                //         [
                //             'status' => 404,
                //             'message' => ["image" =>  "Tệp phải là hình ảnh"]
                //         ]
                //     );
                // }
            }
        }
        // ADD VARIANTS
        if ($request->attr) {
            $attr = $request->attr;
            foreach ($attr as $key => $value) {
                $ProductVariants = ProductVariants::create([
                    'id_product' => $get_last_product->id_product,
                    'id_attr' => $value['name']
                ]);
                if ($ProductVariants) {
                    // ADD OPTIONS
                    // dd($request->all());
                    if (is_array($value['title'])) {
                        $title = '';
                        foreach ($value['title'] as $count => $item) {
                            $title .= $item . " - ";
                        }
                        $title = rtrim($title, " - ");
                     
                        $ProductVariants->optionAttribute()->createMany([
                            ['title' => $title],
                            ['id_product_variants' => $ProductVariants->id_product_variants]
                        ]);
                    }
                }
            }
        }
        if ($request->product) {

            $product = $request->product;
            if ($product['variants'] && is_array($product['variants']) && count($product['variants']) > 0) {
                foreach ($product['variants'] as $variant) {
                    // REPLACE ATTRIBUTE TO STRING
                    if (is_array($variant['title']) && count($variant['title']) > 0) {
                        $separator = " - ";
                        $joinedString = "";
                        foreach ($variant['title'] as $key => $value) {
                            if ($key > 0) {
                                $joinedString .= $separator;
                            }
                            $joinedString .= $value;
                        }
                        $joinedString = rtrim($joinedString, $separator);
                        $variant['title'] = $joinedString;
                    }
                    // ADD VARIANTS
                    SkuProductVariantOptions::create([
                        'id_product' => $get_last_product->id_product,
                        'price' => $variant['price'],
                        'stock' => $variant['stock'],
                        'discount' => $variant['price_old'],
                        'attribute' => $variant['title']
                    ]);
                }
            }
        }
        $product_Data = ProductModel::all();
        // return response()->json([
        //     'status' => 200,
        //     'request' => json_decode($request->product_detail),
        //     'product_detail' => $request->all(),
        //     // 'option' => $fp
        // ]);
        return back()->with(['message' => 'Thêm thành công']);
        // dd($request->product);
    }

    public function putEditProduct(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => "required|"
            ],
            [
                'name.required' => 'Tên sản phẩm không được bỏ trống',
            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 404,
                'message' => $validator->messages()
            ]);
        }
        $p = ProductModel::where('id_product', '=', $request->id)->first();
        $p->name_product = $request->name;
        $p->slug = $request->slug;
        $p->p_desc_short = $request->desc_short;
        $p->p_desc = $request->desc;
        $p->id_brand = $request->idBrand;
        $p->id_category = $request->id_category;
        $p->product_SKU = $request->product_sku;
        $p->status = $request->status;

        $p->save();
        if ($request->image) {

            foreach ($request->image as $image) {

                $imageName = $image;
                $name_image = time() . '_' . $imageName->getClientOriginalName();
                $explode = explode('.', $name_image);
                $typeImage = end($explode);
                $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
                if (in_array($typeImage, $imageExtensions)) {
                    $p_image = new ProductImageModel();
                    $path = 'public/uploads/images/products/';
                    $imageName->move($path, $name_image);
                    $link_url = env('APP_URL') . '/' . $path . $name_image;
                    $p_image->link_img = $link_url;
                    $p_image->name_img = $name_image;
                    $p_image->id_product = $request->id;
                    $p_image->save();
                } else {
                    return response()->json(
                        [
                            'status' => 404,
                            'message' => ["image" =>  "Tệp phải là hình ảnh"]
                        ]
                    );
                }
            }
        }
        $a = [];
        if (!empty($request->product_detail)) {
            $decoded = json_decode($request->product_detail);
            if (!is_null($decoded) && count($decoded) > 0) {

                foreach ($decoded as $item) {
                    if (!empty($item->idProductDetail)) {

                        $PDetail = ProductDetailModel::where('id_product_detail', '=', $item->idProductDetail)->first();
                        // $PDetail->id_product = $request;
                        $PDetail->price = 3;
                        $PDetail->price_sale = $item->product_price_old;
                        $PDetail->quanlity = $item->product_stock;
                        $PDetail->product_sku = $item->product_type_sku;
                        $PDetail->save();
                    } else {

                        $PDetail = new ProductDetailModel();
                        $PDetail->id_product = $request->id;
                        $PDetail->size = $item->colorOfProductValue;
                        $PDetail->color = $item->colorOfProductValue;
                        $PDetail->price = $item->product_price;
                        $PDetail->price_sale = $item->product_price_old;
                        $PDetail->quanlity = $item->product_stock;
                        $PDetail->product_sku = $item->product_type_sku;

                        $PDetail->save();
                    }
                }
            }
        }
        $produc_Data = ProductModel::all();
        return response()->json([
            'status' => 200,
            'product_detail' => $request->all(),
            'data' =>  json_decode($request->product_detail),
            'a' => $a
        ]);
    }

    public function deleteProduct(Request $request)
    {
        if ($request->data) {

            foreach ($request->data as $id) {
                $image = ProductImageModel::where('id_product', '=', $id);
                if (count($image->get()) > 0) {
                    foreach ($image as $i) {
                        if (File::exists("public/uploads/images/products/" . $image->link_img)) {
                            File::delete("public/uploads/images/products/" . $image->link_img);
                        }
                    }
                    $image->delete();
                }

                $productDetail = ProductDetailModel::where('id_product', '=', $id);
                if (count($productDetail->get()) > 0) {
                    foreach ($productDetail as $PD) {
                        if (File::exists('public/uploads/images/products/' . $PD->name_img)) {
                            File::delete('public/uploads/images/products/' . $PD->name_img);
                        }
                    }
                    $productDetail->delete();
                }

                ProductModel::where('id_product', '=', $id)->delete();
            }
            return response()->json([
                "status" => 200,
                "data" => $image->get()
            ]);
        }
    }

    public function deleteDetailProduct(Request $request)
    {
        if ($request->id) {
            $check_productDetail = ProductDetailModel::where('id_product_detail', '=', $request->id);
            if (count($check_productDetail->get()) > 0) {
                $check_productDetail->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Đã xoá thành công'
            ]);
        }
    }

    public function deleteImageProduct(Request $request)
    {
        if ($request->id) {
            $check_productImages = ProductImageModel::where('id_product_image', '=', $request->id);
            if (count($check_productImages->get()) > 0) {
                $check_productImages->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Đã xoá thành công'
            ]);
        }
    }
}
