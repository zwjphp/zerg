<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/24
 * Time: 17:33
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'code' => 'require|isNotEmpty'
    ];

    protected $message = [
        'code' => 'code 信息不存在'
    ];
}