<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/27
 * Time: 13:00
 */

namespace app\api\controller;


use think\Controller;
use \app\api\service\Token as TokenService;

class BaseController extends Controller
{
    protected function checkPrimaryScope(){
        TokenService::needPrimaryScope();
    }

    protected function checkExclusiveScope(){
        TokenService::needExclusiveScope();
    }
}