<?php

namespace App\Http\Controllers\Admin\adminUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Admin\AdminUserRepository;
use App\Services\AuthService\AdminAuthService;


class AdminUserController extends Controller
{

    private $field;
    private $columns;
    private $page;
    private $size;
    private $otherKey;
    public function __construct(
        private Request $request,
        private AdminUserRepository $adminUserRepository,
        private AdminAuthService $adminAuthService,
    ) {
        $this->field = $this->request['field'] ? $this->request['field'] : NULL;
        $this->columns = $this->request['columns'] ? $this->request['columns'] : '*';
        $this->otherKey = $this->request['otherKey'] ? $this->request['otherKey'] : Null;
        $this->page = $this->request['page'] ? $this->request['page'] : NULL;
        $this->size = $this->request['size'] ? $this->request['size'] : NULL;
        $this->repository = $adminUserRepository;
    }

    public function index()
    {
        $admin_user_data = $this->adminAuthService->authorization($this->request);
        if ($admin_user_data['admin_user_id'] === "" && $admin_user_data['admin_token'] === "") {
            $res['data'] = [];
        } else {
            if (($this->page && $this->size)) {
                $res['data']['adminUser'] = $this->repository->paginate($this->size, $this->page, $this->columns, $this->field);
            } else {
                $res['data']['adminUser'] = $this->repository->all($this->columns, $this->field);
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
            $res['data'] = $this->repository->create($this->request->all());
        }
        $res['admin_token'] = $admin_user_data['admin_token'];
        return $res;
    }

    public function edit($id)
    {
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
    }
}
