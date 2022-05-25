<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GoodsGallery;

use App\Repositories\Ad\BannerRepository;

class TestController extends Controller
{

    private $request;
    public function __construct(Request $request)
    {
        $this->reqeust = $request;
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
        return $this->reqeust;
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
