<?php

namespace app\api\model;


class Image extends BaseModel
{
    protected $table = 'image';
   // 拼接完整的URL
    public function getUrlAttr($value,$data)
    {
       return      $this->getField($value,$data);
    }
}
