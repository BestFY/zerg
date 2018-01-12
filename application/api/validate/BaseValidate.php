<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/1
 * Time: 13:05
 */

namespace app\api\validate;


use app\exception\ParamException;
use think\Request;
use think\Validate;

class BaseValidate extends  Validate
{
     public function goCheck()
     {
         $request = Request::instance();
         $data = $request->param();
         $res  = $this->check($data);
         if(!$res)
         {
             throw  new ParamException([
                    'msg'   => $this->error
             ]);
         }else{
             return true;
         }
     }

    public function requireInt($value,$rule ='',$data ='',$field ='')
    {
        if( 0 != $value && !is_int($value +0))
        {
            return false;
        }else{
            return true;
        }
    }
}