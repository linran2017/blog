<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/8/18
 * Time: 14:49
 */

namespace app\modules\controller;


use houdunwang\dir\Dir;
use houdunwang\request\Request;
use houdunwang\view\View;
use system\model\Modules as ModulesModle;

class Modules extends Common {
    /**
     * 模块列表
     */
    public function lists(){
        //得到目录的树状结构
        $dirs=Dir::tree('addons');
        //p($dirs);
        $data=[];
        foreach ($dirs as $v){
            //组合package.json的路径
            $path='addons/'.$v['basename'].'/package.json';
            $arr=json_decode(file_get_contents($path),true);
            //判断模块是否安装
            $arr['is_install']=ModulesModle::where('name',$arr['name'])->first()?1:0;
            $data[]=$arr;
        }
        //p($data);
        //分配已安装的模块，为了在左侧菜单显示循环
        $this->assignModules();
        return View('',compact('data'));
    }

    /**
     * 模块设计
     */
    public function design(){
        if(IS_POST){
            $post=Request::post();
            //模块名称必须是数字和字母组成
            $preg='/^[0-9a-z]+$/i';
            if(!preg_match($preg,$post['name'])){
                return $this->error('模块名称必须是数字和字母组成');
            }
            //判断模块是否已经设计过
            if(is_dir('addons/'.$post['name'])){
                return $this->error('该模板已存在');
            }
            //创建模块目录和文件
            $this->makeDirFile($post['name']);
            //创建一个保存设计数据的json文件，将来安装的时候用
            $packageFile='addons/'.$post['name'].'/package.json';
            file_put_contents($packageFile,json_encode($post,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT));
            return $this->setRedirect('lists')->success('设计成功');
        }
        //分配已经安装好的模块，在左侧菜单循环显示
        $this->assignModules();
        return View();
    }

    /**
     * 分配已安装模块信息
     */
    private function assignModules(){
        $installedModules=ModulesModle::where('is_system',0)->get();
        View::with(compact('installedModules'));
    }

    /**
     * 创建模块目录和所需类文件
     */
    private function makeDirFile($name){
        $dirs=[
            'controller',
            'model',
            'template',
            'system'
        ];
        foreach ($dirs as $v){
            //addons/stu/controller
            $path='addons/'.$name.'/'.$v;
            is_dir($path) || mkdir($path,0777,true);
        }
        //写入微信处理的processor
        $str=<<<str
<?php
namespace addons\\{$name}\system;


use modules\HdProcessor;

class Processor extends HdProcessor {
    public function handler(\$contentId){
     
    }
}
str;
        //把内容写入文件
        //addons/stu/system/Processor.php
        $processorFile='addons/'.$name.'/system/Processor.php';
        file_put_contents($processorFile,$str);
        //写入Controller文件
        $s=<<<s
<?php

namespace addons\\{$name}\controller;


use modules\HdController;

class Entry extends HdController {
    public function index(){

    }
}
s;
        //在文件中写入内容
        //addons/stu/controller/Entry.php
        $controllerFile='addons/'.$name.'/controller/Entry.php';
        file_put_contents($controllerFile,$s);
    }

    /**
     * 安装模块
     */
    public function install(){
        $name=Request::get('name');
        //addons/stu/package.json
        $path='addons/'.$name.'/package.json';
        //得到package.json文件的内容,并且转为数组
        $jsonArray=json_decode(file_get_contents($path),true);
      //新建一个对象
       $model=new ModulesModle();
       //把package.json的内容添加到模块表里
        $model->save($jsonArray);
        return $this->setRedirect('lists')->success('安装成功');
    }

    /**
     * 卸载模块
     */
    public function uninstall(){
        $name=Request::get('name');
        ModulesModle::where('name',$name)->delete();
        return $this->setRedirect('lists')->success('卸载成功');
    }
}