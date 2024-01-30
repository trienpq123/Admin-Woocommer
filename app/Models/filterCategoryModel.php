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
        'id_category'
    ];

    public function filterCategoryOption(){
        return $this->hasMany(FilterCategoryOption::class, 'id_filter_category', 'id_filter_category');
    }
}
