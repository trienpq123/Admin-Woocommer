<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeMenuModel extends Model
{
    use HasFactory;
    protected $table = 'typemenu';
    protected $fillable = [
        'title',
        'enable'
    ];
    CONST created_at = '';
    CONST updated_at = '';
    
}
