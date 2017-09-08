<?php namespace app\admin\controller;

use houdunwang\request\Request;
use houdunwang\route\Controller;
use houdunwang\session\Session;
use system\model\User;
class Login extends Controller{
    //动作
    public function index(){
       //echo password_hash('admin888',PASSWORD_DEFAULT);
        if(IS_POST){
            $post=Request::post();
            $user=User::where('username',$post['username'])->first();
            if(!$user || !password_verify($post['password'],$user['password'])){
                return $this->error('用户名或密码不正确');
            }
            $userinfo=[
                'uid'=>$user['uid'],
                'username'=>$user['username']
            ];
            Session::set('user',$userinfo);
            return $this->setRedirect(u('admin.entry.index'))->success('登录成功');
        }
        return View::make();
    }
    public function logout(){
        Session::flush();
        return $this->setRedirect('index')->success('退出成功');
    }
}
