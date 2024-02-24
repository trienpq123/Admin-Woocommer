<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionProductModel extends Model
{
    use HasFactory;

    protected $table = "promotion_product";

    protected $fillable = [
        'promotion_id',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'product_id', 'id');
    }

    public function promotion()
    {
        return $this->belongsTo(PromotionModel::class, 'promotion_id', 'id');
    }
}
