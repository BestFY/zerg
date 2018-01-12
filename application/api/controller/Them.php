<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7
 * Time: 12:03
 */

namespace app\api\controller;



use app\api\validate\ThemValidate;
use app\api\model\Them as ThemeModel;
use think\Config;
use think\Controller;

class Them extends Controller
{

         public function getSilmpleList($ids='')
         {
             (new ThemValidate())->goCheck();
              $ids = explode(',',$ids);
              $res = ThemeModel::with('topImg,headImg')->select($ids);
              return $res;
         }
         public function getThemProduct($id)
         {
                $theme = ThemeModel::getThemProductWith($id);
                return $theme;
         }
}