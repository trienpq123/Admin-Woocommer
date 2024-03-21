<?php

namespace App\Repositories\Orders;

use App\Models\AttributeModel;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\OrderModel;
use App\Models\ProductModel;
use App\Repositories\Products\ProductRepositoryInterface;
use App\Repositories\BaseRepository;

class OrderRepository extends BaseRepository implements OrderInterface
{
    public function getModel()
    {
        return OrderModel::class;
    }
    
    public function getAll(){
        return $this->_model->all();
    }
 
    public function find($id){
        return $this->_model->find($id);
    }

    public function update($id,$request = []){
        return $this->_model->find($id)->update($request);
    }

    public function delete($id){
        return $this->_model->find($id)->delete();
    }
}
