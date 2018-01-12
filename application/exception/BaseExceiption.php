<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/31
 * Time: 16:05
 */

namespace app\exception;


use think\Exception;

class BaseExceiption extends  Exception
{
        public $code = 400;
        public $msg = '参数错误';
        public $errorcode = 10000;

}