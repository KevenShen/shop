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

        // $args['user_id'] = !empty($args['user_id']) ? $args['user_id'] : $connectUser['user_id'];
        // $this->updateUser($args);
        // $this->connectUserUpdate($args);
        // $this->wechatUserUpdate($args);
        // $token = \App\Api\Foundation\Token::encode(array('uid' => $args['user_id']));
        // return array('token' => $token, 'openid' => $args['openid'], 'unionid' => $args['unionid']);

        $data['email'] = $req['email'];
        $data['password'] = $req['password'];
        $user = User::where('email', $data['email'])->first();
        if (!$user || !Hash::check($data['password'], $user->password)) {
            return false;
        }
        $token = $user->createToken('my-app-token')->plainTextToken;
    }

    public function authorization()
    {
        
    }
}
