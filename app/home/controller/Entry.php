<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDPHP framework]
 * |      Site: www.hdphp.com  www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace app\home\controller;

use houdunwang\request\Request;
use houdunwang\route\Controller;
use system\model\Article;
use system\model\Category;

class Entry extends Controller{
    //保存路径属性
    private $template;
    /**
     * 页面已加载就运行runModules
     */
    public function __construct(){
        $this->runModule();
        //定义模板路径
        $this->template='template/'.(IS_MOBILE?'mobile':'pc');
        if(!defined('__TEMPLATE__')){
            define('__TEMPLATE__',__ROOT__.'/'.$this->template);
        }
    }

    /**
     * 自定义载入模板
     */
    private function template($tpl,$var=[]){
        return view($this->template.'/'.$tpl,$var);
    }

    /**
     * 首页
     */
    public function index(){
        $artData=Article::paginate(5);
        $aData=Article::where('ishot',1)->get();
        return $this->template('index.html',compact('aData','artData'));
    }

    /**
     * 封面页
     */
      public function cover(){
          //调取当前栏目的数据
          $id=Request::get('id');
          $cateData=Category::find($id);
          //提取当前目录的文章
          $artData=Article::where('category_id',$id)->get();
          //热门文章
          $hotWhere=[
              ['category_id',$id],
              ['ishot',1]
          ];
          $hotData=Article::where($hotWhere)->get();
          //推荐文章
          $commendWhere=[
              ['category_id',$id],
              ['iscommend',1]
          ];
          $commendData=Article::where($commendWhere)->get();
          return $this->template('cover.html',compact('artData','cateData','hotData','commendData'));
      }

    /**
     * 列表页
     */
    public function lists(){
        $id=Request::get('id');
        $articleData=Article::where('category_id',$id)->get();
        //热门文章
        $reWhere=[
            ['category_id',$id],
            ['ishot',1]
        ];
        $reData=Article::where($reWhere)->get();
        return $this->template('lists.html',compact('articleData','reData'));
    }

    /**
     * 内容页
     */
    public function content(){
        $aid=Request::get('aid');
        //点击量自增1
        Article::where('aid',$aid)->increment('click',1);
        $arc=Article::find($aid);
//        p($data->toArray());

        return $this->template('content.html',compact('arc'));
    }

    /**
     * 扫码关注
     */
    public function wechat(){
        return $this->template('wechat.html');
    }

    /**
     * 模块运行
     */
    private function runModule(){
        $module=Request::get('m');
        $action=Request::get('a');
        //如果有一个get参数没有传递，就停止运行
       if(!$module || !$action) return;
    //把action动作变为数组
       $arr=explode('/',strtolower($action));
       //$arr=[
        //0=>'controller',
        //1=>'entry',
        //2=>'index',
        //]
        //定义常量为了组合模板
        define('MODULE',strtolower($module));
        define('MODULE_CONTROLLER',$arr[1]);
        define('MODULE_ACTION',$arr[2]);
        $className="addons\\{$module}\\{$arr[0]}\\".ucfirst($arr[1]);
        //如果参数存在，就终止首页原来的内容
        echo call_user_func_array([new $className,$arr[2]],[]);

        exit;
    }
}