<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemModel extends Model
{
    use HasFactory;
    protected $table = 'system';
    protected $fillable = [
        'name_site',
        'facebook',
        'zalo',
        'instagram',
        'youtube',
        'email',
        'hotline',
        'logo',
        'favicon',
        'meta_keyword',
        'meta_title',
        'meta_description',
        'footer',
        'google_analytics',
        'google_tag_manager',
        'google_adsense',
        'google_map'
    ];
    public $timestamps = false;

}
