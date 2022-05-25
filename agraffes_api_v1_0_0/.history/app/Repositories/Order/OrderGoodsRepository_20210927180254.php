<?php

namespace App\Repositories\Order;

class OrderGoodsRepository
{
    public function insertOrderGoods($goods, $orderId = 0)
    {
        foreach ($goods as $v) {
            if (empty($orderId)) {
                $newOrderId = $v['order_id'];
            } else {
                $newOrderId = $orderId;
            }
        }
    }
}
