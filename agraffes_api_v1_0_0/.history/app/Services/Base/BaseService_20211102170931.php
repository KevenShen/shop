<?php

namespace App\Services\Base;

use App\Repositories\Configure\ConfigureRepository;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Admin\AdminUserRepository;
class BaseService
{

    private $configureRepository;
    private $categoryRepository;
    private $adminUserRepository
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
    //Admin
    public function getAdminBase()
    {
        $data['configure'] = $this->configureRepository->all();
        $data['adminUser']=$this->
        return $data;
    }

    public function update()
    {
    }
}
