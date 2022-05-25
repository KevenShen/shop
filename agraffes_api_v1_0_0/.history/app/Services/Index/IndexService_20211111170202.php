<?php

namespace App\Services\Index;

use App\Repositories\Ad\BannerRepository;
use App\Repositories\Goods\GoodsRepository;

class IndexService
{
    private $bannerRepository;
    public function __construct(BannerRepository $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }
    public function getIndex()
    {
        $res['banner'] = $this->bannerRepository->all();
        // $res['product_show']=$this->
        return $res;
    }
}
