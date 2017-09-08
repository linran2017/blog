<?php namespace system\middleware;

use houdunwang\middleware\build\Middleware;
use system\model\Config as ConfigModel;
use system\model\Wechat;

class Config implements Middleware{
	//执行中间件
	public function run($next) {
	    //获得网站配置项
         $data=ConfigModel::first();
         if($data){
             $content=json_decode($data['content'],true);
             v('webconfig',$content);
         }
        //获得微信配置项
         $wechatInfo=Wechat::first();
         if($wechatInfo){
             $wechat=json_decode($wechatInfo['content'],true);
             c('wechat',array_merge(c('wechat'),$wechat));
         }

         $next();
	}
}