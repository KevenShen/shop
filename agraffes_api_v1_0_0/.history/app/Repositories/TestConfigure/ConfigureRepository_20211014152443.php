<?php

namespace App\Repositories\Configure;

use App\Models\Configure;

class ConfigureRepository
{
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
