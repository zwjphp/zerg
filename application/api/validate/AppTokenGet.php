<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/5
 * Time: 20:15
 */

namespace app\api\validate;


class AppTokenGet extends BaseValidate
{
    protected $rule = [
        'ac' => 'require|isNotEmpty',
        'se' => 'require|isNotEmpty'
    ];
}