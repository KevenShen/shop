<?php

namespace App\Repositories\Order;
use App\Repositories\Cart\CartRepository;
use App\Repositories\Shipping\ShippingRepository;

class OrderRepository
{
    private $cartRepository;
    private $shippingRepository;

    public function __construct(CartRepository $cartRepository,ShippingRepository $shippingRepository)
    {
      
    }
}