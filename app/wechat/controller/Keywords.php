<?php namespace app\wechat\controller;

use houdunwang\request\Request;
use houdunwang\route\Controller;
use houdunwang\view\View;
use modules\Wechat;
use system\model\BaseContent;
use system\model\Keywords as KeywordsModel ;

class Keywords extends Common {
    use Wechat;
    //列表显示
    public function lists(){
        //在keywords模型中keywords和base_content俩表关联，查询module为base的数据
        $data=KeywordsModel::where('module','base')->get();
        return View('',compact('data'));
    }
    //添加关键词和回复内容
    public function store(){
        if(IS_POST){
            $post=Request::post();
            //添加回复内容表base_content
            $contentModel=new BaseContent();
            $data=[
                'content'=>$post['content']
            ];
            //添加完毕返回自增id
            $id=$contentModel->save($data);

            //添加关键词表keywords
            $keywordsData=[
                'module'=>'base',
                'content'=>$post['keywords'],
                'content_id'=>$id
            ];
            $this->saveKeywords($keywordsData);
            return $this->setRedirect('lists')->success('添加成功');
        }
        return View();
    }

    //编辑关键词表和内容回复表里的内容
    public function update(){
        $id=Request::get('id');
        //获得关键词表里$id所对应的这一条数据
        $model=KeywordsModel::where('module','base')->find($id);
        //p($model);exit;
        if(IS_POST){
            $post=Request::post();
            //修改关键词表里content字段的内容
            $model->save(['content'=>$post['keywords']]);
            //查询内容回复表里到content_id所对应的这一条数据，并且修改这条数据所对应的content字段
            BaseContent::find($model['content_id'])->save(['content'=>$post['content']]);
            return $this->setRedirect('lists')->success('修改成功');

        }

        return View('',compact('model'));
    }


    //删除关键词和回复内容
    public function remove(){
        $id=Request::get();
        //根据关键词表的主键id找到对应的回复内容表的content_id
        $contentId=KeywordsModel::where('id',$id)->pluck('content_id');
        //删除回复内容表里对应的这一条数据
        BaseContent::delete($contentId);
        //删除关键词表里对应的数据
        KeywordsModel::delete($id);
        return $this->setRedirect('lists')->success('删除成功');
    }
}
