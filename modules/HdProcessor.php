<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/8/17
 * Time: 12:18
 */

namespace modules;


use houdunwang\wechat\WeChat;

class HdProcessor{
    //没有找到这个方法就会触__call方法
    public function __call($name, $arguments){
        //得到一个微信对象
        $instance=WeChat::instance('message');
        //处理微信对象
        call_user_func_array([$instance,$name],$arguments);
    }
}