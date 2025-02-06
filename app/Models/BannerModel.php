<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerModel extends Model
{
    use HasFactory;
    protected $table = "banners";
    protected $fillable = [
        'link_img',
        'title',
        'name_img',
        'status',
        'index',
    ];
    CONST CREATED_AT = NULL;
    CONST UPDATED_AT = NULL;
}
