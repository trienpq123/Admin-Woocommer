<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_detail';
    protected $fillable = [
        'id_product',
        'quanlity',
        'id_order'
    ];
    protected $primaryKey = ['id_order','id_product'];
    public function product(){
        return $this->belongsTo(ProductModel::class,'id_product','id_product');
    }
    public function Order(){
        return $this->belongsTo(OrderModel::class,'id_order','id_order');
    }
}
