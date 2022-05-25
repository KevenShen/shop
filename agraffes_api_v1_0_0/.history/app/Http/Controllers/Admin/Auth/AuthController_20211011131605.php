<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pass = Hash::make("admin");
        // $users = DB::select('SELECT * FROM `admin_user`');
        // $affected = DB::update(
        //     'update admin_user set password = ? where user_id = ?',
        //     [$pass, 42]
        // );
        // $admin = AdminUser::where(['email' => $data['email']])->first();
        // $token = "aa"->createToken('my-app-token')->plainTextToken;
        $token = getToken();
        return $token;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // $admin=AdminUser::where(['name'=>$data['email']])->first();
        $admin = AdminUser::where(['email' => $data['email']])->first();
        if (!$admin || !Hash::check($data['password'], $admin['password'])) {
            return ('账户或密码错误！');
        }
        $charid = strtoupper(md5(uniqid(mt_rand(), true)));
        $token=substr($charid, 0, 8) . substr($charid, 8, 4) . substr($charid, 12, 4) . substr($charid, 16, 4) . substr($charid, 20, 12);
        // $token = $admin->createToken('my-app-token')->plainTextToken;
        return $token;
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
