<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/21
 * Time: 21:10
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends BaseModel
{
    protected $hidden = ['delete_time','update_time'];
    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }

    public static function getBannerByID($id)
    {
//        $result = Db::query("select * from banner_item where banner_id = ?",[$id]);

        //表达式、数组、闭包
//        $result = Db::table('banner_item')
//            ->where(function ($query) use ($id){
//                $query->where('banner_id', '=', $id);
//            })
//            ->select();
//        return $result;

        $banner = self::with(['items','items.img'])->find($id);
        return $banner;
    }
}