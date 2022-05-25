<?php

namespace App\Services\Category;

use App\Repositories\Category\CategoryRepository;

class CategoryService
{
    public function __construct(private CategoryRepository $categoryRepository)
    {
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
        $data['allTree'] = $this->categoryRepository->allTree();
        $data['allCategory'] = $this->categoryRepository->allCategory();
        return $data;
    }
}
