<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/24
 * Time: 21:32
 */

return [
    'app_id' => 'wx1638e54e9c9870b8',
    'app_secret' => 'ddd358adee24874dc5cee32498b23029',
//    'app_id' => 'wx23899d68b42987cb',
//    'app_secret' => 'fc1862415102d35c6061798a237040fa',
    'login_url' => "https://api.weixin.qq.com/sns/jscode2session?appid=%s&secret=%s&js_code=%s&grant_type=authorization_code",

    // 微信获取access_token的url地址
    'access_token_url' => "https://api.weixin.qq.com/cgi-bin/token?" .
        "grant_type=client_credential&appid=%s&secret=%s",
];