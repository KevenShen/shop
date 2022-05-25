<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Goods;
use App\Models\GoodsGallery;
use App\Models\GoodsAttr;
use App\Extensions\RedisClient;
use Illuminate\Support\Facades\Redis;

use App\Repositories\Ad\BannerRepository;

class TestController extends Controller
{

    private $request;
    private $redisClient;
    private $a;
    public function __construct(Request $request,  RedisClient $redisClient)
    {
        $this->reqeust = $request;
        $this->redisClient = $redisClient;
    }
    public function index()
    {
        dd($this->a);
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
        return $this->reqeust;
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
