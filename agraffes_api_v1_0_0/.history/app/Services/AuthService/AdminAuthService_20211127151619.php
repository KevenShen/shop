<?php

namespace App\Services\AuthService;

use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;

class AdminAuthService
{
    public function authorization($req)
    {

        $token = $req->header('admin_token');
        if (empty($token)) {
            return false;
        }

        $adminUser = AdminUser::where('admin_token', $token)->first();

        if ($token === $adminUser['admin_token']) {
            $newToken = getToken();
            $adminUser->admin_token = $newToken;

            $adminUser->save();
            return ["admin_user_id" => $adminUser['id'], "admin_token" => $newToken];
        }
        return ["admin_user_id" => "", "admin_token" => $newToken];
    }
    public function Login($req)
    {

        $data['email'] = $req['data.email'];
        $data['password'] = $req['data.password'];
        $admin = AdminUser::where(['email' => $data['email']])->first();
        if (!$admin || !Hash::check($data['password'], $admin['password'])) {
            $resData['err'] = "4";
            $resData["data"] = "";
            $resData['msg'] = "账号或密码错误";
            return $resData;
        }
        $token = getToken();
        $admin->admin_token = $token;
        $admin->save();
        $resData['err'] = "0";
        $resData['data']['admin'] = $admin;
        $resData['admin_token'] = $token;
        $resData['msg'] = "";
        return $resData;
    }
}
