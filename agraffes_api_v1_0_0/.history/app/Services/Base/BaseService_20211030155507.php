<?php

namespace App\Services\Base;

use App\Repositories\Configure\ConfigureRepository;
use App\Repositories\Category\CategoryRepository;

class BaseService
{

    private $configureRepository;
    private $categoryRepository;
    public function __construct(ConfigureRepository $configureRepository, CategoryRepository $categoryRepository)
    {
        $this->configureRepository = $configureRepository;
        $this->categoryRepository = $categoryRepository;
    }
    public function get()
    {
        $data['configure'] = $this->configureRepository->all();
        $data['category'] = $this->categoryRepository->all();
        return $data;
    }
    public function update()
    {
    }
}
