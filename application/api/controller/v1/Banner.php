<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/21
 * Time: 14:55
 */

namespace app\api\controller\v1;


use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\BannerMissException;
use think\Controller;
use think\Exception;

class Banner extends Controller
{
//php think optimize:schema 数据库字段缓存
//php think optimize:route 路由缓存
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @param $id
     */
    public function getBanner($id) {
   /*     $data = [
           'id' => $id
        ];
        $validate = new IDMustBePostiveInt();
        $result = $validate->batch()
            ->check($data);
        if ($result) {
        } else {
        }
        var_dump($validate->getError());*/

        (new IDMustBePostiveInt())->goCheck();

//        $banner = BannerModel::with(['items','items.img'])->find($id);
        $banner = BannerModel::getBannerByID($id);

        if (!$banner) {
            throw new BannerMissException();
        }
//        $c = config('setting.img_prefix');
        return $banner;
    }
}