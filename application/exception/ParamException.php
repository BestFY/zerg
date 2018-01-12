<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/1
 * Time: 13:28
 */

namespace app\exception;

class ParamException extends BaseExceiption
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorcode = 10000;

    public function __construct($param = [])
    {
        if(!is_array($param))
        {
            return true;
        }
        if(array_key_exists('msg',$param))
        {
            $this->msg = $param['msg'];
        }
        if(array_key_exists('code',$param))
        {
            $this->msg = $param['code'];
        }
    }
}