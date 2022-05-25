<?php
namespace App\Service\Base;
use App\Repositories\ConfigureShop\ConfigureShopRepository;

class BaseService{
    private $configureShopRepository;
    public function __construct(ConfigureShopRepository $configureShopRepository)
    {
        $this->configureShopRepository=$configureShopRepository;
    }
}

