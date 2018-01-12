<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/6
 * Time: 21:21
 */

namespace app\api\model;

class Banner extends BaseModel
{

      public function item()
      {
          return $this->hasMany(BannerItem::class,'banner_id','id');
      }
}