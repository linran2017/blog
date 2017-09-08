<?php namespace app\system\controller;
use houdunwang\request\Request;
use system\model\Config as ConfigModel;
use houdunwang\route\Controller;

class Config extends Common {
    public function entry(){
        $model=ConfigModel::first()?:new ConfigModel();
        if(IS_POST){
            $json=json_encode(Request::post());
            $model->save(['content'=>$json]);
            return $this->setRedirect('entry')->success('保存成功');
        }
        $content=json_decode($model['content'],true);
        return View('',compact('content'));
    }
}
