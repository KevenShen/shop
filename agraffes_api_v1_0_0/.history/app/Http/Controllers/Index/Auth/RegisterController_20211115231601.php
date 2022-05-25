<?php

namespace App\Http\Controllers\Index\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{


    public function index()
    {
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
        $reqData = $request->all();
        $data = $reqData['data'];
        return $data;
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
