<?php

namespace App\Repositories\Order;

use App\Repositories\Cart\CartRepository;
use App\Repositories\Shipping\ShippingRepository;

class OrderRepository
{
    private $cartRepository;
    private $shippingRepository;

    public function __construct(CartRepository $cartRepository, ShippingRepository $shippingRepository)
    {
        $this->cartRepository = $cartRepository;
        $this->shippingRepository = $shippingRepository;
    }

    public function orderNum(){

    }
    public function getReceived(){
        
    }
    public function orderAppraiseDetail(){
        
    }
    public function orderDetail(){
        
    }
    public function orderMainDetail(){
        
    }
    public function find(){
        
    }
    public function orderCancel(){
        
    }
    public function orderConfirm(){
        
    }
    public function getOrderGoods(){
        
    }
    public function getOrderByUserId(){
        
    }
    public function insertGetId(){
        
    }
    public function (){
        
    }
    public function (){
        
    }
    public function (){
        
    }
    public function (){
        
    }
}
