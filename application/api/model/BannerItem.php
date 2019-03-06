<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/21
 * Time: 21:10
 */

namespace app\api\model;


use think\Model;

class BannerItem extends BaseModel
{
    protected $hidden = ['id','img_id','delete_time','update_time'];
    public function img(){
        return $this->belongsTo('Image','img_id','id');
    }

}