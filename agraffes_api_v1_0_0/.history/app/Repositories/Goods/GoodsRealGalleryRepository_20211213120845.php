<?php

namespace App\Repositories\Goods;

use App\Models\GoodsRealGallery;
use Illuminate\Support\Facades\Storage;

class GoodsRealGalleryRepository
{
    private $model;
    const Path = GoodsRealGallery;
    public function __construct(GoodsRealGallery $goodsRealGallery)
    {
        $this->model = $goodsRealGallery;
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
                $data[$key] =  fileterUpload(Storage::putFile(self::Path, $value), true);
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
                $modelDiffArr[$key] =  fileterUpload(Storage::putFile(self::Path, $value), true);
                Storage::delete(fileterUpload($temps[$key] . "/", false));
            }
        }
        return $this->model::where('id', $id)->update($modelDiffArr);
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
    public function batchCreateRealGoodGallery($data)
    {
        foreach ($data as $key => $value) {
            if (is_object($value['img_src'])) {
                $arr[$key]['handle'] = $value['handle'];
                $arr[$key]['img_src'] = fileterUpload('./' . Storage::putFile(self::path  . $value['handle'], $value['img_src']), true);
                $arr[$key]['order'] = $value['order'];
                if ($key === 0) {
                    $first_img = $arr[$key]['order'];
                }
            }
        }
        DB::table('goods_real_gallery')->insert($arr);
        return $first_img;
    }
}
