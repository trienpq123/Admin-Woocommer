<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table = "category";
    protected $primaryKey = "id_category";
    protected $fillable = [
        'name_category',
        'slug',
        'desc_category',
        'image_category',
        'name_image',
        'parent_category',
        'hide',
        'meta_keyword',
        'meta_title',
        'meta_description',
        'tags',
        'ihome'
    ];
    // Show/hide category
    const HIDE = 0;
    const SHOW = 1;
    const CREATED_AT = null;
    const UPDATED_AT = null;

    // public function getFilter(){
    //     return $this->belongsTo(FilterCategory::class,'id_category','id_category');
    // }

    // public function filters() {
    //     return $this->belongsToMany(FilterModel::class,'filter_category','id_category','id_filter');
    // }
    public function category()
    {
        return $this->hasMany(CategoryModel::class, 'parent_category', 'id_category');
    }

    public function childrendCategory()
    {
        return $this->hasMany(CategoryModel::class, 'parent_category', 'id_category')->with('category');
    }

    public function attribute()
    {
        return $this->hasMany(FilterCategoryOption::class, 'id_category', 'id_category');
    }

    public function attribute_category()
    {
        return $this->hasMany(filterCategoryModel::class, 'id_category', 'id_category');
    }
    public function product(){
        return $this->hasMany(ProductModel::class, 'id_category', 'id_category');
    }

    public function scopeParentsNull($query){
        return $query->whereNull('parent_category');
    }

    public function scopeHide($query){
        return $query->where('hide',self::HIDE);
    }
    public function scopeShow($query){
        return $query->where('hide',self::SHOW);
    }
    public function scopeNotCurrent($query,$id){
        return $query->where('id_category','<>',$id);
    }
    public function scopeSlug($query,$slug){
        return $query->where('slug',$slug);
    }

}
