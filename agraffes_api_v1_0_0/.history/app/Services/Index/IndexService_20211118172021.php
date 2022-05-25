<?php

namespace App\Services\Index;

use App\Repositories\Ad\BannerRepository;
use App\Repositories\Goods\GoodsRepository;
use App\Repositories\Category\CategoryRepository;

class IndexService
{
    private $bannerRepository;
    private $categoryRepository;
    public function __construct(BannerRepository $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }
    public function getIndex()
    {
        $res['banner'] = $this->bannerRepository->all();
        // $res['baseSellerCategory']=;
        return $res;
    }
}