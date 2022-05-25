<?php
namespace App\Repositories\ConfigureShop;
use \Illuminate\Support\Facades\Cache

class ConfigureShop
{
    public function getShopConfig(){
        $shopConfig=Cache::get('shop_config');
    }
}