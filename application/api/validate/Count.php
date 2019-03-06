<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/24
 * Time: 11:05
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
//        'count' => 'isPositiveInteger|between:1,15',
        'count' => 'between:1,15',
    ];

}