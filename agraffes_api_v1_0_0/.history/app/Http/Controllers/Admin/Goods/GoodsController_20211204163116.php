<?php

namespace App\Http\Controllers\Admin\Goods;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Goods\GoodsRepository;
use App\Repositories\Category\CategoryGroupRepository;
use App\Repositories\Goods\GoodsAttrRepository;
// use App\Repositories\Goods\GoogsGalleryRepository;

class GoodsController extends Controller
{
    private $field;
    private $columns;
    private $page;
    private $size;
    private $otherKey;
    public function __construct(
        Request $request,
        GoodsRepository $goodsRepository,
        CategoryGroupRepository $categoryGroupRepository,
        GoodsAttrRepository $goodsAttrRepository,
        // GoogsGalleryRepository $googsGalleryRepository
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

    }

    public function show($id)
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {

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
