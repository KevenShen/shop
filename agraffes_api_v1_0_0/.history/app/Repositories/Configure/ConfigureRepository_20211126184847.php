<?php

namespace App\Repositories\Configure;

use App\Models\Configure;
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
                $data[$key] = Storage::putFile('photos', $value);
            }
        }
        // $data['imgtype'] ? $data['imgtype'] = checkColumns($data['imgtype']) : [];
        // foreach ($data['imgtype'] as $k => $v) {
        //     $media = Base64toImg($data[$v], UserMedia);
        //     $data[$v] = fileterUpload($media[0], true);
        //     Storage::put($media[0], $media[1]);
        // }
        // return $this->model::create($data);
        return dd($data);
    }
    public function update(array $data, $id)
    {
        // $data['imgtype'] ? $data['imgtype'] = checkColumns($data['imgtype']) : [];
        // $temps = $this->model::where('id', $id)->first()->toArray();
        // if (count($data['imgtype']) !== 0) {
        //     foreach ($data['imgtype'] as $k) {
        //         if ($data[$k] !== $temps[$k]) {
        //             $media = Base64toImg($data[$k], UserMedia);
        //             $data[$k] = fileterUpload($media[0], true);
        //             Storage::delete(fileterUpload($temps[$k], false));
        //             Storage::put($media[0], $media[1]);
        //         }
        //     }
        //     unset($data['imgtype']);
        // }
        // return $this->model::where('id', $id)->update($data);
    }

    public function delete($id)
    {
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
