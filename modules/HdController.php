<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/8/18
 * Time: 17:17
 */

namespace modules;


use houdunwang\route\Controller;
use houdunwang\session\Session;

class HdController extends Controller {
    //没有登录，去登录
    public function checkLogin(){
        if(!Session::get('user')){
            go('admin.login.index');
        }
    }

    /**
     * 组合模板路径
     */
    public function template($data=''){
        return view('addons/'.MODULE.'/template/'.MODULE_CONTROLLER.'/'.MODULE_ACTION.'.php',$data);
    }

}