<?php

namespace App\Http\Controllers\Admin\Configure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Configure\ConfigureRepository;
use App\Services\AuthService\AdminAuthService;

class ConfigureController extends Controller
{
    private $field;
    private $columns;
    private $page;
    private $size;
    private $otherKey;
    public function __construct(private AdminAuthService $adminAuthService, private Request $request, private ConfigureRepository $configureRepository)
    {
        $this->field = $this->request['field'] ? $this->request['field'] : NULL;
        $this->columns = $this->request['columns'] ? $this->request['columns'] : '*';
        $this->otherKey = $this->request['otherKey'] ? $this->request['otherKey'] : Null;
    }

    public function index()
    {
        $admin_user_data = $this->adminAuthService->authorization($this->request);
        if ($admin_user_data['admin_user_id'] === "" && $admin_user_data['admin_token'] === "") {
            $res['data'] = [];
        } else {
            $res['data']['configure'] = $this->configureRepository->all();
            $res['admin_token'] = $admin_user_data['admin_token'];
        }
        return $res;
    }

    public function show($id)
    {
        // $admin_user_data = $this->adminAuthService->authorization($this->request);
        // if (empty($admin_user_data)) {
        //     return false;
        // } else {
        //     if (!$this->type) {
        //         $data = $this->repository->find($id, $this->columns);
        //     } else {
        //         switch ($this->type) {
        //             case "inner":
        //                 $data = $this->repository->innerJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
        //                 break;
        //             case "left":
        //                 $data = $this->repository->leftJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
        //                 break;
        //             case "right":
        //                 $data = $this->repository->rightJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
        //                 break;
        //             case "cross":
        //                 $data = $this->repository->crossJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
        //                 break;
        //         }
        //     }
        // }
        // $res['data'] = $data;
        // $res['admin_token'] = $admin_user_data['admin_token'];
        // return $res;
        return $this->configureRepository->findBy($id);
    }

    public function create()
    {
        $admin_user_data = $this->adminAuthService->authorization($this->request);
        if (empty($admin_user_data)) {
            return false;
        } else {
            $data  = (array)$this->request;
            return $this->repository->create($data);
        }
    }

    public function store()
    {
        $data = $this->request->all();
        // return $this->repository->create($this->request->all());
        // return var_dump($data);
        // return dd($formData);
    }

    public function edit($id)
    {
        $formData = $this->request->all();
        $data = $formData;

        return $this->repository->update($data, $id);
    }

    public function update($id)
    {
        // $formData = $this->request['data'];
        // $data = $formData;

        return $this->repository->update([], $id);
        // return $id;
    }
    public function destroy($id)
    {
        return $this->repository->delete($id);
    }
}
