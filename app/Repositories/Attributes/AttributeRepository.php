<?php
namespace App\Repositories\Attributes;

use App\Models\AttributeModel;
use App\Repositories\Attributes\AttributeRepositoryInterface;
use App\Repositories\BaseRepository;

class Attributerepository extends BaseRepository implements AttributeRepositoryInterface
{
 
    public function getModel()
    {
        return AttributeModel::class;
    }
 

  
}