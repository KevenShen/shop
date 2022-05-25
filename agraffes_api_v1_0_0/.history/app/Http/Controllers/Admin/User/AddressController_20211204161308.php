<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AuthService\AdminAuthService;
use App\Repositories\User\AddressRepository;




class AddressController extends Controller
{

    private $field;
    private $columns;
    private $page;
    private $size;
    private $otherKey;
    public function __construct(
        private AdminAuthService $adminAuthService,
        private AddressRepository $addressRepository,
        private Request $request,
    ) {
        $this->field = $this->request['field'] ? $this->request['field'] : NULL;
        $this->columns = $this->request['columns'] ? $this->request['columns'] : '*';
        $this->otherKey = $this->request['otherKey'] ? $this->request['otherKey'] : Null;
        $this->page = $this->request['page'] ? $this->request['page'] : NULL;
        $this->size = $this->request['size'] ? $this->request['size'] : NULL;
        $this->repository = $addressRepository;
    }

    public function index()
    {
        $admin_user_data = $this->adminAuthService->authorization($this->request);
        if ($admin_user_data['admin_user_id'] === "" && $admin_user_data['admin_token'] === "") {
            $res['data'] = [];
        } else {
            if (($this->page && $this->size)) {
                $res['data']['address'] = $this->repository->paginate($this->size, $this->page, $this->columns, $this->field);
            } else {
                $res['data']['address'] = $this->repository->all($this->columns, $this->field);
            }
        }
        $res['admin_token'] = $admin_user_data['admin_token'];
        return $res;
    }

    public function show($id)
    {
        // if (!$this->type) {
        //     $data = $this->repository->find($id, $this->columns);
        // } else {
        //     switch ($this->type) {
        //         case "inner":
        //             $data = $this->repository->innerJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
        //             break;
        //         case "left":
        //             $data = $this->repository->leftJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
        //             break;
        //         case "right":
        //             $data = $this->repository->rightJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
        //             break;
        //         case "cross":
        //             $data = $this->repository->crossJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
        //             break;
        //     }
        // }

        // $formData = $data;
        // return $formData;
    }

    public function create()
    {
        // $data  = (array)$this->request;
        // return $this->repository->create($data);
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
        // $formData = $this->request->all();
        // $data = $formData;

        // return $this->repository->update($data, $id);
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
