<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/21
 * Time: 15:21
 */

namespace app\api\validate;

use think\Validate;

class TestValidate extends Validate
{
    protected  $rule = [
        'name' =>  'require|max:10',
        'email' => 'email'
    ];

}