<?php

namespace App\Services\Index;

use App\Repositories\Ad\BannerRepository;
use App\Repositories\Goods\GoodsRepository;
use App\Repositories\Category\CategoryRepository;

class IndexService
{
    private $bannerRepository;
    private $categoryRepository;
    public function __construct(BannerRepository $bannerRepository, CategoryRepository $categoryRepository)
    {
        $this->bannerRepository = $bannerRepository;
        $this->categoryRepository = $categoryRepository;
    }
    public function getIndex()
    {
        $res['banner'] = $this->bannerRepository->all();
        $res['baseSellerCategory'] = $this->categoryRepository->findBy("is_top_show|1");
        return $res;
    }
}
