<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariants extends Model
{
    use HasFactory;
    protected $table = "product_variants";
    protected $primaryKey = "id_product_variants";
    protected $fillable = [
        'id_attr',
        'id_product'
    ];
    const created_at  = null;
    const updated_at = null;

    public function optionAttribute(){
        return $this->hasMany(ProductVariantOptions::class,'id_product_variants','id_product_variants');
    }

    public function product(){
        return $this->belongsTo(ProductModel::class,'id_product','id_product');
    }
}
