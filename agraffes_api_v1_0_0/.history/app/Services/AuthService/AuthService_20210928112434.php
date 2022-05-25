<?php

namespace App\Service\AuthService;

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

    public function loginMiddleWare(array $request)
    {
        $result = $this->Login($request);
        if (isset($result['token'])) {
            return $result;
        }
        return false;
    }

    private function Login($req)
    {
        $data['email'] = $req['email'];
        $data['password'] = $req['password'];
        $user = User::where('email', $data['email'])->first();
        if (!$user || !Hash::check($data['password'], $user->password)) {
            return false;
        }
        $token = $user->createToken('my-app-token')->plainTextToken;
        return ['user' => $user, 'token' => $token];
    }

    public function register($request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        return response([
            'message' => '注册成功',
        ]);
    }
}
