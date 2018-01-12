<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/31
 * Time: 16:53
 */

namespace app\exception;


class BannerException extends  BaseExceiption
{
      public $code =404;
      public $msg  = '请求的Banner不存在';
      public $errorCode = '40000';

}