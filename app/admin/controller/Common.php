<?php namespace app\admin\controller;

use houdunwang\route\Controller;
use houdunwang\session\Session;

class Common extends Controller{
    public function __construct(){
        if(!Session::get('user')){
            go('admin.login.index');
        }
    }
}
