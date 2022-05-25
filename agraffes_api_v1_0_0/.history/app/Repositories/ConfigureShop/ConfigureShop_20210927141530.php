<?php

namespace App\Repositories\ConfigureShop;

use \Illuminate\Support\Facades\Cache;
use App\Models\ConfigureShop;

class ConfigureShopRepository
{
    public function getConfigureShop()
    {
        $configureShop = Cache::get('shop_config');
        if (empty($configureShop)) {
           $configureShop=ConfigureShop::get()->toArray();
        }
    }
}
