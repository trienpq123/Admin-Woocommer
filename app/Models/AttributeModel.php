<?php

namespace App\Models;

use App\Enums\AttributeStatus;
use Attribute;
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

    // Active/Hide Attribute
    const ACTIVE = 1;
    const HIDE = 0;

    // public function category(){
    //     return $this->belongsTo(CategoryModel::class,'id_category','id_category');
    // }

    public function attributevalue(){
        return $this->hasMany(attributeValueModel::class,'attribute_id','id_attr');
    }

    public function scopeGetAttribute($query,$id){
        return $query->where('id_attr',$id);
    }
    public function scopeActive($query)
    {
        return $query->where('active',AttributeStatus::ACTIVE);
    }

    // create function get attribute order by desc
    public function scopeDesc($query)
    {
        return $query->orderByDesc('id_attr');
    }
}
