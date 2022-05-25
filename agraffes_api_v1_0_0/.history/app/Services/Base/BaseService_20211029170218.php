<?php

namespace App\Services\Base;

use App\Repositories\Configure\ConfigureRepository;
use App\Repositories\Category\CategoryRepository;

class BaseService
{

    private $configureShopRepository;
    private $categoryService;
    public function __construct(ConfigureRepository $configureRepository, CategoryService $categoryService)
    {
        $this->configureShopRepository = $configureShopRepository;
        $this->categoryService = $categoryService;
    }
    public function getBase()
    {
        $arr['shop_info']['shop_logo'] = $this->configureShopRepository->getConfigureShopByCode("shop_logo");
        $arr['shop_info']['copyright'] = $this->configureShopRepository->getConfigureShopByCode('copyright');
        $arr['collections'] = $this->categoryService->categoryList();
        return $arr;
    }
    public function updateBase()
    {
    }
}
