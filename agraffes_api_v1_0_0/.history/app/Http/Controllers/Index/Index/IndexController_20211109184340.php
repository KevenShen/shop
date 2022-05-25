<?php

namespace App\Http\Controllers\Index\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{

    public function index()
    {
        $arr = [
            "pass" => Hash::make("admin")
        ];
        return dd($arr);
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
    }

    public function register($request)
    {
        
    }
}
