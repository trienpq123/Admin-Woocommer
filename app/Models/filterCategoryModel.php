<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filterCategoryModel extends Model
{
    use HasFactory;
    protected $table = 'filter_category';
    protected $primaryKey = 'id_filter_category';
    protected $fillable = [
        'id_attr',
        'id_category',
        'value'
    ];
    const created_at = NULL;
    const updated_at = NULL;
    
    public static function boot()
    {
        parent::boot();
        static::deleting(function($filterCategory) {
            $filterCategory->filterCategoryOption()->delete();
        });
        static::saving(function($filterCategory) {
            if ($filterCategory->id_attr == null) {
                $filterCategory->id_attr = null;
            }
        });
        static::creating(function(filterCategoryModel $filterCategory) {
            $filterCategory->created_at = new \DateTime(now());
            $filterCategory->updated_at = new \DateTime(now());
        });

       
    }

    public function filterCategoryOption(){
        return $this->hasMany(FilterCategoryOption::class, 'id_filter_category', 'id_filter_category');
    }
}
