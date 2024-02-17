<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkuProductVariantOptions extends Model
{
    use HasFactory;
    protected $table = 'skus_product_variant_options';
    protected $primaryKey = "id_skus_product_variant_options ";
    protected $fillable = [
        'id_product',
        'id_product_variants',
        'id_product_variant_options',
        'sku',
        'attribute',
        'price',
        'discount',
        'stock',
        'image'
    ];
    CONST UPDATED_AT = NULL;
    CONST CREATED_AT = NULL;
}
