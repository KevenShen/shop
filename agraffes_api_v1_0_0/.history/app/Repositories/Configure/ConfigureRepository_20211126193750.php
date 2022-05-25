<?php

namespace App\Repositories\Configure;

use App\Models\Configure;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;

class ConfigureRepository
{
    private $model;
    // private $modeltable;
    private $redisClient;
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

    public function paginate($page = 1, $size = 10, $columns = '*', $field = NULL)
    {
        $start = ($page - 1) * $size;
        $col = checkColumns($columns);
        $where = str2arr($field);
        return $this->model::select($col)->offset($start)->limit($size)->where($where)->get()->toArray();
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
    public function update(array $data = [], $id)
    {
        $temps = $this->model::where('id', $id)->first()->toArray();
        $modelDiffArr = model_filter_key($temps, $data);
        foreach ($modelDiffArr as $key => $value) {
            if (is_object($modelDiffArr[$key])) {
                $modelDiffArr[$key] = 'storage/' . Storage::putFile(self::path, $value);
                Storage::delete(fileterUpload($temps[$key] . "/", false));
            }
        }
        return $this->model::where('id', $id)->update($modelDiffArr);
    }

    public function delete($id)
    {
        $temps = $this->model::where('id', $id)->first()->toArray();
        foreach ($temps as $value) {
            if ($value) {
                Storage::delete(fileterUpload($value . "/", false));
            }
        }
        return $this->model::destroy($id);
    }
    //内联结
    // public function innerJoin($table = '', $localPrimary = '', $primary = '', $columns = '*', $field = NULL)
    // {
    //     $col = checkColumns($columns);
    //     $field ? $field = str2arr($field) : false;
    //     $data = DB::table("$this->modeltable")
    //         ->join("$table", "$this->modeltable.$localPrimary", '=', "$table.$primary")
    //         ->select($col);
    //     if ($field) {
    //         $data = $data->where($field);
    //     }
    //     $data = $data->get();

    //     return $data;
    // }
    // //左联结
    // public function leftJoin($table = '', $localPrimary = '', $primary = '', $columns = '*', $field = NULL)
    // {
    //     $col = checkColumns($columns);
    //     $field ? $field = str2arr($field) : false;
    //     $data = DB::table("$this->modeltable")
    //         ->leftJoin("$table", "$this->modeltable.$localPrimary", '=', "$table.$primary")
    //         ->select($col);
    //     if ($field) {
    //         $data = $data->where($field);
    //     }
    //     $data = $data->get();

    //     return $data;
    // }
    // //右联结
    // public function rightJoin($table = '', $localPrimary = '', $primary = '', $columns = '*', $field = NULL)
    // {
    //     $col = checkColumns($columns);
    //     $field ? $field = str2arr($field) : false;
    //     $data = DB::table("$this->modeltable")
    //         ->rightJoin("$table", "$this->modeltable.$localPrimary", '=', "$table.$primary")
    //         ->select($col);
    //     if ($field) {
    //         $data = $data->where($field);
    //     }
    //     $data = $data->get();

    //     return $data;
    // }
    // //交叉联结
    // public function crossJoin($table = '', $localPrimary = '', $primary = '', $columns = '*', $field = NULL)
    // {
    //     $col = checkColumns($columns);
    //     $field ? $field = str2arr($field) : false;
    //     $data = DB::table("$this->modeltable")
    //         ->crossJoin("$table")
    //         ->select($col);
    //     if ($field) {
    //         $data = $data->where($field);
    //     }
    //     $data = $data->get();

    //     return $data;
    // }
}
