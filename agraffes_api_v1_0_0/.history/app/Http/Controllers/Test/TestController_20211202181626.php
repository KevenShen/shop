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
        return $this->request;
    }



    public function create()
    {
        return $this->reqeust;
    }


    public function store()
    {
    }


    public function show($id)
    {
        // return $this->reqeust;
        return dd($this->reqeust);
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        return $request;
    }

    public function destroy($id)
    {
        //
    }
}
