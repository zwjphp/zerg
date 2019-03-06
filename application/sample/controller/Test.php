<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/20
 * Time: 23:23
 */

namespace app\sample\controller;

use think\Request;


class Test
{
//    public function hello($id, $name,$age)
//    public function hello($id, $name,$age)
    public function hello(Request $request)
    {
//        $id = Request::instance()->param('id');
//        $name = Request::instance()->param('name');
//        $age = Request::instance()->param('age');
//        $all = Request::instance()->param();
//        $all = Request::instance()->get();
//        $all = Request::instance()->route();
//        $all = $request->param();
        $all = input('param');

        var_dump($all);
//        echo $id;
//        echo '|';
//        echo $name;
//        echo '|';
//        echo $age;

//        return 'hello,world';
    }


}