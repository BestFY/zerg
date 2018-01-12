<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7
 * Time: 12:08
 */

namespace app\api\validate;


class ThemValidate extends BaseValidate
{
        public $rule = [
            'ids' => 'require|idsArr'
        ];
    public function idsArr($value,$rule,$data,$field)
    {
          $value = explode(',',$value);
          if(empty($value)){
              return false;
          }
          foreach ($value as $v)
          {
              if(!$this->requireInt($v)){

                  return false;
              }
          }
          return true;
    }
}