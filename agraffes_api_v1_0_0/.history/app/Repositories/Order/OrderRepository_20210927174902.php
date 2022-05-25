<?php

namespace App\Repositories\Order;

use App\Models\OrderInfo;
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

    public function orderNum($id, $status = null)
    {
    }
    public function getReceived($uid, $orderId)
    {
        $order = OrderInfo::select('*')->where('user_id', $uid)->where('order_id', $orderId)->first();
        if ($order == null) {
            return [];
        }
        return $order;
    }
    public function orderAppraiseDetail($orderId)
    {
        $order=OrderInfo::where('order_id',$orderId)->first();
        if ($order==null) {
           return [];
        }
    }
    public function orderDetail()
    {
    }
    public function orderMainDetail()
    {
    }
    public function find()
    {
    }
    public function orderCancel()
    {
    }
    public function orderConfirm()
    {
    }
    public function getOrderGoods()
    {
    }
    public function getOrderByUserId()
    {
    }
    public function insertGetId()
    {
    }
    public function changeOrderGoodsStorage()
    {
    }
    public function change_goods_storage()
    {
    }
    public function order_fee()
    {
    }
    public function shippingName()
    {
    }
    public function addOrderAction()
    {
    }
    public function updateOrderInfo()
    {
    }
    public function orderMoney()
    {
    }
    public function integral_to_give()
    {
    }
}
