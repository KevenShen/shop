<?php

namespace App\Http\Controllers\Index\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Repositories\User\UserRepository;

class RegisterController extends Controller
{
    private $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function index()
    {
    }


    public function create()
    {
    }


    public function store(Request $request,)
    {
        $reqData = $request->all();
        $data = $reqData['data'];
        $data['token'] = getToken();
        $data['password'] = Hash::make($data['password']);
        if ($this->userRepository->create($data)) {
            // unset($data['password']);
            // $res = $data;
            return 1;
        }
        $res = $this->userRepository->create($data);
        return $res;
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
