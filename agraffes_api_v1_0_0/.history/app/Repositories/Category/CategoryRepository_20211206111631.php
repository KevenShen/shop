<?php

namespace App\Repositories\Category;

use \Illuminate\Support\Facades\Cache;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryRepository
{
    private $model;
    const path = CollectionMedia;
    public function __construct(Category $category)
    {
        $this->model = $category;
    }
    public function allTree()
    {
        $category_list = Cache::store('file')->get('category_list');
        if (empty($category_list)) {
            $category_list = $this->custongetTree(0);
            Cache::store('file')->put('category_list', $category_list, 6000);
        }
        $category_list = $this->custongetTree(0);
        return $category_list;
    }
    public function allCategory($sort = null)
    {
        // if (!empty($sort)) {
        //     $sortFilter = str2arr($sort);
        //     $order = $this->model::select('*');
        //     foreach ($sortFilter as $k => $v) {

        //     }
        // }
        return $this->model::all();
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

    private function custongetTree($tree_id, $top = 0)
    {
        $three_arr = [];
        $count = Category::where('parent_id', $tree_id)->count();
        if (0 < $count || $tree_id == 0) {
            $res = Category::select('cat_id as id', 'cat_name', 'cat_icon', "cat_link", 'parent_id', 'sort_order', 'is_show', 'show_in_nav', 'is_top_show')->where('parent_id', $tree_id)->orderBy('sort_order', 'ASC')->orderBy('cat_id', 'ASC')->get()->toArray();
            // return $res;

            foreach ($res as $k => $row) {
                $three_arr[$k]['id'] = $row['id'];
                $three_arr[$k]['cat_name'] = $row['cat_name'];
                $three_arr[$k]['cat_icon'] = $row['cat_icon'];
                $three_arr[$k]['cat_link'] = $row['cat_link'];
                $three_arr[$k]['sort_order'] = $row['sort_order'];
                $three_arr[$k]['is_show'] = $row['is_show'];
                $three_arr[$k]['show_in_nav'] = $row['show_in_nav'];
                $three_arr[$k]['is_top_show'] = $row['show_in_nav'];
                $three_arr[$k]['haschild'] = 0;
                if (isset($row['id'])) {
                    $child_tree = $this->custongetTree($row['id']);
                    if ($child_tree) {
                        $three_arr[$k]['children'] = $child_tree;
                        $three_arr[$k]['haschild'] = 1;
                    }
                }
            }
            return $three_arr;
        }
        return $three_arr;
    }


    public function getCategoryGetGoods($id)
    {
        $arr = $this->getChildCategoryArr($id);
        $goodsByCollection = DB::table('category_group as group')
            ->join("goods", "group.handle", "=", "goods.handle")
            ->select("group.*", "goods.goods_name", "goods.goods_name", "goods.shop_price", "goods.goods_name", "goods.goods_img", "goods.goods_desc_edior",)
            ->whereIn("group.cat_link", $arr)
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

    public function getChildCategoryArr($id)
    {
        $category_list = Cache::store('file')->get('category_list');
        $arr[] = $id;
        foreach ($category_list as $value) {
            if ($value['cat_link'] === $id) {
                if ($value['children']) {
                    foreach ($value['children'] as $v) {
                        $arr[] = $v['cat_link'];
                        if (isset($v['children']) && count($v['children']) !== 0) {
                            foreach ($v['children'] as $childValue) {
                                $arr[] = $childValue['cat_link'];
                            }
                        }
                    }
                }
            }
        }
        return $arr;
    }
}
