<?php

namespace App\Repositories\Category;

use \Illuminate\Support\Facades\Cache;
use App\Models\Category;
use App\Models\CategoryGroup;
use App\Models\Goods;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryRepository
{
    private $model;
    private $modeltable;
    public function __construct(Category $category)
    {
        $this->model = $category;
        $this->modeltable = 'category';
    }
    public function all($tree_id = 0)
    {
        // $category_list = Cache::store('file')->get('category_list');
        // if (empty($category_list)) {
        //     $category_list = $this->custongetTree(0);
        //     Cache::store('file')->put('category_list', $category_list, 6000);
        // }
        $category_list = $this->custongetTree(0);
        return $category_list;
        // Cache::forget('category_list');
        // return $this->custongetTree(0);
    }
    public function allCategory($sort = null)
    {
        // if (!empty($sort)) {
        //     $sortFilter = str2arr($sort);
        //     $order = $this->model::select('*');
        //     foreach ($sortFilter as $k => $v) {

        //     }
        // }
        return $this->model::select("*")->orderBy("cat_name", "asc")->get()->toArray();
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
            $media = Base64toImg($data[$v], CollectionMedia);
            $data[$v] = fileterUpload($media[0], true);
            Storage::put($media[0], $media[1]);
        }
        unset($data['imgtype']);
        return $this->model::create($data);
    }
    public function update(array $data, $id)
    {
        $data['imgtype'] ? $data['imgtype'] = checkColumns($data['imgtype']) : [];
        $temps = $this->model::where('id', $id)->first()->toArray();
        if (count($data['imgtype']) !== 0) {
            foreach ($data['imgtype'] as $k) {
                if ($data[$k] !== $temps[$k]) {
                    $media = Base64toImg($data[$k], UserMedia);
                    $data[$k] = fileterUpload($media[0], true);
                    Storage::delete(fileterUpload($temps[$k], false));
                    Storage::put($media[0], $media[1]);
                }
            }
            unset($data['imgtype']);
        }
        return $this->model::where('id', $id)->update($data);
    }
    public function delete($id)
    {
        $resutl = $this->model::destroy($id);
        $category_list = $this->custongetTree(0);
        // Cache::store('file')->put('category_list', $category_list, 6000);
        // return $resutl;
        return $category_list;
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

    public function getCategoryGetGoods($id)
    {
        // $goodsByCollection = CategoryGroup::select('*')->where('cat_link', $id)->get()->toArray();
        $goodsByCollection = DB::table('category_group')
            ->join("goods", "category_group.handle", "=", "goods.handle")
            // ->join("goods_gallery", "category_group.handle", "=", "goods_gallery.handle")
            ->select("category_group.id",)
            ->where("category_group.cat_link", "=", $id)
            ->orderBy("goods_name", "asc")
            ->get()->toArray();
        return $goodsByCollection;
    }

    public function catList($cat_id = 0)
    {
        $arr = [];
        $count = Category::where('parent_id', $cat_id)->where('is_show', 1)->count();

        if (0 < $count) {
            $res = Category::select('cat_id', 'cat_name', 'cat_icon', 'parent_id', 'is_show')->where('parent_id', $cat_id)->where('is_show', 1)->orderBy('sort_order', 'ASC')->orderBy('cat_id', 'ASC')->get()->toArray();
            if ($res === null) {
                return [];
            }
            foreach ($res as $row) {
                $arr[$row['cat_id']]['cat_id'] = $row['cat_id'];
                if (isset($row['cat_id'])) {
                    $child_tree = $this->catList($row['cat_id']);

                    if ($child_tree) {
                        $arr[$row['cat_id']]['child_tree'] = $child_tree;
                    }
                }
            }
            return $arr;
        }
    }

    public function arr_foreach($arr)
    {
        $tmp = [];
        if (!is_array($arr)) {
            return false;
        }
        foreach ($arr as $val) {
            if (is_array($val)) {
                $tmp = array_merge($tmp, $this->arr_foreach($val));
            } else {
                $tmp[] = $val;
            }
        }
    }
}
