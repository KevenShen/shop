<?php

namespace App\Http\Controllers\Admin\Ad\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Ad\BannerRepository;
use App\Services\AuthService\AdminAuthService;

class BannerController extends Controller
{

    private $field;
    private $columns;
    private $page;
    private $size;
    private $otherKey;
    public function __construct(private Request $request, private AdminAuthService $adminAuthService, BannerRepository $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }

    public function index()
    {
        if ($this->request['page'] && $this->request['size']) {
            return $this->bannerRepository->paginate($this->request['page'], $this->request['size']);
        }
        return $this->bannerRepository->all();
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
        $data = $this->request['data'];
        return $this->bannerRepository->update($data, $id);
    }

    public function destroy($id)
    {
        return $this->bannerRepository->delete($id);
    }
}
