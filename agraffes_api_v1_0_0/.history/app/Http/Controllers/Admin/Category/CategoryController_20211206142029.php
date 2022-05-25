<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AuthService\AdminAuthService;
use App\Repositories\Category\CategoryRepository;
use App\Services\Category\CategoryService;

class CategoryController extends Controller
{

    private $field;
    private $columns;
    private $page;
    private $size;
    private $otherKey;
    public function __construct(
        private CategoryRepository $categoryRepository,
        private CategoryService $categoryService,
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
            $res['data']['colllection'] = $this->categoryService->allTree();
        }
        $res['admin_token'] = $admin_user_data['admin_token'];
        return $res;
    }


    public function create()
    {
    }

    public function show($id)
    {
        $admin_user_data = $this->adminAuthService->authorization($this->request);
        if ($admin_user_data['admin_user_id'] === "" && $admin_user_data['admin_token'] === "") {
            $res['data'] = [];
        } else {
            $res['data'] = $this->repository->find($id);
        }
        $res['admin_token'] = $admin_user_data['admin_token'];
        return $res;
    }

    public function store(Request $request)
    {
        $admin_user_data = $this->adminAuthService->authorization($this->request);
        if ($admin_user_data['admin_user_id'] === "" && $admin_user_data['admin_token'] === "") {
            $res['data'] = [];
        } else {
            $res['data'] = $this->repository->create($this->request->all());
        }
        $res['admin_token'] = $admin_user_data['admin_token'];
        return $res;
    }





    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $admin_user_data = $this->adminAuthService->authorization($this->request);
        if ($admin_user_data['admin_user_id'] === "" && $admin_user_data['admin_token'] === "") {
            $res['data'] = [];
        } else {
            $res['data'] = $this->repository->update($this->request->all(), $id);
        }
        $res['admin_token'] = $admin_user_data['admin_token'];
        return $res;
    }

    public function destroy($id)
    {
        $admin_user_data = $this->adminAuthService->authorization($this->request);
        if ($admin_user_data['admin_user_id'] === "" && $admin_user_data['admin_token'] === "") {
            $res['data'] = [];
        } else {
            $res['data'] = $this->repository->delete($id);
        }
        $res['admin_token'] = $admin_user_data['admin_token'];
        return $res;
    }
}
