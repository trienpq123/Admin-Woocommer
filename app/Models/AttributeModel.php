<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeModel extends Model
{
    use HasFactory;
    protected $table = 'attribute';
    protected $primaryKey = 'id_attr';
    protected $fillable = [
        'name',
        'active',
        'image'
    ];
    CONST UPDATED_AT = NULL;
    CONST CREATED_AT = NULL;

    // public function category(){
    //     return $this->belongsTo(CategoryModel::class,'id_category','id_category');
    // }

    public function attributevalue(){
        return $this->hasMany(attributeValueModel::class,'attribute_id','id_attr');
    }
}
