<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/5
 * Time: 8:22
 */

namespace app\lib\exception;


class PayException extends BaseException
{
    public $code = 404;
    public $msg = '支付失败';
    public $errorCode = 40000;

}