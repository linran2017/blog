<?php namespace app\wechat\controller;

use houdunwang\route\Controller;
use houdunwang\wechat\WeChat;
use system\model\Keywords;
use system\model\BaseContent;
use system\model\Modules;

class Api extends Controller{
    public function __construct(){
        //读取配置信息，这时候中间件已经处理好了
        WeChat::valid();
    }

    //动作
    public function handle(){
        //消息管理模块
        $instance = WeChat::instance('message');
//关注用户扫描二维码事件
        if ($instance->isSubscribeEvent())
        {
            //获取消息内容
            $message = $instance->getMessage();
            //向用户回复消息
            $instance->text(c('wechat.subscribe_reply'));
        }
        //关键词回复
        $this->handleKeywords($instance->Content);
        //默认回复
        $instance->text(c('wechat.default_reply'));
    }

    //关键词处理
    public function handleKeywords($content){
        //通过用户回复的内容，查询到关键词表对应的信息
      $keywordInfo=Keywords::where('content',$content)->first();
      //查询到所对应的模块，比如是article,base
      $modulesInfo=Modules::where('name',$keywordInfo['module'])->first();
      //判断是否是微信处理模块，如果是就走下面，如果不是就默认回复
      if ($modulesInfo['is_wechat']){
          //如果是系统模块就走modules目录，否则走addons目录
          $dir=$modulesInfo['is_system']?'modules':'addons';
          //组合类名 \modules\base\system\Processor
          $className='\\'.$dir.'\\'.$modulesInfo['name'].'\system\Processor';
         //file_put_contents('./log.php',print_r($className,true));
          //调用模块里的handler方法，给用户回复内容
          call_user_func_array([new $className,'handler'],[$keywordInfo['content_id']]);
      }
    }
}
