<?php  
namespace App\Traits;

use App\Models\attributeValueModel;

trait AttributeValue
{
    public function attributevalue($value){
        return $this->hasMany(attributeValueModel::class,'attribute_id','id_attr');
    }
}