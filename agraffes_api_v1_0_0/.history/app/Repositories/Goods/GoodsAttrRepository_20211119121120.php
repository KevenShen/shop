<?php

namespace App\Repositories\Goods;

use App\Models\GoodsAttr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GoodsAttrRepository
{
    private $model;
    private $modeltable;
    public function __construct(goodsAttr $goodsAttr)
    {
        $this->model = $goodsAttr;
        $this->modeltable = 'goods_attr';
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

    public function find($id, $columns = '*')
    {
        $col = checkColumns($columns);
        return $this->model::select($col)->find($id);
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
            $media = Base64toImg($data[$v], GoodsAttrMedia);
            $data[$v] = fileterUpload($media[0], true);
            Storage::put($media[0], $media[1]);
        }
        return $this->model::create($data);
    }
    public function update(array $data, $id)
    {
        $data['imgtype'] ? $data['imgtype'] = checkColumns($data['imgtype']) : [];
        $temps = $this->model::where('id', $id)->first()->toArray();
        if (count($data['imgtype']) !== 0) {
            foreach ($data['imgtype'] as $k) {
                if ($data[$k] !== $temps[$k]) {
                    $media = Base64toImg($data[$k], GoodsAttrMedia);
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
            foreach ($data['imgtype'] as $k) {
                Storage::delete(fileterUpload($temps[$k], false));
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
        $data = $data->get();

        return $data;
    }
    //左联结
    public function leftJoin($table = '', $localPrimary = '', $primary = '', $columns = '*', $field = NULL)
    {
        $col = checkColumns($columns);
        $field ? $field = str2arr($field) : false;
        $data = DB::table("$this->modeltable")
            ->leftJoin("$table", "$this->modeltable.$localPrimary", '=', "$table.$primary")
            ->select($col);
        if ($field) {
            $data = $data->where($field);
        }
        $data = $data->get();

        return $data;
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
    public function batchCreate($data, $goods_id)
    {
        $reqData = [];
        foreach ($data as $item) {
            $media = Base64toImg($item['attr_img'], GoodsAttrMedia);
            Storage::put($media[0], $media[1]);
            $reqData['attr_img'] = fileterUpload($media[0], true);
            $reqData['attr_price'] = $item['attr_price'];
            $reqData['attr_sort'] = $item['attr_sort'];
            $reqData['attr_value'] = $item['attr_value'];
            $reqData['goods_id'] = $goods_id;
            $this->model::insert($reqData);
            // $reqData[] = $item;
        }
        // for ($i = 0; $i < count($reqData); $i++) {
        //     // return $reqData[$i];
        //     // return $i;
        //     // $this->model::insert($reqData[$i]);
        // }
        // return $reqData;
        // return $this->model::insert($reqData);
        return $reqData;
    }
}