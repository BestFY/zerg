<?php

namespace app\api\model;


class BannerItem extends BaseModel
{
    #绑定图片
    public function img()
    {
        $this->belongsTo(Image::class,'image_id','id');
    }

}
