<?php

namespace App\Services\Index;

use App\Repositories\Ad\BannerRepository;
use App\Repositories\Goods\GoodsRepository;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Ad\AdSubjectRepository;

class IndexService
{
    private $bannerRepository;
    private $categoryRepository;
    private $goodsRepository;
    private $adSubjectRepository;
    public function __construct(BannerRepository $bannerRepository, GoodsRepository $goodsRepository, CategoryRepository $categoryRepository,AdSubjectRepository $adSubjectRepository)
    {
        $this->bannerRepository = $bannerRepository;
        $this->goodsRepository = $goodsRepository;
        $this->categoryRepository = $categoryRepository;
    }
    public function getIndex()
    {
        $res['banner'] = $this->bannerRepository->all();
        $res['showGoodsIndex'] = $this->goodsRepository->findBy("show_in_index=1");
        $res['baseSellerCategory'] = $this->categoryRepository->findBy("is_top_show=1");
        return $res;
    }
}
