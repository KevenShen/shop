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
        $model = OrderInfo::MainOrderCount()->select('*')->where('user_id', $id)->where('order_status', '<>', OS_CANCELED);
        if ($status == null) {
            $orderNum = $model->count();
            return $orderNum;
        }
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
        $order = OrderInfo::where('order_id', $orderId)->first();
        if ($order == null) {
            return [];
        }
        return $order;
    }
    public function orderDetail($uid, $orderId)
    {
        $order = OrderInfo::where('user_id', $uid)->where('order_id', $orderId)->first();
        $order->order_status = 1;
        $order->shipping_status = SS_RECEIVED;
        $order->confirm_tack_time = gmtime();
        return $order->save();
    }
    public function orderMainDetail($uid, $orderId)
    {
        $order = OrderInfo::select('order_sn')->where('user_id', $uid)->where('main_order_id', $orderId)->get()->toArray();
        return $order;
    }
    public function find($orderId)
    {
        $order = OrderInfo::where('order_id', $orderId)->first();
        if ($order == null) {
            return [];
        }
        return $order;
    }
    public function orderCancel(uid, $orderId)
    {
        $order=OrderInfo::where('user_id',$uid)->where()
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
