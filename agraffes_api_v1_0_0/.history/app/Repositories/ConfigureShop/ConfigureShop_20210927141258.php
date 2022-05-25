<?php

namespace App\Repositories\ConfigureShop;

use \Illuminate\Support\Facades\Cache;

class ConfigureShopRepository
{
    public function getConfigureShop()
    {
        $configureShop = Cache::get('shop_config');
        if (empty($configureShop)) {
           # code...
        }
    }
}
