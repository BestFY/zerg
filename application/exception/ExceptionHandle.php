<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/31
 * Time: 19:19
 */

namespace app\exception;


use Exception;
use think\exception\Handle;

class ExceptionHandle extends Handle
{
    private  $code;
    private  $msg;
    private  $errorCode;
    //需要返回客户端当前的Url路径
    public function render(Exception $e)
    {
        if($e instanceof BaseExceiption)
        {
            $this->code        = $e->code;
            $this->msg         =  $e->msg;
            $this->errorCode   = $e->errorcode;
        }else{
            $this->code        = 500 ;
            $this->msg         ='服务器内部错误，不想告诉你';
            $this->errorCode   = '10000';

        }
        $result = [
               'msg'        => $this->msg,
               'errorCode' => $this->errorCode,
        ];
        return json($result,$this->code);
    }
}