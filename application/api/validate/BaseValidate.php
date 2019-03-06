<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/21
 * Time: 16:42
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck() {

        $request = Request::instance();
        $params = $request->param();

        $request = $this->batch()->check($params);
        if (!$request) {
            /*$error = $this->error;
            throw new Exception($error);*/

            $e = new ParameterException([
                'msg' => $this->error,
            ]);
            throw $e;
        }
        else {
            return true;
        }
    }

    protected function isPositiveInteger($value, $rule = '', $data = '', $field = '') {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        } else {
            return false;
//            return $field.'必须是正整数';
        }
    }

    protected function isNotEmpty($value, $rule = '', $data = '', $field = '') {
        if (empty($value)) {
            return false;
        } else {
            return true;
        }
    }

    public function getDataByRule($arrays){
        if (array_key_exists('user_id', $arrays) |
            array_key_exists('uid', $arrays)
        ) {
            throw new ParameterException([
                'msg' => '参数中包含有非法的参数名user_id或者uid'
            ]);
        }
        $newArray = [];
        foreach ($this->rule as $key => $value) {
            $newArray[$key] = $arrays[$key];
        }
        return $newArray;
    }


    //没有使用TP的正则验证，集中在一处方便以后修改
    //不推荐使用正则，因为复用性太差
    //手机号的验证规则
    protected function isMobile($value)
    {
        $mobile  = '^1(3|4|5|7|8)[0-9]\d{8}$^';
        $phone = '^0\d{2,3}-?\d{7,8}^';
        $resultPhone = preg_match($phone, $value);
        $resultMobile = preg_match($mobile, $value);
        if ($resultPhone || $resultMobile) {
            return true;
        } else {
            return false;
        }
    }

}