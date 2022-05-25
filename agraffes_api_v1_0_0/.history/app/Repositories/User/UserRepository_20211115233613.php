<?php

namespace App\Repositories\User;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserRepository
{
    private $model;
    private $modeltable;
    public function __construct(User $user)
    {
        $this->model = $user;
        $this->modeltable = 'users';
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
        // $data['imgtype'] ? $data['imgtype'] = checkColumns($data['imgtype']) : [];
        // foreach ($data['imgtype'] as $k => $v) {
        //     $media = Base64toImg($data[$v], UserMedia);
        //     $data[$v] = fileterUpload($media[0], true);
        //     Storage::put($media[0], $media[1]);
        // }
        return $this->model::create($data);
    }
    public function update(array $data, $id)
    {
        $data['imgtype'] ? $data['imgtype'] = checkColumns($data['imgtype']) : [];
        $temp = $this->model::where('id', $id)->first();
        $midifyImg = [];
        foreach ($temp as $key) {
            if ($temp[$key] !== $data[$key]) {
                $midifyImg[] = $key;
            } else {
                unset($data[$key]);
            }
        }
        if (count($midifyImg) !== 0) {
            foreach ($midifyImg as $k => $v) {
                $media = Base64toImg($data[$v], UserMedia);
                $data[$v] = fileterUpload($media[0], true);
                Storage::delete(fileterUpload($this->model::where('id', $id)->value('shop_logo'), false));
                Storage::put($media[0], $media[1]);
            }
        }
        return $this->model::where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->model::destroy($id);
    }
    //内联结
    public function innerJoin($table = '', $localPrimary = '', $primary = '', $columns = '*', $field = NULL)
    {
        $col = checkColumns($columns);
        $field ? str2arr($field) : false;
        $data = DB::table('users')
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
        $field ? str2arr($field) : false;
        $data = DB::table('users')
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
        $field ? str2arr($field) : false;
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
        $field ? str2arr($field) : false;
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
