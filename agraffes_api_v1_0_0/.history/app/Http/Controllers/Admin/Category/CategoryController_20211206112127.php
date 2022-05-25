<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AuthService\AdminAuthService;
use App\Repositories\Category\CategoryRepository;

class CategoryController extends Controller
{

    private $field;
    private $columns;
    private $page;
    private $size;
    private $otherKey;
    public function __construct(
        private CategoryRepository $categoryRepository,
        private Request $request,
        private AdminAuthService $adminAuthService,
    ) {
        $this->field = $this->request['field'] ? $this->request['field'] : NULL;
        $this->columns = $this->request['columns'] ? $this->request['columns'] : '*';
        $this->otherKey = $this->request['otherKey'] ? $this->request['otherKey'] : Null;
        $this->page = $this->request['page'] ? $this->request['page'] : NULL;
        $this->size = $this->request['size'] ? $this->request['size'] : NULL;
        $this->repository = $categoryRepository;
    }
    public function index()
    {
        $admin_user_data = $this->adminAuthService->authorization($this->request);
        if ($admin_user_data['admin_user_id'] === "" && $admin_user_data['admin_token'] === "") {
            $res['data'] = [];
        } else {
            if (($this->page && $this->size)) {
                $res['data']['colllection'] = $this->repository->paginate($this->size, $this->page, $this->columns, $this->field);
            } else {
                $res['data']['colllection'] = $this->repository->allTree();
            }
        }
        $res['admin_token'] = $admin_user_data['admin_token'];
        return $res;
    }


    public function create()
    {
        $data  = (array)$this->request;
        return $this->repository->create($data);
    }


    public function store(Request $request)
    {
        $data = $this->request['data'];

        $data['is_show'] = $data['is_show'] === true ?  1 :  0;
        $data['show_in_nav'] = $data['show_in_nav'] === true ?  1 :  0;
        $data['is_top_show'] = $data['is_top_show'] === true ?  1 :  0;
        return $this->repository->create($data);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        return $this->repository->delete($id);
    }
}
