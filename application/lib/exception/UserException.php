<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/26
 * Time: 13:34
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $msg = '用户不存在';
    public $errorCode = 60000;
}