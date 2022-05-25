<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Goods;
use App\Models\GoodsGallery;
use App\Models\GoodsAttr;
// use Illuminate\Support\Facades\Redis;
use App\Extensions\RedisClient;
use App\Repositories\Configure\ConfigureRepository;
use App\Repositories\Ad\BannerRepository;

class TestController extends Controller
{

    public function __construct(private Request $request, private ConfigureRepository $configureRepository)
    {
    }
    public function index()
    {
        return 1;
    }



    public function create()
    {
        return $this->reqeust;
    }


    public function store(Request $request, BannerRepository $bannerRepository)
    {
        $data = $request->all();
        $bannerRepository->create($data);
        return $bannerRepository;
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
        //
    }
}
