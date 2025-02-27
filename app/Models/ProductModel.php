<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $primaryKey = "id_product";
    protected $casts = [
        'attribute' => 'array',
        'variants' => 'array'
    ];
    protected $fillable = [
        'name_product',
        'slug',
        'id_brand',
        'p_desc_short',
        'p_desc',
        'product_SKU',
        'status',
        'id_category',
        'attribute',
        'variants'
    ];
    CONST CREATED_AT = NULL;
    CONST UPDATED_AT = NULL;
    public function ScopeActive($query){
        return $query->where('status',1);
    }
    public function brands(){
        return $this->belongsTo(BrandModel::class,'id_brand','id_brand');
    }

    public function images(){
        return $this->hasMany(ProductImageModel::class,'id_product','id_product');
    }

    public function category(){
        return $this->belongsTo(CategoryModel::class,'id_category','id_category');
    }

    public function ScopeAttribute($query,$id){

        return AttributeModel::where('id_attr',$id)->first();
    }

    public function sku_product() {
        return $this->hasMany(SkuProductVariantOptions::class, 'id_product','id_product');
    }
    public function product_variants(){
        return $this->hasmany(ProductVariants::class,'id_product','id_product');
    }
    public function skus_product_variant_options(){
        return $this->hasMany(SkuProductVariantOptions::class,'id_product','id_product');
    }


}
