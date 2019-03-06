<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/25
 * Time: 21:45
 */

namespace app\api\model;


class ProductImage extends BaseModel
{
    protected $hidden = ['img_id', 'delete_time', 'product_id'];

    public function imgUrl()
    {
        return $this->belongsTo('Image','img_id','id');
    }

}