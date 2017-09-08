<?php
/*--------------------------------------------------------------------------
| 路由规则设置
|--------------------------------------------------------------------------
| 框架支持路由访问机制与普通GET方式访问
| 如果使用普通GET方式访问时不需要设置路由规则
| 当然也可以根据业务需要两种方式都使用
|-------------------------------------------------------------------------*/
//后台路由
Route::get('/admin','app\admin\controller\Entry@index');
//首页路由
Route::get('/index.html','app\home\controller\Entry@index');
//内容页路由
Route::get('/a_{aid}.html','app\home\controller\Entry@content');
//栏目封面路由
Route::get('/cover_{id}.html','app\home\controller\Entry@cover');
//栏目列表路由
Route::get('/c_{id}.html','app\home\controller\Entry@lists');
//微信路由
Route::get('/wechat.html','app\home\controller\Entry@wechat');