<?php

namespace App\Repositories\Orders;

use App\Models\AttributeModel;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\OrderDetail;
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

    public function getProduct(){
        $product = ProductModel::select('id_product','name_product','attribute','variants')->get();
        return $product;
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

    public function addOrder($request = []){
        $order = $this->_model;
        $idUser = auth()->user()->id;
        $cus_name = $request['first_name'] . $request['last_name'];
        $phone = $request['phone'];
        $email = $request['email'];
        $address = $request['address'];
        $status = 0;
        $total_price = 3999;
        $order_code = rand(100000, 999999);
        $order = $order->create([
            'order_code' => $order_code,
            'name' => $cus_name,
            'phone' => $phone,
            'email' => $email,
            'address' => $address,
            'status' => $status,
            'total_price' => $total_price,
        ]);
        
        $id_product = $request['product']['name'];
        $product = ProductModel::find($id_product);
        $attribute_product = $request['product']['attributes'];
        if($product){
            dd($product);
            $orderDetail = new OrderDetail();
            $orderDetail->order_code = $order->id_order;
            $orderDetail->id_product = $product->id_product;
            
        }



    }
}
