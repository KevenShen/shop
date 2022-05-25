<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AuthService\AdminAuthService;
use App\Repositories\User\UserRepository;



class UserController extends Controller
{

    private $field;
    private $columns;
    private $page;
    private $size;
    private $otherKey;

    public function __construct(
        private AdminAuthService $adminAuthService,
        private UserRepository $userRepository,
        private Request $request,
    ) {
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
