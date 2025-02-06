<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;
    protected $table ="attribute_value";
    protected $fillable = [
        'attribute_id',
        'value',
    ];
    const SHOW_IS_REQUIRED = 1;
    const HIDE_IS_REQUIRED = 0;

    public function attribute()
    {
        return $this->belongsTo(AttributeModel::class, 'attribute_id', 'id_attr');
    }
}
