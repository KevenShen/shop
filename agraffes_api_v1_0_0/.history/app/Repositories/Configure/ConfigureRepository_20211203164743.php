<?php

namespace App\Repositories\Configure;

use App\Models\Configure;
use Illuminate\Support\Facades\Storage;


class ConfigureRepository
{
    private $model;
    const path = DefaultPath;
    public function __construct(Configure $configure)
    {
        $this->model = $configure;
        $this->modeltable = 'configure';
    }
    public function all($columns = '*', $field = NULL)
    {
        return $this->model::select(checkColumns($columns))->where(str2arr($field))->get()->toArray();
    }
    public function paginate($size = 10, $page = 1, $columns = '*', $field = NULL)
    {
        $total = count($this->all());
        $start = ($page - 1) * $size;
        $col = checkColumns($columns);
        $where = str2arr($field);
        $resultData = $this->model::select($col)->offset($start)->limit($size)->where($where)->get()->toArray();
        return ["total" => $total, "resultData" => $resultData];
    }
    public function find($id, $columns = '*')
    {
        return $this->model::select(checkColumns($columns))->find($id);
    }
    public function findBy($otherKey, $columns = '*', $field = NULL)
    {
        $otherKeyArr = str2arr($otherKey);
        $field = str2arr($field);
        return $this->model::select(checkColumns($columns))->where(array_merge($otherKeyArr, $field))->get()->toArray();
    }
    public function create(array $data)
    {
        foreach ($data as $key => $value) {
            if (is_object($value)) {
                $data[$key] = 'storage/' . Storage::putFile(self::path, $value);
            }
        }
        return $this->model::create($data);
    }
    public function update($data = [], $id)
    {
        $temps = $this->model::where('id', $id)->first()->toArray();
        $modelDiffArr = model_filter_key($temps, $data);
        foreach ($modelDiffArr as $key => $value) {
            if (is_object($modelDiffArr[$key])) {
                $modelDiffArr[$key] = 'storage/' . Storage::putFile(self::path, $value);
                Storage::delete(fileterUpload($temps[$key] . "/", false));
            }
        }
        // return $modelDiffArr;
        return $temps;
        // return $this->model::where('id', $id)->update($modelDiffArr);
    }
    public function delete($id)
    {
        $temps = $this->model::where('id', $id)->first()->toArray();
        foreach ($temps as $value) {
            if (strstr($value, "/") && (file_exists($value))) {
                Storage::delete(fileterUpload($value . "/", false));
            }
        }
        return $this->model::destroy($id);
    }
}
