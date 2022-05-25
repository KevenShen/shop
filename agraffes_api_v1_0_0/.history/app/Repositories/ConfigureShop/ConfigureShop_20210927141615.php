<?php

namespace App\Repositories\ConfigureShop;

use \Illuminate\Support\Facades\Cache;
use App\Models\ConfigureShop;

class ConfigureShopRepository
{
    public function getConfigureShop()
    {
        $configureShop = Cache::get('configure_shop');
        if (empty($configureShop)) {
            $configureShop = ConfigureShop::get()->toArray();
            Cache::put('configure_shop', $configureShop, 60);
        }
        return $configureShop;
    }
}
