<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilterCategoryOption extends Model
{
    use HasFactory;
    protected $table = "filter_category_option";
    protected $primaryKey = 'id_filter_category_option';
    protected $fillable = [
        'id_filter_category',
        'id_category'
    ];
    CONST CREATED_AT = NULL;
    CONST UPDATED_AT = NULL;
    public function category(){
        return $this->belongsTo(CategoryModel::class,'id_category','id_category');
    }
    public function childFilter(){
        return $this->hasMany(FilterModel::class,'_parent','id_attr');
    }

    public function filter(){
        return $this->hasMany(FilterModel::class,'filter_id','id_filter');
    }

}
