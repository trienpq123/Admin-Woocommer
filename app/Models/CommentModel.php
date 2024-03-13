<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    use HasFactory;
    protected $table ="comments";
    protected $primaryKey = 'id_comment';
    protected $fillable = [
        'id_product',
        'id_user',
        'text',
        'status',
        'created_at',
        '_parent',
        'type'
    ];

    const UPDATED_AT = NULL;
    // const CREATED_AT = NULL;

    public function product(){
        return $this->belongsTo(ProductModel::class,'id_product','id_product');
    }
    public function user(){
        return $this->belongsTo(User::class,'id_user','id_user');
    }
}
