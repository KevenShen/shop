<?php

namespace App\Repositories\ConfigureShop;

use \Illuminate\Support\Facades\Cache;

class ConfigureShopRepository
{
    public function getConfigureShop()
    {
        $ConfigureShop = Cache::get('shop_config');
    }
}
