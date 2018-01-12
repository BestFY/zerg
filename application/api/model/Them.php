<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7
 * Time: 12:18
 */

namespace app\api\model;


class Them extends BaseModel
{
    protected  $table  = 'theme';
    protected  $hidden = ['head_img_id','update_time','topic_img_id','delete_time'];
     public function topImg()
     {
       return  $this->belongsTo('Image','topic_img_id','id');
     }
     public function headImg()
     {
         return   $this->belongsTo('Image','head_img_id','id');
     }
     public function product()
     {
         return  $this->belongsToMany(Product::class,'theme_product','product_id','theme_id');
     }
     public static function  getThemProductWith($id)
     {
        return  self::with('product,topImg,headImg')->find($id);
     }

}