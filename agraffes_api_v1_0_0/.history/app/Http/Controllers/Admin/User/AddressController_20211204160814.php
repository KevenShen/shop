<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AuthService\AdminAuthService;
use App\Repositories\User\AddressRepository;




class AddressController extends Controller
{

    private $repository;
    private $request;
    private $field;
    private $columns;
    private $page;
    private $size;
    private $otherKey;

    public function __construct(Request $request, AddressRepository $addressRepository)
    {
        $this->repository = $addressRepository;
        $this->request = $request;
        $this->field = $this->request['field'] ? $this->request['field'] : NULL;
        //当联结外表的输出列,格式:user.id|usere.email|configure.shop_title
        $this->columns = $this->request['columns'] ? $this->request['columns'] : '*';
        $this->page = $this->request['page'] ? $this->request['page'] : NULL;
        $this->size = $this->request['size'] ? $this->request['size'] : NULL;
        $this->otherKey = $this->request['otherKey'] ? $this->request['otherKey'] : Null;
        //联结外表的名称
        $this->table = $this->request['table'] ? $this->request['table'] : NULL;
        //联结外表的本地主键
        $this->localPrimary = $this->request['localPrimary'] ? $this->request['localPrimary'] : NULL;
        //联结外表的外表的唯一键
        $this->primary = $this->request['primary'] ? $this->request['primary'] : NULL;
        //联结类型type:inner|left|right|cross
        $this->type = $this->request['type'] ? $this->request['type'] : false;
    }

    public function index()
    {
        if (!$this->type) {
            if ($this->page && $this->size) {
                $data = $this->repository->paginate($this->page, $this->size, $this->columns, $this->field);
            } else if ($this->otherKey) {
                $data = $this->repository->findBy($this->otherKey, $this->columns, $this->field);
            } else {
                $data = $this->repository->all($this->columns, $this->field);
            }
        } else {
            switch ($this->type) {
                case "inner":
                    $data = $this->repository->innerJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
                    break;
                case "left":
                    $data = $this->repository->leftJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
                    break;
                case "right":
                    $data = $this->repository->rightJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
                    break;
                case "cross":
                    $data = $this->repository->crossJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
                    break;
            }
        }
        $formData = $data;

        return $formData;
    }

    public function show($id)
    {
        if (!$this->type) {
            $data = $this->repository->find($id, $this->columns);
        } else {
            switch ($this->type) {
                case "inner":
                    $data = $this->repository->innerJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
                    break;
                case "left":
                    $data = $this->repository->leftJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
                    break;
                case "right":
                    $data = $this->repository->rightJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
                    break;
                case "cross":
                    $data = $this->repository->crossJoin($this->table, $this->localPrimary, $this->primary, $this->columns, $this->field);
                    break;
            }
        }

        $formData = $data;
        return $formData;
    }

    public function create()
    {
        $data  = (array)$this->request;
        return $this->repository->create($data);
    }

    public function store(Request $request)
    {
        $formData = $this->request->all();
        $data = $formData;
        return $this->repository->create($data);
    }

    public function edit($id)
    {
        $formData = $this->request->all();
        $data = $formData;

        return $this->repository->update($data, $id);
    }

    public function update(Request $request, $id)
    {
        $formData = $this->request->all();
        $data = $formData;

        return $this->repository->update($data, $id);
    }

    public function destroy($id)
    {
        return $this->repository->delete($id);
    }
}