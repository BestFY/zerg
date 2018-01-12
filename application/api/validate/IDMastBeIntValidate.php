<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/1
 * Time: 12:46
 */

namespace app\api\validate;


class IDMastBeIntValidate extends BaseValidate
{
    protected $rule = [
         'id' => 'requireInt'
    ];
    protected  $message = [
           'id' =>'id 必须是正整数'
    ];

}