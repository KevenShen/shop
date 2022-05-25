<?php

namespace App\Service\AuthService;

use App\Repositories\User\UserRepository;


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
        $this->request = $request['userinfo'];
        $result = $this->Login($request);
        if (isset($result['token']) && isset($result['unionid'])) {
            return $result;
        }

        return false;
    }

    private function Login($req)
    {
        $userInfo = $req['userinfo'];
        $config = array('appid' => $this->WxappConfigRepository->getWxappConfigByCode('wx_appid'), 'secret' => $this->WxappConfigRepository->getWxappConfigByCode('wx_appsecret'));
        // $wxapp = new \App\Extensions\Wxapp($config);
        // $token = $wxapp->getAccessToken();
        // $response = $wxapp->getOauthOrization($req['code']);
        // $pc = new \App\Api\Support\WXBizDataCrypt($config['appid'], $response['session_key']);
        // $errCode = $pc->decryptData($userInfo['encryptedData'], $userInfo['iv'], $data);

        // if ($errCode != 0) {
        //     $wxapp->log($errCode);
        // }

        // $data = json_decode($data, true);

        // if (!isset($data['unionId'])) {
        //     if ($wxapp->errCode == '40029') {
        //         $wxapp->log($wxapp->errMsg);
        //     }

        //     return false;
        // }

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
    }
}
