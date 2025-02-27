<?php

namespace App\Http\Controllers;

use App\Repositories\Products\ProductRepositoryInterface;
use App\Models\AttributeModel;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ProductImageModel;
use App\Models\ProductModel;
use App\Models\ProductVariants;
use App\Models\SkuProductVariantOptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    protected $_ProductInterface;
    public function __construct(ProductRepositoryInterface $ProductInterface)
    {
        $this->_ProductInterface = $ProductInterface;
    }
    public function listProduct(Request $request)
    {
        $Interface = $this->_ProductInterface->index();
        $listProduct = $Interface['listProduct'];
        // dd($listProduct);
        $getBrands = $Interface['getBrands'];
        $listCategory = $Interface['listCategory'];
        $listAttr =   $Interface['listAttr'];
        return view('admin.layouts.products.list', compact('getBrands', 'listCategory', 'listProduct', 'listAttr'));
    }

    public function apiListProduct(Request $request)
    {
        $listProduct = $this->_ProductInterface->GetImageProduct();
        return response()->json([
            'status' => 200,
            'data' => $listProduct
        ]);
    }

    public function addProduct(Request $request)
    {
        $listProduct = ProductModel::orderBy('id_product', 'desc')->get();
        $getBrands = BrandModel::orderBy('id_brand', 'desc')->get();
        $listCategory = CategoryModel::whereNull('parent_category')->with(['childrendCategory' => function ($query) {
            $query->with('childrendCategory');
        }])->orderBy('id_category', 'desc')->get();
        // dd($listCategory);
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
            $product = ProductModel::where('id_product', $id)->with('product_variants', 'skus_product_variant_options', 'product_variants.optionAttribute', 'product_variants.attribute')->first();
            // dd($product);
            $attribute = $product->attribute;
            $skus = $product->variants;
            // dd($product->variants);
            return view('admin.layouts.products.edit', compact('getBrands', 'listCategory', 'listProduct', 'listAttr', 'product'));
        }
        return view('admin.layouts.products.edit', compact('getBrands', 'listCategory', 'listProduct', 'listAttr'));
    }


    // public function postAddProduct(Request $request)
    // {
    //     $p = new ProductModel();
    //     $p->name_product = $request->name;
    //     $p->slug = $request->slug;
    //     $p->p_desc_short = $request->desc_short;
    //     $p->p_desc = $request->desc;
    //     $p->id_brand = $request->idBrand;
    //     $p->id_category = is_array($request->parent_category) ? implode(',', $request->parent_category) :'';
    //     $p->product_SKU = $request->product_sku;
    //     $p->status = $request->status;
    //     if ($request->attr) {
    //         $p->attribute = $request->attr;
    //     }
    //     if($request->product){
    //         if ($request->product['variants']) {
    //             $p->variants = $request->product['variants'];
    //         }
    //     }
    //     $p->save();
    //     $get_last_product = ProductModel::orderBy('id_product', 'desc')->first();
    //     if ($request->image) {

    //         foreach ($request->image as $image) {

    //             $imageName = $image;
    //             $name_image = time() . '_' . $imageName->getClientOriginalName();
    //             $explode = explode('.', $name_image);
    //             $typeImage = end($explode);
    //             $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
    //             if (in_array($typeImage, $imageExtensions)) {
    //                 $p_image = new ProductImageModel();
    //                 $path = 'public/uploads/images/products/';
    //                 $imageName->move($path, $name_image);
    //                 $link_url = env('APP_URL') . '/' . $path . $name_image;
    //                 $p_image->link_img = $link_url;
    //                 $p_image->name_img = $name_image;
    //                 $p_image->id_product = $get_last_product->id_product;
    //                 $p_image->save();
    //             }
    //         }
    //     }
    //     // ADD VARIANTS
    //     if ($request->attr && array_key_exists('title', $request->attr)) {
    //         $attr = $request->attr;
    //         foreach ($attr as $key => $value) {
    //             $ProductVariants = ProductVariants::create([
    //                 'id_product' => $get_last_product->id_product,
    //                 'id_attr' => $value['name']
    //             ]);
    //             if ($ProductVariants) {
    //                 // ADD OPTIONS
    //                 if (is_array($value['title'])) {
    //                     $title = '';
    //                     foreach ($value['title'] as $count => $item) {
    //                         $title .= $item . "-";
    //                     }
    //                     $title = rtrim($title, "-");

    //                     $ProductVariants->optionAttribute()->createMany([
    //                         ['name' => $title],
    //                         ['id_product_variants' => $ProductVariants->id_product_variants],
    //                     ]);
    //                 }
    //             }
    //         }
    //     }
    //     if ($request->product) {
    //         $product = $request->product;
    //         if ($product['variants'] && is_array($product['variants']) && count($product['variants']) > 0) {
    //             foreach ($product['variants'] as $variant) {
    //                 // REPLACE ATTRIBUTE TO STRING
    //                 if (is_array($variant['title']) && count($variant['title']) > 0) {
    //                     $separator = " - ";
    //                     $joinedString = "";
    //                     foreach ($variant['title'] as $key => $value) {
    //                         if ($key > 0) {
    //                             $joinedString .= $separator;
    //                         }
    //                         $joinedString .= $value;
    //                     }
    //                     $joinedString = rtrim($joinedString, $separator);
    //                     $variant['title'] = $joinedString;
    //                 }
    //                 // ADD VARIANTS
    //                 SkuProductVariantOptions::create([
    //                     'id_product' => $get_last_product->id_product,
    //                     'price' => $variant['price'],
    //                     'stock' => $variant['stock'],
    //                     'discount' => $variant['price_old'],
    //                     'attribute' => $variant['title']
    //                 ]);
    //             }
    //         }
    //     }
    //     return back()->with(['message' => 'Thêm thành công']);
    //     // dd($request->product);
    // }

    public function postAddProduct(Request $request)
    {
        $p = new ProductModel();
        $p->name_product = $request->name;
        $p->slug = $request->slug;
        $p->p_desc_short = $request->desc_short;
        $p->p_desc = $request->desc;
        $p->id_brand = $request->idBrand;
        $p->id_category = is_array($request->parent_category) ? implode(',', $request->parent_category) : '';
        $p->product_SKU = $request->product_sku;
        $p->status = $request->status;
        if ($request->attr) {
            $p->attribute = $request->attr;
        }
        if ($request->product && isset($request->product['variants'])) {
            $p->variants = $request->product['variants'];
        }
        $p->save();

        $get_last_product = ProductModel::orderBy('id_product', 'desc')->first();

        // Handle image uploads
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
            }
        }

        // Handle variants in a single place
        if ($request->product && isset($request->product['variants'])) {
            dd($request->all());
            foreach ($request->product['variants'] as $variant) {
                $title = is_array($variant['title']) ? implode(' - ', $variant['title']) : $variant['title'];
                dd($title);
                // Create the variant record
                $productVariant = ProductVariants::create([
                    'id_product' => $get_last_product->id_product,
                    'id_attr' => $variant['title'] ?? null
                ]);

                // Create the SKU record
                SkuProductVariantOptions::create([
                    'id_product' => $get_last_product->id_product,
                    'price' => $variant['price'],
                    'stock' => $variant['stock'],
                    'discount' => $variant['price_old'],
                    'attribute' => $title
                ]);
            }
        }

        return back()->with(['message' => 'Thêm thành công']);
    }

    public function putEditProduct(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'name' => "required"
            ],
            [
                'name.required' => 'Tên sản phẩm không được bỏ trống',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $p = ProductModel::where('id_product', '=', $request->id)->first();
        $p->name_product = $request->name;
        $p->slug = $request->slug;
        $p->p_desc_short = $request->desc_short;
        $p->p_desc = $request->desc;
        // $p->id_brand = $request->idBrand;
        if ($request->parent_category) {
            $implode_category = implode(',', $request->parent_category);
            $p->id_category = $implode_category;
        }
        $p->product_SKU = $request->product_sku;
        $p->status = $request->status;
        if ($request->attr) {
            $p->attribute = $request->attr;
        }
        if ($request->product) {
            $p->variants = $request->product['variants'];
        }
        $p->save();
        if ($request->image) {
            foreach ($request->image as $image) {
                $imageName = $image;
                $name_image = time() . '_' . $imageName->getClientOriginalName();
                $explode = explode('.', $name_image);
                $typeImage = end($explode);
                $imageExtensions = ['jpg', 'jpeg', 'gif', 'webp', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
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
        };
        $produc_Data = ProductModel::all();
        return redirect()->back()->with(['success' => 'Cập nhật thành công']);
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
                $productDetail = ProductModel::where('id_product', '=', $id);
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
            $check_productDetail = ProductModel::where('id_product_detail', '=', $request->id);
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
