<?php

namespace App\Repositories\Configure;

use App\Models\Configure;

class ConfigureRepository
{

    public function __construct(private Configure $configure)
    {
    }
    public function all($columns = '*', $field = NULL)
    {

        $col = checkColumns($columns);
        
        if (empty($field)) {
            return $this->model::select($col)->get()->toArray();
        } else {
            $where = str2arr($field);
            return $this->model::select($col)->where($where)->get()->toArray();
        }
    }
    public function getConfigureList($page, $size)
    {
        $start = ($page - 1) * $size;
        return Configure::offset($start)->limit($size)->get()->toArray();
    }
    public function getConfigurebyId($id)
    {
        return  Configure::where('id', $id)->first();
    }

    public function updateConfigure($id, $params)
    {
        $model = new Configure();
        $model = Configure::where('id', $id)->first();
        if ($model === null) {
            return [];
        }
        $model->fill($params);
        return $model->save();
    }
}
