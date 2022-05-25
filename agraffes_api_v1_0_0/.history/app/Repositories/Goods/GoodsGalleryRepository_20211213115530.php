<?php

namespace App\Repositories\Goods;

use App\Models\GoodsGallery;
use Illuminate\Support\Facades\Storage;

class GoodsGalleryRepository
{
    private $model;
    const path = GoodsGalleryMedia;

    public function __construct(GoodsGallery $goodsGallery)
    {
        $this->model = $goodsGallery;
    }

    public function all($columns = '*', $field = NULL)
    {
        return $this->model::select(checkColumns($columns))->where(str2arr($field))->get()->toArray();
    }

    public function paginate($size = 10, $page = 1, $columns = '*', $field = NULL)
    {
        $col = checkColumns($columns);
        $where = str2arr($field);
        return $this->model::select($col)->where($where)->paginate($size);
    }

    public function find($id, $columns = "*")
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

    public function delete($id)
    {
        return $this->model::destroy($id);
    }
    public function batchCreate($data, $goods_id)
    {
        $temps = $this->model::where('goods_id', $goods_id)->first()->toArray();
        foreach ($temps as $value) {
            if (strstr($value, "/") && (file_exists($value))) {
                Storage::delete(fileterUpload($value . "/", false));
            }
        }
        return $this->model::destroy($goods_id);
    }
    public function batchCreateGoodGallery($data)
    {
        foreach ($data as $key => $value) {
            if (is_object($value['img_src'])) {
                $value['img_src'] = fileterUpload(Storage::putFile(self::path  . $value['handle'], $value['img_src']), true);
                if ($key === 0) {
                    $first_img = $value['img_src'];
                }
            }
        }
        return $data;
        // return $this->model::create($data);
        // return $first_img;
    }
}
