<?php

namespace App\Services\Configure;

use App\Repositories\Configure\ConfigureRepository;

class ConfigureService
{
    private $configureRepository;

    public function __construct(ConfigureRepository $configureRepository)
    {
        $this->$configureRepository = $configureRepository;
    }
    public function paginate($size = 10, $page = 1)
    {
        $total = count($this->ConfigureRepository->all());
        // $start = ($page - 1) * $size;
        // $col = checkColumns($columns);
        // $where = str2arr($field);
        // return $this->model::select($col)->offset($start)->limit($size)->where($where)->get()->toArray();
    }
    public function updateConfigure($req)
    {
    }
}
