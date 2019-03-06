<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/26
 * Time: 14:31
 */

namespace app\api\model;


class UserAddress extends BaseModel
{
    protected $hidden =['id', 'delete_time', 'user_id'];

}