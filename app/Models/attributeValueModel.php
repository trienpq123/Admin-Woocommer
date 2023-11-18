<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attributeValueModel extends Model
{
    use HasFactory;
    protected $table = "attribute_value";
    protected $fillable = [
        'value',
        'is_required',
        'attribute_id'
    ];

    public function attribute()
    {
        return $this->belongsTo(AttributeModel::class, 'attribute_id', 'id_attr');
    }
}
