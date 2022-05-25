<?php

namespace App\Http\Controllers\Admin\Ad\MediaVideo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaVideoController extends Controller
{
    private $field;
    private $columns;
    private $page;
    private $size;
    private $otherKey;
    public function index()
    {
        $this->field = $this->request['field'] ? $this->request['field'] : NULL;
        $this->columns = $this->request['columns'] ? $this->request['columns'] : '*';
        $this->otherKey = $this->request['otherKey'] ? $this->request['otherKey'] : Null;
        $this->page = $this->request['page'] ? $this->request['page'] : NULL;
        $this->size = $this->request['size'] ? $this->request['size'] : NULL;
    }

    public function create()
    {
        $admin_user_data = $this->adminAuthService->authorization($this->request);
        if ($admin_user_data['admin_user_id'] === "" && $admin_user_data['admin_token'] === "") {
            $res['data'] = [];
        } else {
            if (($this->page && $this->size)) {
                $res['data']['configure'] = $this->configureRepository->paginate($this->size, $this->page);
            } else {
                $res['data']['configure'] = $this->configureRepository->all();
            }
        }
        $res['admin_token'] = $admin_user_data['admin_token'];
        return $res;
    }

    public function store(Request $request)
    {
        //
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
        //
    }
}
