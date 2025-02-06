<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_code',
        'name',
        'phone',
        'email',
        'id_provines',
        'id_district',
        'id_wards',
        'address',
        'status',
        'total_price'
    ];
    protected $table ='order';
    protected $primaryKey = 'id_order';
    CONST UPDATED_AT = null;
    CONST CREATED_AT = null;
}
