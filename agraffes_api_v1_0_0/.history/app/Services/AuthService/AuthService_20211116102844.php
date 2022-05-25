<?php

namespace App\Services\AuthService;

use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthService
{
    private $request;
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function authorization()
    {
        $key = strtoupper('HTTP_X_' . env('APP_NAME') . '_Authorization');
        $token = isset($_SERVER[$key]) ? $_SERVER[$key] : '';
        if (empty($token)) {
            return array('error' => 1, 'msg' => strtolower('header parameter `x-' . env('APP_NAME') . '-authorization` is required'));
        }
        $user = User::where('token', $token)->first();
        if ($user) {
            return $user->id;
        }
        return array('error' => 1, 'msg' => 'token-illegal');
    }

    public function loginMiddleWare($request)
    {
        $result = $this->Login($request);
        // if (isset($result['token'])) {
        //     return $result;
        // }
        // return false;
        return $result;
    }

    private function Login($req)
    {
 
        $data['email'] = $req['email'];
        $data['password'] = $req['password'];
        // $user = User::where('email', $data['email'])->first();
        // if (!$user || !Hash::check($data['password'], $user->password)) {
        //     return false;
        // }
        // $token = $user->createToken(env('APP_NAME'))->plainTextToken;
        // return ['user' => $user, 'token' => $token];
        return $data['password'];
    }

    public function register($request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        return response([
            'err' => 0,
            'message' => '注册成功',
            'token' => 'token'
        ]);
    }
}
