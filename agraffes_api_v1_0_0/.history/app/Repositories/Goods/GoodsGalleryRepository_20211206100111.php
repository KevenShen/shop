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
        $arr = [];
        foreach ($data as $item) {
            $media = Base64toImg($item[0], GoodsGalleryMedia);
            Storage::put($media[0], $media[1]);
            $arr['img_src'] = fileterUpload($media[0], true);
            $arr['goods_id'] = $goods_id;
            $this->model::insert($arr);
        }
        return $arr;
    }
}
