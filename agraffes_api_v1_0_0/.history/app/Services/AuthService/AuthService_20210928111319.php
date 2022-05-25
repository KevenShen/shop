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
