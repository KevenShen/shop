<?php

namespace App\Http\Controllers\Admin\Goods;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Goods\GoodsRepository;
use App\Repositories\Category\CategoryGroupRepository;
use App\Repositories\Goods\GoodsAttrRepository;
use App\Services\AuthService\AdminAuthService;
use App\Services\Goods\GoodsService;
use Illuminate\Support\Facades\Storage;

class GoodsController extends Controller
{
    private $field;
    private $columns;
    private $page;
    private $size;
    private $otherKey;
    const path = 'public/';
    public function __construct(
        private Request $request,
        private GoodsRepository $goodsRepository,
        private AdminAuthService $adminAuthService,
        private CategoryGroupRepository $categoryGroupRepository,
        private GoodsAttrRepository $goodsAttrRepository,
        private GoodsService $goodsService
    ) {
        $this->field = $this->request['field'] ? $this->request['field'] : NULL;
        $this->columns = $this->request['columns'] ? $this->request['columns'] : '*';
        $this->otherKey = $this->request['otherKey'] ? $this->request['otherKey'] : Null;
        $this->page = $this->request['page'] ? $this->request['page'] : NULL;
        $this->size = $this->request['size'] ? $this->request['size'] : NULL;
        $this->repository = $goodsRepository;
    }

    public function index()
    {
        $admin_user_data = $this->adminAuthService->authorization($this->request);
        if ($admin_user_data['admin_user_id'] === "" && $admin_user_data['admin_token'] === "") {
            $res['data'] = [];
        } else {
            if (($this->page && $this->size)) {
                $res['data']['goods'] = $this->repository->paginate($this->size, $this->page, $this->columns, $this->field);
            } else {
                $res['data']['goods'] = $this->repository->all($this->columns, $this->field);
            }
        }
        $res['admin_token'] = $admin_user_data['admin_token'];
        return $res;
    }

    public function show($id)
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $admin_user_data = $this->adminAuthService->authorization($this->request);
        if ($admin_user_data['admin_user_id'] === "" && $admin_user_data['admin_token'] === "") {
            $res['data'] = [];
        } else {
            $filterData = $this->request->all();
            $goods_gallery=(unset_Arr_col($filterData,'goods_img'));
            // $filterData['handle'] = cat_nameTo_ink($filterData['goods_name']);
            // $attr = str_Reg_filter($filterData, ['goods_attr']);
            // $collectionGroup = str_Reg_filter($filterData, ['collectionGroup']);
            // $filterData['goods_img'] = $filterData['goods_img'][0];
            // $paramsData['goods'] = $filterData;
            // return $this->goodsService->createGoods($paramsData);
            // $res['data']['goods'] = $this->GoodsService->createGoods($this->request->all());
            // return $filterData;
        }
        $res['admin_token'] = $admin_user_data['admin_token'];
        return $res;
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
