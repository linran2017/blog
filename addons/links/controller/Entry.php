<?php

namespace addons\links\controller;


use houdunwang\request\Request;
use modules\HdController;
use addons\links\model\Links;

class Entry extends HdController {
    public function __construct(){
        return $this->checkLogin();
    }

    /**
     * 列表页
     */
    public function index(){
        $data=Links::get();
        return $this->template(compact('data'));
    }

    /**
     * 添加页
     */
    public function store(){
        $id=Request::get('id');
        $model=Links::find($id)?:new Links();
        if(IS_POST){
            $post=Request::post();
            $model->save($post);
            $url = url('links.entry.index');
            return $this->setRedirect($url)->success('保存成功');
        }
        return $this->template(compact('model'));
    }

    /**
     * 删除
     */
    public function remove(){
        $id=Request::get('id');
        Links::delete($id);
        $url=url('links.entry.index');
        return $this->setRedirect($url)->success('删除成功');
    }
}