<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDPHP framework]
 * |      Site: www.hdphp.com  www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace app\admin\controller;

use houdunwang\route\Controller;
use houdunwang\view\View;
use system\model\Category;

class Entry extends Common
{
    public function index(){
        $data=Category::get();
        //p($data->toArray());
        return View::make();
    }
}