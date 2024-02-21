<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariantOptions extends Model
{
    use HasFactory;
    protected $table = "product_variants_option";
    protected $primaryKey = 'id_product_variants_option';
    protected $fillable = [
        'id_product_variants',
        'name',
        'id_attr'
    ];
    const created_at = null;
    const updated_at = null;
    public function ProductVariants(){
        return $this->belongsTo(ProductVariants::class, 'id_product_variants', 'id_product_variants');
    }
}
