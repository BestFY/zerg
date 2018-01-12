<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/31
 * Time: 19:58
 */

namespace app\api\controller;


use app\api\model\Banner as BannerModel;
use app\api\validate\IDMastBeIntValidate;
use app\exception\BannerException;
use think\Controller;


class Banner extends Controller
{
            public function index($id)
            {

                (new IDMastBeIntValidate())->goCheck();
                 $banner = BannerModel::get($id);
                 if(!$banner){
                     throw new BannerException();
                 }
                 return $banner;
            }
}