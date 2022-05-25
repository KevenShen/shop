<?php

namespace App\Http\Controllers\Index\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\AuthService\AuthService;

class LoginController extends Controller
{
    private $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $req = $request->all();
        // $data = $req['data'];
        return $req;
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
