<?php

namespace App\Services\Index;

use App\Repositories\Ad\BannerRepository;
use App\Repositories\Goods\GoodsRepository;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Ad\AdSubjectRepository;
use App\Repositories\Ad\AdMediaRepository;

class IndexService
{
    private $bannerRepository;
    private $categoryRepository;
    private $goodsRepository;
    private $adSubjectRepository;
    private ;
    public function __construct(BannerRepository $bannerRepository, GoodsRepository $goodsRepository, CategoryRepository $categoryRepository, AdSubjectRepository $adSubjectRepository)
    {
        $this->bannerRepository = $bannerRepository;
        $this->goodsRepository = $goodsRepository;
        $this->categoryRepository = $categoryRepository;
        $this->adSubjectRepository = $adSubjectRepository;
        $this->
    }
    public function getIndex()
    {
        $res['banner'] = $this->bannerRepository->all();
        $res['showGoodsIndex'] = $this->goodsRepository->findBy("show_in_index=1");
        $res['baseSellerCategory'] = $this->categoryRepository->findBy("is_top_show=1");
        $res['adSubject'] = $this->adSubjectRepository->all();
        return $res;
    }
}
