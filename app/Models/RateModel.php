<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RateModel extends Model
{
    use HasFactory;
    protected $table = 'rate';
    protected $fillabel = [
        'id_product',
        'user',
        'status',
        'rate',
        'created_at',
        'updated_at'
    ];
}
