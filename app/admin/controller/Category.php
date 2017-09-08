<?php namespace app\admin\controller;

use houdunwang\request\Request;
use houdunwang\route\Controller;
use houdunwang\view\View;
use system\model\Article;
use system\model\Category as CategoryModel;
class Category extends Common {

    //GET /photo 索引
    public function lists(){
        $data=CategoryModel::get();
        $data=$data?$data->toArray():[];
//        p($data->toArray());
        //获得树状结构
        $data = Arr::tree($data, 'catname', 'id','pid');
        return View('',compact('data'));
    }



    //POST /photo 保存新增数据
    public function store(){
        $id=Request::get('id');
        $model=$id?CategoryModel::find($id):new CategoryModel();
        if (IS_POST){
            $model->save(Request::post());

//           p(Request::post());exit;
            return $this->setRedirect('lists')->success('保存成功');
        }
        $categoryData=$model->getSelectData($id);
        return View('',compact('categoryData','model'));
    }






    //DELETE /photo/{photo} 删除
    public function remove(){
        $id=Request::get('id');
        if(CategoryModel::where('pid',$id)->get()){
            return $this->setRedirect('lists')->error('该栏目下面有子栏目，不能直接删除');
        }
        if(Article::where('category_id',$id)->get()){
            return $this->setRedirect('lists')->error('该栏目下面有文章，不能直接删除');
        }
        CategoryModel::delete($id);
        return $this->setRedirect('lists')->success('删除成功');
    }
}