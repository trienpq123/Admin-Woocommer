<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPromotionModel extends Model
{
    use HasFactory;
    protected $table = 'product_promotion';
    protected $primaryKey = 'id_product_promotion';
    protected $casts = [
        'id_product' => 'array',

    ];
    protected $fillable = [
        'promotion_id',
        'id_product'
    ];
    const UPDATED_AT = NULL;
    const CREATED_AT = NULL;
    public function promotion()
    {
        return $this->belongsTo(PromotionModel::class);
    }

    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'id_product', 'id_product');
    }
}
