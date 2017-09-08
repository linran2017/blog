<?php namespace app\wechat\controller;

use houdunwang\request\Request;
use houdunwang\route\Controller;
use system\model\Wechat;


class Entry extends Common {
    //动作
    public function setting(){
        $model=Wechat::first()?:new Wechat();
        if(IS_POST){
            $model->save(['content'=>json_encode(Request::post())]);
            return $this->setRedirect('setting')->success('保存成功');
        }
        //随机token
        $token=md5(microtime());
        //消息加密的43为数据字符串
        $aesKey=md5(microtime()).substr(md5(time()),0,11);
        if($model['content']){
            $content=json_decode($model['content'],true);
        }else{
            $content=[];
        }
        return View('',compact('content','token','aesKey'));
    }
}
