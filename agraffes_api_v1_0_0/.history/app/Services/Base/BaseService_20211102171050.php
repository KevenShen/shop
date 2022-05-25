<?php

namespace App\Services\Base;

use App\Repositories\Configure\ConfigureRepository;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Admin\AdminUserRepository;
class BaseService
{

    private $configureRepository;
    private $categoryRepository;
    private $adminUserRepository;
    public function __construct(ConfigureRepository $configureRepository, CategoryRepository $categoryRepository,AdminUserRepository $adminUserRepository)
    {
        $this->configureRepository = $configureRepository;
        $this->categoryRepository = $categoryRepository;
        $this->adminUserRepository=$adminUserRepository;
    }
    public function get()
    {
        $data['configure'] = $this->configureRepository->all();
        $data['category'] = $this->categoryRepository->all();
        return $data;
    }
    //Admin
    public function getAdminBase($id)
    {
        $data['configure'] = $this->configureRepository->all();
        $data['adminUser']=$this->adminUserRepository->find($id);
        return $data;
    }

    public function update()
    {
    }
}
