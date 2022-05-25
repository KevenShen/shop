<?php

namespace App\Repositories\Ad;

use App\Models\AdBanner;
use Illuminate\Support\Facades\Storage;


class BannerRepository
{
    private $model;
    const path = BannerPath;
    /*
    *    将需要使用的Model通过构造函数实例化
    */
    public function __construct(AdBanner $adBanner)
    {
        $this->model = $adBanner;
    }

    public function find($id, $columns = array('*'))
    {
        return $this->model::find($id, $columns);
    }

    public function findBy($field, $value, $columns = array('*'))
    {
        return $this->model::where($field, '=', $value)->first($columns);
    }

    public function all($columns = array('*'))
    {
        return $this->model::get($columns)->toArray();
    }

    public function paginate($page = 1, $size = 10, $columns = [])
    {
        $start = ($page - 1) * $size;
        if (count($columns) < 1) {
            return $this->model::offset($start)->limit($size)->get()->toArray();
        } else {
            return $this->model::where([$columns])->offset($start)->limit($size)->get()->toArray();
        }
    }

    public function create(array $data)
    {
        $media = Base64toImg($data['banner_img_url'], BannerPath);
        $data['banner_img_url'] = fileterUpload($media[0], true);
        Storage::put($media[0], $media[1]);
        return $this->model::create($data);
    }

    public function update(array $data, $id)

    {
        $temp = $this->model::where('banner_img_url', $data['banner_img_url'])->where('id', $id)->first();
        if (!$temp) {
            $media = Base64toImg($data['banner_img_url'], BannerPath);
            $data['banner_img_url'] = fileterUpload($media[0], true);
            Storage::delete(fileterUpload($this->model::where('id', $id)->value('banner_img_url'), false));
            Storage::put($media[0], $media[1]);
        }
        return $this->model::where('id', $id)->update($data);
    }

    public function delete($id)
    {
        Storage::delete(fileterUpload($this->model::where('id', $id)->value('banner_img_url'), false));
        return $this->model::destroy($id);
    }
}
