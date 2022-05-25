<?php

namespace App\Services\Category;

use App\Repositories\Category\CategoryRepository;

class CategoryService
{
    private $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    // public function categoryList()
    // {
    //     $list = $this->categoryRepository->getAllCategorys();
    //     return $list;
    // }

    // public function categoryDetail($catId)
    // {
    //     $list = $this->categoryRepository->getCategoryGetGoods($catId);
    //     return $list;
    // }
    public function get_admin_category()
    {
        $data['allTree']=$this->categoryRepository->allTree();
        $data['allCategory']=$this->categoryRepository->allCategory();
        return $data;
    }
}
