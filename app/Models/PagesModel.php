<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagesModel extends Model
{
    use HasFactory;
    protected $table = 'pages';
    protected $primaryKey = 'id_page';
    protected $fillable = [
        'title',
        'slug',
        'meta_description',
        'meta_keyword',
        'meta_title',
        'status',
        'image'
    ];
    CONST CREATED_AT = NULL;
    CONST UPDATED_AT = NULL;
}
