<?php

namespace App\Http\Controllers\Admin\Ad\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AuthService\AdminAuthService;
use App\Repositories\Ad\AdSubjectRepository;

class SubjectController extends Controller
{
    private $field;
    private $columns;
    private $page;
    private $size;
    private $otherKey;
    public function __construct(
        private AdminAuthService $adminAuthService,
        private AdSubjectRepository $adSubjectRepository,
        private Request $request,
    ) {
        $this->field = $this->request['field'] ? $this->request['field'] : NULL;
        $this->columns = $this->request['columns'] ? $this->request['columns'] : '*';
        $this->otherKey = $this->request['otherKey'] ? $this->request['otherKey'] : Null;
        $this->page = $this->request['page'] ? $this->request['page'] : NULL;
        $this->size = $this->request['size'] ? $this->request['size'] : NULL;
        $this->repository = $adSubjectRepository;
    }
    public function index()
    {
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
    }


    public function destroy($id)
    {
    }
}
