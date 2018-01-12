<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7
 * Time: 17:31
 */

namespace app\api\model;


class Product extends BaseModel
{
      public function getMainImgUrlAttr($value,$data)
      {
       return   $this->getField($value,$data);
      }
}