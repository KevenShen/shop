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
        // return $this->reqeust;
        return 1;
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
        return $id;
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
