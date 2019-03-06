<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/24
 * Time: 17:42
 */

namespace app\api\controller\v1;


use app\api\service\AppToken;
use app\api\service\UserToken;
use app\api\validate\AppTokenGet;
use app\api\validate\TokenGet;
use app\lib\exception\ParameterException;
use app\lib\exception\TokenException;
use app\api\service\Token as TokenService;

class Token
{
    public function getToken($code = ''){
        (new TokenGet())->goCheck();
        $ut = new UserToken($code);
        $token = $ut->get($code);
        return [
            'token' => $token
        ];
    }

    public function getAppToken($ac='', $se=''){
        (new AppTokenGet())->goCheck();
        $app = new AppToken();
        $token = $app->get($ac, $se);
        return [
            'token' => $token
        ];
    }



    public function varifyToken($token=''){
        if(!$token) {
            throw new ParameterException([
                'token不允许为空'
            ]);
        }
        $valid = TokenService::verifyToken($token);
        return [
            'isValid' => $valid
        ];

    }
}