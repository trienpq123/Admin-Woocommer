<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionModel extends Model
{
    use HasFactory;
    protected $table = 'promotion';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'discount',
        'from',
        'to',
        'status',
        'type'
    ];
    public $timestamps = false;

    public function products()
    {
        return $this->belongsToMany(ProductModel::class, 'promotion_product', 'promotion_id', 'product_id');
    }
    
}
