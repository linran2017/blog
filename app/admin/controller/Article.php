<?php namespace app\admin\controller;
use houdunwang\request\Request;
use houdunwang\route\Controller;
use houdunwang\view\View;
use modules\Wechat;
use system\model\Category;
use system\model\Article as ArticleModel;
use system\model\Keywords;

class Article extends Common {

    use Wechat;
    //GET /photo 索引
    public function lists(){
//        print_const();
        $rows=v('webconfig.rows');
        $rows=$rows?:10;
        $data = ArticleModel::where('isrecycle',0)->paginate($rows);
        return View('',compact('data'));
    }
//    放回收站
    public function delete(){
        $aid=Request::get('aid');
        ArticleModel::find($aid)->save(['isrecycle'=>1]);
        return $this->setRedirect('lists')->success('已放入回收站');
    }
    //回收站列表
    public function recycle(){
        $rows=v('webconfig.rows');
        $rows=$rows?:10;
        $data = ArticleModel::where('isrecycle',1)->paginate($rows);
        return View('',compact('data'));
    }

    //GET /photo/create 创建界面
    public function store(){
        $aid=Request::get('aid');

        $article=$aid?ArticleModel::find($aid):new ArticleModel();
        //p($article->toArray());exit;
        if(IS_POST){
            $post=Request::post();
            //文章表的添加和编辑
            $article->save(Request::post());
            //p($_POST);exit;

            //关键词表的添加和编辑
            $data=[
                'module'=>'article',
                'content_id'=>$article['aid'],
                'content'=>$post['wechat_keyword']
            ];
            $this->saveKeywords($data);
            return $this->setRedirect('lists')->success('保存成功');
        }
        $categoryData=Category::get();
        $categoryData=$categoryData?$categoryData->toArray():[];
        $categoryData=Arr::tree($categoryData, 'catname', 'id');
        return  View('',compact('categoryData','article'));
    }

    //还原
    public function recover(){
        $aid=Request::get('aid');
        ArticleModel::find($aid)->save(['isrecycle'=>0]);
        return $this->setRedirect('lists')->success('还原成功');
    }

    //DELETE /photo/{photo} 删除
    public function remove(){
       $aid=Request::get('aid');
       //文章表数据删除
       ArticleModel::delete($aid);
       //关键词表数据删除
        $where=[
            ['module','article'],
            ['content_id',$aid]
        ];
        Keywords::where($where)->delete();
       return $this->setRedirect('recycle')->success('彻底删除成功');
    }

}