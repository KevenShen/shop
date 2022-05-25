<?php

namespace App\Repositories\Goods;

use App\Models\GoodsAttr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GoodsAttrRepository
{
    private $model;
    private $modeltable;
    const path = GoodsAttrMedia;
    public function __construct(goodsAttr $goodsAttr)
    {
        $this->model = $goodsAttr;
        $this->modeltable = 'goods_attr';
    }

    public function all($columns = '*', $field = NULL)
    {
        return $this->model::select(checkColumns($columns))->where(str2arr($field))->get()->toArray();
    }

    public function paginate($page = 1, $size = 10, $columns = '*', $field = NULL)
    {
        $col = checkColumns($columns);
        $where = str2arr($field);
        return $this->model::select($col)->where($where)->paginate($size);
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
                $data[$key] =  fileterUpload(Storage::putFile(self::path, $value), true);
            }
        }
        return $this->model::create($data);
    }
    public function update(array $data, $id)
    {
        $temps = $this->model::where('id', $id)->first()->toArray();
        $modelDiffArr = model_filter_key($temps, $data);
        foreach ($modelDiffArr as $key => $value) {
            if (is_object($modelDiffArr[$key])) {
                $modelDiffArr[$key] =  fileterUpload(Storage::putFile(self::path, $value), true);
                Storage::delete(fileterUpload($temps[$key] . "/", false));
            }
        }
        return $this->model::where('id', $id)->update($modelDiffArr);
    }

    public function delete($id, $data)
    {
        $temps = $this->model::where('id', $id)->first()->toArray();
        foreach ($temps as $value) {
            if (strstr($value, "/") && (file_exists($value))) {
                Storage::delete(fileterUpload($value . "/", false));
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
    public function batchCreateGoodsAttr($data)
    {
        foreach ($data as $key => $value) {
            if (is_object($value['attr_img'])) {
                $value['img_src'] = fileterUpload(Storage::putFile(self::Path  . $value['handle'], $value['img_src']), true);
                if ($key === 0) {
                    $first_img = $value['img_src'];
                }
            }
        }
    }
}
