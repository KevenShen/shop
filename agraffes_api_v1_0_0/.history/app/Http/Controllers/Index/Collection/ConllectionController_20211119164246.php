<?php

namespace App\Http\Controllers\Index\Collection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepository;

class ConllectionController extends Controller
{
    private $categoryRepository;
    private $request;
    public function __construct(Request $request, CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->request = $request;
    }
    public function index()
    {
        return $this->categoryRepository->allCategory();
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return $this->categoryRepository->getCategoryGetGoods($id);
        // return $this->categoryRepository->getChildCategoryArr($id);
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
