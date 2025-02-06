<?php

namespace App\Http\Controllers;

use App\Repositories\Orders\OrderInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $order;
    public function __construct(OrderInterface $order)
    {
        $this->order = $order;
    }
    public function listOrder(Request $request){
       
        return view('admin.layouts.orders.list');
    }
    public function orderDetail(Request $request){
        return view('admin.layouts.orders.detail');
    }

    public function orderAdd(Request $request){
        $products = $this->order->getProduct();
        
        return view('admin.layouts.orders.add',compact('products'));
    }

    public function orderAddStore(Request $request){

        return $this->order->addOrder($request);
     
    }
}
