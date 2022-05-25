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

        // $connectUser = $this->userRepository->getConnectUser($data['unionId']);
        // $args['unionid'] = $data['unionId'];
        // $args['openid'] = $data['openId'];
        // $args['nickname'] = isset($userInfo['userInfo']['nickName']) ? $userInfo['userInfo']['nickName'] : '';
        // $args['sex'] = isset($userInfo['userInfo']['gender']) ? $userInfo['userInfo']['gender'] : '';
        // $args['province'] = isset($userInfo['userInfo']['province']) ? $userInfo['userInfo']['province'] : '';
        // $args['city'] = isset($userInfo['userInfo']['city']) ? $userInfo['userInfo']['city'] : '';
        // $args['country'] = isset($userInfo['userInfo']['country']) ? $userInfo['userInfo']['country'] : '';
        // $args['headimgurl'] = isset($userInfo['userInfo']['avatarUrl']) ? $userInfo['userInfo']['avatarUrl'] : '';
        // $args['parent_id'] = isset($userInfo['userInfo']['uid']) ? $userInfo['userInfo']['uid'] : 0;
        // $args['drp_parent_id'] = isset($userInfo['userInfo']['uid']) ? $userInfo['userInfo']['uid'] : 0;

        // if (empty($connectUser)) {
        //     $result = $this->createUser($args);

        //     if ($result['error_code'] == 0) {
        //         $args['user_id'] = $result['user_id'];
        //         if ($args['user_id'] && $args['unionid']) {
        //             $this->creatConnectUser($args);
        //             $this->creatWechatUser($args);
        //         }
        //     }
        // }

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
}
