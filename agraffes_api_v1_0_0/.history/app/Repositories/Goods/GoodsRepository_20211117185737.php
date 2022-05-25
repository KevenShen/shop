<?php

namespace App\Repositories\Goods;

use App\Models\Goods;
use App\Models\GoodsGallery;
use App\Models\GoodsAttr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Null_;

class GoodsRepository
{
    private $model;
    private $modeltable;
    const MediaPath = ProductMedia;
    public function __construct(Goods $goods)
    {
        $this->model = $goods;
        $this->modeltable = 'goods';
    }

    public function all($columns = '*', $field = NULL, $order = NULL)
    {
        $col = checkColumns($columns);
        if (empty($field)) {
            return $this->model::select($col)->get()->toArray();
        } else {
            $where = str2arr($field);
            return $this->model::select($col)->where($where)->get()->toArray();
        }
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

    public function find($id, $columns = '*', $field = NULL)
    {
        $col = checkColumns($columns);
        if (empty($field)) {
            return $this->model::select($col)->find($id);
        } else {
            $where = str2arr($field);
            return $this->model::select($col)->where($where)->find($id);
        }
    }

    public function findBy($otherKey, $columns = '*', $field = NULL)
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
        $data['imgtype'] ? $data['imgtype'] = checkColumns($data['imgtype']) : [];
        foreach ($data['imgtype'] as $k => $v) {
            $media = Base64toImg($data[$v], self::MediaPath);
            $data[$v] = fileterUpload($media[0], true);
            Storage::put($media[0], $media[1]);
        }
        return $this->model::insertGetId($data);
    }
    public function update(array $data, $id)
    {
        $data['imgtype'] ? $data['imgtype'] = checkColumns($data['imgtype']) : [];
        $temps = $this->model::where('id', $id)->first()->toArray();
        if (count($data['imgtype']) !== 0) {
            foreach ($data['imgtype'] as $k) {
                if ($data[$k] !== $temps[$k]) {
                    $media = Base64toImg($data[$k], self::MediaPath);
                    $data[$k] = fileterUpload($media[0], true);
                    Storage::delete(fileterUpload($temps[$k], false));
                    Storage::put($media[0], $media[1]);
                }
            }
            unset($data['imgtype']);
        }
        return $this->model::where('id', $id)->update($data);
    }

    public function delete($id, $data)
    {
        $data['imgtype'] ? $data['imgtype'] = checkColumns($data['imgtype']) : [];
        $temps = $this->model::where('id', $id)->first()->toArray();
        if (count($data['imgtype']) !== 0) {
            foreach ($data['imgtype'] as $k => $v) {
                Storage::delete(fileterUpload($temps[$v], false));
            }
        }
        return $this->model::destroy($id);
    }
    //内联结
    public function innerJoin($table = '', $localPrimary = '', $primary = '', $columns = '*', $field = NULL)
    {
        $col = checkColumns($columns);
        $field ? $field = str2arr($field) : false;
        $data = DB::table("$this->modeltable")
            ->join("$table", "$this->modeltable.$localPrimary", '=', "$table.$primary")
            ->select($col);
        if ($field) {
            $data = $data->where($field);
        }
        $data = $data->get()->toArray();

        return $data;
    }
    //左联结
    public function leftJoin($table = '', $localPrimary = '', $primary = '', $columns = '*', $field = NULL)
    {
        $col = checkColumns($columns);
        $field ? $field = str2arr($field) : false;
        $tables = checkColumns($table);
        $data = DB::table("$this->modeltable");
        foreach ($tables as $k => $v) {
            $data = $data->leftJoin("$v", "$this->modeltable.$localPrimary", '=', "$v.$primary");
        }
        // ->leftJoin("$table", "$this->modeltable.$localPrimary", '=', "$table.$primary")
        // ->select($col);
        // if ($field) {
        //     $data = $data->where($field);
        // }
        // $data = $data->get();

        // return $data;
        return 1;
    }
    //右联结
    public function rightJoin($table = '', $localPrimary = '', $primary = '', $columns = '*', $field = NULL)
    {
        $col = checkColumns($columns);
        $field ? $field = str2arr($field) : false;
        $data = DB::table("$this->modeltable")
            ->rightJoin("$table", "$this->modeltable.$localPrimary", '=', "$table.$primary")
            ->select($col);
        if ($field) {
            $data = $data->where($field);
        }
        $data = $data->get();

        return $data;
    }
    //交叉联结
    public function crossJoin($table = '', $localPrimary = '', $primary = '', $columns = '*', $field = NULL)
    {
        $col = checkColumns($columns);
        $field ? $field = str2arr($field) : false;
        $data = DB::table("$this->modeltable")
            ->crossJoin("$table")
            ->select($col);
        if ($field) {
            $data = $data->where($field);
        }
        $data = $data->get();

        return $data;
    }
}
