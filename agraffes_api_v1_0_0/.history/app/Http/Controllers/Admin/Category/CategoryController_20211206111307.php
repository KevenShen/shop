<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AuthService\AdminAuthService;
use App\Repositories\Category\CategoryRepository;

class CategoryController extends Controller
{

    private $repository;
    private $request;
    public function __construct(CategoryRepository $categoryRepository, Request $request)
    {
        $this->repository = $categoryRepository;
        $this->request = $request;
    }
    public function index()
    {
        return $this->repository->all(0);
    }


    public function create()
    {
        $data  = (array)$this->request;
        return $this->repository->create($data);
    }


    public function store(Request $request)
    {
        $data = $this->request['data'];

        $data['is_show'] = $data['is_show'] === true ?  1 :  0;
        $data['show_in_nav'] = $data['show_in_nav'] === true ?  1 :  0;
        $data['is_top_show'] = $data['is_top_show'] === true ?  1 :  0;
        return $this->repository->create($data);
    }


    public function show($id)
    {
        //
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
        return $this->repository->delete($id);
    }
}
