<?php

namespace App\Repositories\Category;

use App\Models\CategoryGroup;


class CategoryGroupRepository
{
    private $model;

    public function __construct(CategoryGroup $categoryGroup)
    {
        $this->model = $categoryGroup;
    }

    public function all($columns = '*', $field = NULL)
    {
        return $this->model::select(checkColumns($columns))->where(str2arr($field))->get()->toArray();
    }

    public function paginate($page = 1, $size = 10, $columns = '*', $field = NULL)
    {
        $start = ($page - 1) * $size;
        $col = checkColumns($columns);
        if (empty($field)) {
            return $this->model::select($col)->offset($start)->limit($size)->get()->toArray();
        } else {
            $where = str2arr($field);
            return $this->model::select($col)->offset($start)->limit($size)->where($where)->get()->toArray();
        }
    }

    public function find($id, $columns = "*")
    {
        $col = checkColumns($columns);
        return $this->model::select($col)->find($id);
    }

    public function findBy($field, $otherKey, $columns = array('*'))
    {
        $col = checkColumns($columns);
        $where = str2arr($otherKey);
        if (empty($field)) {
            return $this->model::select($col)->where($where)->get()->toArray();
        } else {
            $fieldWhere = str2arr($field);
            return $this->model::select($col)->where($where)->where($fieldWhere)->get()->toArray();
        }
    }


    public function create(array $data)
    {
        return $this->model::create($data);
    }

    public function update(array $data, $id)
    {
        return $this->model::where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->model::destroy($id);
    }
    public function batchCreate($data, $goods_id)
    {
        $reqData = [];
        foreach ($data as $item) {
            $item['goods_id'] = $goods_id;
            $reqData[] = $item;
        }
        for ($i = 0; $i < count($reqData); $i++) {
            // return $reqData[$i];
            // return $i;
            $this->model::insert($reqData[$i]);
        }
        return $reqData;
        // return $this->model::insert($reqData);
    }
}
