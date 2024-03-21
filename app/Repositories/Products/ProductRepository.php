<?php

namespace App\Repositories\Products;

use App\Models\AttributeModel;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Repositories\Products\ProductRepositoryInterface;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function getModel()
    {
        return ProductModel::class;
    }
    public function index(){
        $listProduct = $this->_model::orderBy('id_product', 'desc')->get();
        $getBrands = BrandModel::orderBy('id_brand', 'desc')->get();
        $listCategory = CategoryModel::whereNull('parent_category')->orderBy('id_category', 'desc')->get();
        $listAttr = AttributeModel::orderBy('id_attr', 'desc')->get();
        return compact('listProduct', 'getBrands', 'listCategory', 'listAttr');
       
    }


    public function GetImageProduct(){
        return $this->_model::with('images')->get();
    }
   
}
