<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\RedisClient;
use App\Repositories\Configure\ConfigureRepository;


class TestController extends Controller
{

    public function __construct(private Request $request, private ConfigureRepository $configureRepository)
    {
    }
    public function index()
    {
        return $this->$configureRepository->all();
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
