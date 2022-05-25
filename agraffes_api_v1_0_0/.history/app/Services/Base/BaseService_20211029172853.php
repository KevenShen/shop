<?php

namespace App\Services\Base;

use App\Repositories\Configure\ConfigureRepository;
use App\Repositories\Category\CategoryRepository;

class BaseService
{

    private $configureRepository;
    private $categoryService;
    public function __construct(ConfigureRepository $configureRepository, CategoryRepository $categoryRepository)
    {
        $this->configureRepository = $configureRepository;
        $this->categoryService = $categoryRepository;
    }
    public function getBase()
    {
        $data['configure'] = $this->configureRepository->all();
        return $data;
    }
    public function updateBase()
    {
    }
}
