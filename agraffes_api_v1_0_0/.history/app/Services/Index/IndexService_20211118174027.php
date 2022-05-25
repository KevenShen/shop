<?php

namespace App\Services\Index;

use App\Repositories\Ad\BannerRepository;
use App\Repositories\Goods\GoodsRepository;
use App\Repositories\Category\CategoryRepository;

class IndexService
{
    private $bannerRepository;
    private $categoryRepository;
    private $goodsRepository;
    public function __construct(BannerRepository $bannerRepository, GoodsRepository $goodsRepository, CategoryRepository $categoryRepository)
    {
        $this->bannerRepository = $bannerRepository;
        $this->goodsRepository = $goodsRepository;
        $this->categoryRepository = $categoryRepository;
    }
    public function getIndex()
    {
        $res['banner'] = $this->bannerRepository->all();
        $res['showGoodsIndex']=$this->goodsRepository->findBy("show_in_index=1");
        $res['baseSellerCategory'] = $this->categoryRepository->findBy("is_top_show=1");

        return $res;
    }
}
