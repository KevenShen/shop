<?php

namespace App\Http\Controllers\Admin\Ad\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Ad\BannerRepository;
use App\Services\AuthService\AdminAuthService;

class BannerController extends Controller
{


    public function __construct(private Request $request, private AdminAuthService $adminAuthService, BannerRepository $bannerRepository)
    {
        $this->field = $this->request['field'] ? $this->request['field'] : NULL;
        $this->columns = $this->request['columns'] ? $this->request['columns'] : '*';
        $this->otherKey = $this->request['otherKey'] ? $this->request['otherKey'] : Null;
        $this->page = $this->request['page'] ? $this->request['page'] : NULL;
        $this->size = $this->request['size'] ? $this->request['size'] : NULL;
        $this->repository = $bannerRepository;
    }

    public function index()
    {
        $admin_user_data = $this->adminAuthService->authorization($this->request);
        if ($admin_user_data['admin_user_id'] === "" && $admin_user_data['admin_token'] === "") {
            $res['data'] = [];
        } else {
            if (($this->page && $this->size)) {
                $res['data']['banner'] = $this->repository->paginate($this->size, $this->page, $this->columns, $this->field);
            } else {
                $res['data']['banner'] = $this->repository->all($this->columns, $this->field);
            }
        }
        $res['admin_token'] = $admin_user_data['admin_token'];
        return $res;
    }

    public function show($id)
    {
        return $this->bannerRepository->find($id);
    }



    public function store(Request $request)
    {
        $data = $this->request['data'];
        return $this->bannerRepository->create($data);
    }


    public function edit($id)
    {
    }

    public function update($id)
    {
        return 1;
        // $data = $this->request['data'];
        // return $this->bannerRepository->update($data, $id);
    }

    public function destroy($id)
    {
        return $this->bannerRepository->delete($id);
    }
}
