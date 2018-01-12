<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/6
 * Time: 21:34
 */

namespace app\api\model;


use think\Config;
use think\Model;

class BaseModel extends Model
{
    public function getField($value,$data)
    {
         $prefectUrl = $value;
          if($data['from'] == 1)
          {
              $prefectUrl = Config::get('UrlPrefix').$value;
          }
          return $prefectUrl;
    }
}