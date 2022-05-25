<?php

namespace App\Services\Index;

use App\Repositories\Ad\BannerRepository;

class IndexService
{
    private $bannerRepository;
    public function __construct(BannerRepository $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }
    public function getIndex()
    {
        $res['bannerData'] = $this->bannerRepository->all();
        return $res;
    }
}
