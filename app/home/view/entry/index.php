<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>欢迎使用HDPHP</title>
	<link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{background: #f3f3f3;font-family: 'Raleway', sans-serif}
    p{font-family: Raleway, sans-serif !important;  font-weight:100;}
    h4{font-size: 14px;}
    .links{margin: 0 auto;margin:10px;text-align: center;}
    .links a{padding:10px 10px;color:#636b6f;font-size:12px;text-decoration: none;}
</style>
<div class="contain" style="width: 800px; margin: 10px auto">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">扫描关注
            <a href="index.php?s=admin/entry/index" style="float: right; cursor: pointer; color: blue;">去后台</a>
            </h3>
        </div>
        <div class="panel-body">
           <div style="width: 390px; text-align: center; float: left">
               <img src="wechat.jpg" width="280" />
           </div>
            <div style=" width: 300px; float:right">
                <ul style="margin:40px; margin-right: 60px; font-weight: 700">
                    <li style="list-style: none; margin: 30px;">回复qq：文本消息</li>
                    <li style="list-style: none; margin: 30px;">回复宜居：图文消息</li>
                    <li style="list-style: none; margin: 30px;">后台用户名：admin</li>
                    <li style="list-style: none; margin: 30px;">后台密码：admin888</li>
                </ul>
            </div>
    </div>
    </div>
</div>
<p class="text-muted text-center" style="margin-top:200px;font-size:90px;">{{$framework}}</p>
<h4 class="text-muted text-center">服务化/组件化/模块化的未来框架产品</h4>
<div class="links">
    <a href="http://bbs.houdunwang.com">论坛交流</a>
    <a href="http://houdunren.com">在线视频</a>
    <a href="http://houdunwang.com">实战培训</a>
    <a href="http://www.kancloud.cn/houdunwang/hdphp3/215156">在线手册</a>
</div>
<h6 class="text-muted text-center">version: {{HDPHP_VERSION}}</h6>
</body>
</html>