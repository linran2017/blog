<?php namespace app\system\controller;

use houdunwang\request\Request;
use houdunwang\route\Controller;
use houdunwang\session\Session;
use system\model\User as UserModel;
class User extends Common {
    //动作
    public function changePassword(){
        if(IS_POST){
            $post=Request::post();
            if(strlen($post['newpassword'])<6){
               return $this->error('新密码不得少于6位');
            }
            if($post['confirmpassword']!=$post['newpassword']){
                return $this->error('两次密码不一致');
            }
            $user=UserModel::where('uid',Session::get('user.uid'))->first();
            if(!password_verify($post['password'],$user['password'])){
                return $this->error('旧密码错误');
            }
            UserModel::find(Session::get('user.uid'))->save(['password'=>password_hash($post['newpassword'],PASSWORD_DEFAULT)]);
            Session::flush();
            return $this->setRedirect(u('admin.login.index'))->success('修改成功');
        }
        return View::make();
    }
}
