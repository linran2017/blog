<!DOCTYPE html>
<!-- saved from url=(0029)http://www.wubin.pro/l/4.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="http://push.zhanzhang.baidu.com/push.js"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://hm.baidu.com/hm.js?a4535105572471f305ae4fac98e7be00"></script>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>web前端-武斌博客，技术博客，个人博客</title>
    <meta name="Keywords" content="html、js、jquery、html5、css、css3、web前端">
    <meta name="description" content="html、html5页面布局jquery效果、css3动画以及web前端技术分享">
    <link rel="stylesheet" href="http://www.wubin.pro/static/index/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://www.wubin.pro/static/index/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://www.wubin.pro/static/index/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="http://www.wubin.pro/static/index/css/index.css">
    <script src="http://www.wubin.pro/static/index/js/jquery.min.js"></script>
    <!--百度验证-->
    <meta name="baidu-site-verification" content="hyywvAl2zC">

<link rel="stylesheet" type="text/css" href="http://changyan.itc.cn/css/??plugin/reping.css"><script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.8/clipboard.min.js"></script></head>
<body>
<header>
    <div class="loading" style="width: 100%; display: none;"></div>

    
<nav class="navbar navbar-default navbar-fixed-top wb_header" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="margin-left: -15px">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color:#EEEE00" href="./index_files/index.html">技术博客</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="cate">
                    <a href="./index_files/index.html" style="color: #fff;">首页</a>
                </li>

                <li class="dropdown">
                    <a style="color: #fff" href="/cover_22.html" class="dropdown-toggle" data-hover="dropdown" data-delay="2" data-close-others="false">
                        前台技术<b class="caret"></b>                        </a>
                    <ul class="dropdown-menu">
                        <?php
$data=\system\model\Category::where('pid',22)->limit(10000)->get();
$data=$data?$data->toArray():[];
foreach($data as $v):
$url=$v['cover']?'/cover_':'/c_';
$v['url']=$url.$v['id'].'.html';
?>

                            <li>
                                <a href="<?php echo $v['url']?>"><?php echo $v['catname']?></a>
                            </li>
                        
<?php
endforeach;
?>
                    </ul>
                </li>

                <li class="dropdown">
                    <a style="color: #fff" href="/cover_23.html" class="dropdown-toggle" data-hover="dropdown" data-delay="2" data-close-others="false">
                        后台技术<b class="caret"></b>                        </a>
                    <ul class="dropdown-menu">
                        <?php
$data=\system\model\Category::where('pid',23)->limit(10000)->get();
$data=$data?$data->toArray():[];
foreach($data as $v):
$url=$v['cover']?'/cover_':'/c_';
$v['url']=$url.$v['id'].'.html';
?>

                            <li>
                                <a href="<?php echo $v['url']?>"><?php echo $v['catname']?></a>
                            </li>
                        
<?php
endforeach;
?>
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
</header>
<script>
    $(function(){
        $('.loading').animate({'width':'30%'},50) ;
    })
</script>
    <div class="container wrap">
        <div class="row">
            <div class="col-lg-8 col-xs-12 col-md-12  w-left">
                
<article>
    <h3 class="col-xs-12 col-md-12 col-lg-12" style="font-size: 18px">
        <a style="text-decoration: none;" href="http://www.wubin.pro/c/33.html">YARN, 一款更优秀的javascript包管理(快速、可靠、安全的依赖管理)</a>
    </h3>
    <div class="col-xs-12 col-md-12 col-lg-12 w-date">
                    <span class="w-posted-on col-xs-5 col-md-2 col-lg-3">
                        <i class="fa fa-calendar"></i>
                        <span><time datetime="2017/08/09 08:00:00">2017/08/09</time></span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <span>by</span>
                        <i class="fa fa-user"></i>
                        <span>武斌</span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <i class="glyphicon glyphicon-folder-open"></i>
                        <span>分类：</span>
                        <span>web前端</span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <i class="fa fa-eye"></i>
                        <span>浏览：</span>
                        <span>64</span>
                    </span>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-12 w-body">
        <div class="col-sm-4 col-md-3 col-lg-3 hidden-xs">
            <div class="w-thumb">
                <a href="http://www.wubin.pro/c/33.html" class="">
                    <img src="http://www.wubin.pro/static/uploads/20170807/d0084d8e22d8521b145b090245b2124f.png" alt="YARN, 一款更优秀的javascript包管理(快速、可靠、安全的依赖管理)">
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-6 col-lg-8">
            Yarn 会缓存它下载的每个包，所以不需要重复下载。它还能并行化操作以最大化资源利用率，所以安装速度之快前所未有。Yarn 在每个安装包的代码执行前使用校验码验证包的完整。Yarn 使用一个格式详尽但简洁的 lockfile 和一个精确的算法来安装，能够保证在一个系统上的运行的安装过程也会以同样的方式运行在其他系统上...        </div>
        <p class="pull-right hidden-xs">
            <a href="http://www.wubin.pro/c/33.html" class="btn btn-primary w-read">详细信息&gt;&gt;</a>
        </p>
    </div>
    <footer class="col-xs-12 col-md-12 col-lg-12 w-date">
        <i class="glyphicon glyphicon-tags"></i>
        <span>标签：</span>
                <a href="http://www.wubin.pro/t/13.html"> 其他</a>、
                <a href="http://www.wubin.pro/t/5.html"> js</a>、
            </footer>
</article>
<article>
    <h3 class="col-xs-12 col-md-12 col-lg-12" style="font-size: 18px">
        <a style="text-decoration: none;" href="http://www.wubin.pro/c/30.html">windows10安装nodejs出现：The error code is 2503.</a>
    </h3>
    <div class="col-xs-12 col-md-12 col-lg-12 w-date">
                    <span class="w-posted-on col-xs-5 col-md-2 col-lg-3">
                        <i class="fa fa-calendar"></i>
                        <span><time datetime="2017/08/04 09:00:00">2017/08/04</time></span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <span>by</span>
                        <i class="fa fa-user"></i>
                        <span>武斌</span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <i class="glyphicon glyphicon-folder-open"></i>
                        <span>分类：</span>
                        <span>web前端</span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <i class="fa fa-eye"></i>
                        <span>浏览：</span>
                        <span>40</span>
                    </span>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-12 w-body">
        <div class="col-sm-4 col-md-3 col-lg-3 hidden-xs">
            <div class="w-thumb">
                <a href="http://www.wubin.pro/c/30.html" class="">
                    <img src="http://www.wubin.pro/static/uploads/20170803/f68ade14eed258252576d099fdaf8a72.jpg" alt="windows10安装nodejs出现：The error code is 2503.">
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-6 col-lg-8">
            在windows10系统环境下安装nodejs出现错误提示：The installer has encountered an unexpected error installing this package. This may indicate a problem with this package. The error code is 2503.
一般可能是权限不足导致，这里给出解决方案，供大家参考...
        </div>
        <p class="pull-right hidden-xs">
            <a href="http://www.wubin.pro/c/30.html" class="btn btn-primary w-read">详细信息&gt;&gt;</a>
        </p>
    </div>
    <footer class="col-xs-12 col-md-12 col-lg-12 w-date">
        <i class="glyphicon glyphicon-tags"></i>
        <span>标签：</span>
                <a href="http://www.wubin.pro/t/16.html"> nodejs</a>、
                <a href="http://www.wubin.pro/t/8.html"> 软件</a>、
                <a href="http://www.wubin.pro/t/5.html"> js</a>、
            </footer>
</article>
<article>
    <h3 class="col-xs-12 col-md-12 col-lg-12" style="font-size: 18px">
        <a style="text-decoration: none;" href="http://www.wubin.pro/c/14.html">jquery之Ajax--处理跨域请求</a>
    </h3>
    <div class="col-xs-12 col-md-12 col-lg-12 w-date">
                    <span class="w-posted-on col-xs-5 col-md-2 col-lg-3">
                        <i class="fa fa-calendar"></i>
                        <span><time datetime="2017/07/01 23:08:00">2017/07/01</time></span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <span>by</span>
                        <i class="fa fa-user"></i>
                        <span>武斌</span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <i class="glyphicon glyphicon-folder-open"></i>
                        <span>分类：</span>
                        <span>web前端</span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <i class="fa fa-eye"></i>
                        <span>浏览：</span>
                        <span>99</span>
                    </span>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-12 w-body">
        <div class="col-sm-4 col-md-3 col-lg-3 hidden-xs">
            <div class="w-thumb">
                <a href="http://www.wubin.pro/c/14.html" class="">
                    <img src="http://www.wubin.pro/static/uploads/20170701/5051ae509c5a869a99e1aba75d4870c1.jpg" alt="jquery之Ajax--处理跨域请求">
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-6 col-lg-8">
            各位码代码的时候，少不了使用AJAX请求其他域名下的请求，但是会出现拒绝访问的情况，AJAX只能访问本地资源，而不允许跨域进行访问；那么什么是跨域来来着，简单来说，就是用脚从一个城池跨到另一个城池，文中详细介绍了什么是跨域以及ajax如何跨域请求...        </div>
        <p class="pull-right hidden-xs">
            <a href="http://www.wubin.pro/c/14.html" class="btn btn-primary w-read">详细信息&gt;&gt;</a>
        </p>
    </div>
    <footer class="col-xs-12 col-md-12 col-lg-12 w-date">
        <i class="glyphicon glyphicon-tags"></i>
        <span>标签：</span>
                <a href="http://www.wubin.pro/t/5.html"> js</a>、
                <a href="http://www.wubin.pro/t/1.html"> html</a>、
            </footer>
</article>
<article>
    <h3 class="col-xs-12 col-md-12 col-lg-12" style="font-size: 18px">
        <a style="text-decoration: none;" href="http://www.wubin.pro/c/7.html">利用css3实现鼠标移入下划线向两边展开效果</a>
    </h3>
    <div class="col-xs-12 col-md-12 col-lg-12 w-date">
                    <span class="w-posted-on col-xs-5 col-md-2 col-lg-3">
                        <i class="fa fa-calendar"></i>
                        <span><time datetime="2017/06/20 21:33:34">2017/06/20</time></span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <span>by</span>
                        <i class="fa fa-user"></i>
                        <span>武斌</span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <i class="glyphicon glyphicon-folder-open"></i>
                        <span>分类：</span>
                        <span>web前端</span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <i class="fa fa-eye"></i>
                        <span>浏览：</span>
                        <span>182</span>
                    </span>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-12 w-body">
        <div class="col-sm-4 col-md-3 col-lg-3 hidden-xs">
            <div class="w-thumb">
                <a href="http://www.wubin.pro/c/7.html" class="">
                    <img src="http://www.wubin.pro/static/uploads/20170620/1bfe836f001549d1a19b68cc0b70f63a.png" alt="利用css3实现鼠标移入下划线向两边展开效果">
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-6 col-lg-8">
            本文主要介绍了利用css3和伪元素来实现当鼠标移入的时候下划线由中间向两边展开的实现方式方法，于文中做了详细介绍，来方便大家进行理解，最后给出了完整的示例代码提供大家参考学习，如果你恰好需要，那么超人就恰好有你需要的...        </div>
        <p class="pull-right hidden-xs">
            <a href="http://www.wubin.pro/c/7.html" class="btn btn-primary w-read">详细信息&gt;&gt;</a>
        </p>
    </div>
    <footer class="col-xs-12 col-md-12 col-lg-12 w-date">
        <i class="glyphicon glyphicon-tags"></i>
        <span>标签：</span>
                <a href="http://www.wubin.pro/t/1.html"> html</a>、
            </footer>
</article>
<article>
    <h3 class="col-xs-12 col-md-12 col-lg-12" style="font-size: 18px">
        <a style="text-decoration: none;" href="http://www.wubin.pro/c/6.html">网页加载进度条的JS程序开发思路与实际应用</a>
    </h3>
    <div class="col-xs-12 col-md-12 col-lg-12 w-date">
                    <span class="w-posted-on col-xs-5 col-md-2 col-lg-3">
                        <i class="fa fa-calendar"></i>
                        <span><time datetime="2017/06/19 23:31:53">2017/06/19</time></span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <span>by</span>
                        <i class="fa fa-user"></i>
                        <span>武斌</span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <i class="glyphicon glyphicon-folder-open"></i>
                        <span>分类：</span>
                        <span>web前端</span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <i class="fa fa-eye"></i>
                        <span>浏览：</span>
                        <span>84</span>
                    </span>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-12 w-body">
        <div class="col-sm-4 col-md-3 col-lg-3 hidden-xs">
            <div class="w-thumb">
                <a href="http://www.wubin.pro/c/6.html" class="">
                    <img src="http://www.wubin.pro/static/uploads/20170619/362490782157f2f5b74519a82e55bce2.jpg" alt="网页加载进度条的JS程序开发思路与实际应用">
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-6 col-lg-8">
            一款好的产品，都需要有一个漂亮的loading界面。lodaing界面不仅能给用户带来良好的体验，而且有效的消除了程序加载等待过程中的枯躁感。loading进度条更是对当前加载进度的一个良好反馈。从0%-100%的加载进度可以有效的告知用户还有多久即可打开页面。        </div>
        <p class="pull-right hidden-xs">
            <a href="http://www.wubin.pro/c/6.html" class="btn btn-primary w-read">详细信息&gt;&gt;</a>
        </p>
    </div>
    <footer class="col-xs-12 col-md-12 col-lg-12 w-date">
        <i class="glyphicon glyphicon-tags"></i>
        <span>标签：</span>
                <a href="http://www.wubin.pro/t/5.html"> js</a>、
                <a href="http://www.wubin.pro/t/1.html"> html</a>、
            </footer>
</article>
<article class="w-page-list">
        <ul class="rows hidden-xs" style="padding-top:10px; ">
        <span>共5条记录</span>
    </ul>
</article>

            </div>
            <script>
                $(function(){
                    $('.loading').animate({'width':'60%'},50) ;
                })
            </script>
            <div class="col-lg-4 hidden-xs hidden-sm hidden-md w-right">
                <aside id="w-search" class="">
                    <div class="panel-body w-see-body">
                        <form action="http://www.wubin.pro/index/index/search.html" method="get">
<input type='hidden' name='csrf_token' value=''/>

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" placeholder="输入内容进行搜索..." class="search-field form-control" name="search">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                          <span class="fa fa-search"></span>
                                    </button>
                                </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </aside>
                <aside id="w-tags" class="">
                    <div class="w-see-title" style="padding-bottom: 0px">热门标签</div>
                    <div class="w-tags">
                                                <a class="tag-6" href="http://www.wubin.pro/t/1.html">html (14)</a>
                                                <a class="tag-4" href="http://www.wubin.pro/t/2.html">thinkphp (10)</a>
                                                <a class="tag-3" href="http://www.wubin.pro/t/3.html">centos (3)</a>
                                                <a class="tag-8" href="http://www.wubin.pro/t/4.html">linux (3)</a>
                                                <a class="tag-4" href="http://www.wubin.pro/t/5.html">js (6)</a>
                                                <a class="tag-6" href="http://www.wubin.pro/t/16.html">nodejs (1)</a>
                                                <a class="tag-5" href="http://www.wubin.pro/t/7.html">phpstorm (5)</a>
                                                <a class="tag-1" href="http://www.wubin.pro/t/8.html">软件 (8)</a>
                                                <a class="tag-6" href="http://www.wubin.pro/t/9.html">第三方登录 (2)</a>
                                                <a class="tag-8" href="http://www.wubin.pro/t/10.html">mysql (4)</a>
                                                <a class="tag-1" href="http://www.wubin.pro/t/12.html">数据迁移 (1)</a>
                                                <a class="tag-3" href="http://www.wubin.pro/t/13.html">其他 (3)</a>
                                                <a class="tag-7" href="http://www.wubin.pro/t/14.html">composer (4)</a>
                                                <a class="tag-6" href="http://www.wubin.pro/t/15.html">laravel (1)</a>
                                            </div>
                </aside>
                <aside id="w-click" class="">
                    <div class="w-click-title">热门浏览</div>
                    <div class="w-click-hostlook">
                        <ul>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/1.html">
                                    <i class="fa fa-th-list"></i>thinkphp系列之--极验滑动验证码</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/5.html">
                                    <i class="fa fa-th-list"></i>thinkphp系列之--网站接入QQ登录</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/3.html">
                                    <i class="fa fa-th-list"></i>centos6.8配置lamp-php7运行环境</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/15.html">
                                    <i class="fa fa-th-list"></i>PhpStorm配置less自动编译css</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/10.html">
                                    <i class="fa fa-th-list"></i>利用PHPExcel实现Excel文件读取【读取excel】</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/7.html">
                                    <i class="fa fa-th-list"></i>利用css3实现鼠标移入下划线向两边展开效果</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/11.html">
                                    <i class="fa fa-th-list"></i>推荐开发工具--翻墙软件lantern</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/4.html">
                                    <i class="fa fa-th-list"></i>centos7.3配置php7运行环境</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/12.html">
                                    <i class="fa fa-th-list"></i>thinkphp系列之--网站接入微博登录</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/16.html">
                                    <i class="fa fa-th-list"></i>简单好用的 Linux/Windows 面板(一键创建网站、FTP、数据库)</a>
                            </li>
                                                    </ul>
                    </div>
                </aside>
                <aside id="w-see" class="">
                    <div class="w-see-title">最新文章</div>
                    <div class="w-see-hostlook">
                        <ul>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/37.html"><i class="fa fa-th-list"></i>三栏纵向个人博客模板(提供多页面下载)</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/35.html"><i class="fa fa-th-list"></i>mac忘记Mysql密码解决方法</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/34.html"><i class="fa fa-th-list"></i>thinkphp5系列之模型验证</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/33.html"><i class="fa fa-th-list"></i>YARN, 一款更优秀的javascript包管理(快速、可靠、安全的依赖管理)</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/32.html"><i class="fa fa-th-list"></i>composer上提交自己的项目</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/31.html"><i class="fa fa-th-list"></i>thinkphp5系列之整合小米登录</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/30.html"><i class="fa fa-th-list"></i>windows10安装nodejs出现：The error code is 2503.</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/29.html"><i class="fa fa-th-list"></i>you are  running composer with SSL/TLS protected disabled</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/28.html"><i class="fa fa-th-list"></i>mac 配置环境变量</a>
                            </li>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="http://www.wubin.pro/c/27.html"><i class="fa fa-th-list"></i>phpStudy的Apache配置虚拟主机</a>
                            </li>
                                                    </ul>
                    </div>
                </aside>
                <aside id="w-talk" class="">
                    <div class="w-see-title">最新评论</div>
                    <div>
                        <!-- 代码1：放在页面需要展示的位置  -->
                        <!-- 如果您配置过sourceid，建议在div标签中配置sourceid、cid(分类id)，没有请忽略  -->
                        <div id="cyReping" role="cylabs" data-use="reping"><div id="cyWrapper" class="cy-wrapper">
    <div class="reping-header hide" style="background-color:"><span style="color:">精彩评论</span></div>
    <ul class="reping-list">
                <li class="list-item">
            <div class="reping-avatar   "><img width="50px" height="50px" src="http://0d077ef9e74d8.cdn.sohucs.com/d7485dc5caa697a6be29a07ab117537f_official_1497937721567_JPG" title="thinkphp5系列之数据库迁移工具(轻松的修改跟共享数据库结构)"></div>
            <div class=" contavatar  ">
                <span class="reping-nickname">我是超人</span>
                <span class="reping-content">跟laravel比是没那么好用，你说的那个时间：https://www.kancloud.cn/manual/thinkphp5/138668，肯定是你眼睛没我打^_^</span>
                <span class="reping-title"><a href="http://www.wubin.pro/c/18.html" target="_blank" title="thinkphp5系列之数据库迁移工具(轻松的修改跟共享数据库结构)">评:thinkphp5系列之数据库迁移工具(轻松的修改跟共享数据库结构)</a></span>
            </div>
        </li>
                <li class="list-item">
            <div class="reping-avatar   "><img width="50px" height="50px" src="http://sucimg.itc.cn/avatarimg/849952256_1501163910079_c55" title="thinkphp5系列之数据库迁移工具(轻松的修改跟共享数据库结构)"></div>
            <div class=" contavatar  ">
                <span class="reping-nickname">耕夫</span>
                <span class="reping-content">thinkphp中的make:model没有-m参数
php think make:model test -m
在生成模型时,不能产生迁移文件,对用过laravel的有点小小不方便.

另外
p...</span>
                <span class="reping-title"><a href="http://www.wubin.pro/c/18.html" target="_blank" title="thinkphp5系列之数据库迁移工具(轻松的修改跟共享数据库结构)">评:thinkphp5系列之数据库迁移工具(轻松的修改跟共享数据库结构)</a></span>
            </div>
        </li>
                <li class="list-item">
            <div class="reping-avatar   "><img width="50px" height="50px" src="http://sucimg.itc.cn/avatarimg/819761522_1497926460030_c55" title="thinkphp5系列之数据库迁移工具(轻松的修改跟共享数据库结构)"></div>
            <div class=" contavatar  ">
                <span class="reping-nickname">张磊</span>
                <span class="reping-content">博主，你有凑字数的嫌疑啊~~~~
是不是可以写一个composer包，改造一下这个数据迁移，这个比较难用！</span>
                <span class="reping-title"><a href="http://www.wubin.pro/c/18.html" target="_blank" title="thinkphp5系列之数据库迁移工具(轻松的修改跟共享数据库结构)">评:thinkphp5系列之数据库迁移工具(轻松的修改跟共享数据库结构)</a></span>
            </div>
        </li>
                <li class="list-item">
            <div class="reping-avatar   "><img width="50px" height="50px" src="http://0d077ef9e74d8.cdn.sohucs.com/d7485dc5caa697a6be29a07ab117537f_official_1497937721567_JPG" title="thinkphp系列之QQ登录"></div>
            <div class=" contavatar  ">
                <span class="reping-nickname">我是超人</span>
                <span class="reping-content">骚年，http://www.wubin.pro/c/12.html，继续审核吧...</span>
                <span class="reping-title"><a href="http://www.wubin.pro/c/5.html" target="_blank" title="thinkphp系列之QQ登录">评:thinkphp系列之QQ登录</a></span>
            </div>
        </li>
                <li class="list-item">
            <div class="reping-avatar   "><img width="50px" height="50px" src="http://sucimg.itc.cn/avatarimg/819761522_1497926460030_c55" title="thinkphp系列之QQ登录"></div>
            <div class=" contavatar  ">
                <span class="reping-nickname">张磊</span>
                <span class="reping-content">时间上你欺骗了我，还有就是我长的不帅，没有通过。</span>
                <span class="reping-title"><a href="http://www.wubin.pro/c/5.html" target="_blank" title="thinkphp系列之QQ登录">评:thinkphp系列之QQ登录</a></span>
            </div>
        </li>
                <li class="list-item">
            <div class="reping-avatar   "><img width="50px" height="50px" src="http://0d077ef9e74d8.cdn.sohucs.com/d7485dc5caa697a6be29a07ab117537f_official_1497937721567_JPG" title="thinkphp系列之QQ登录"></div>
            <div class=" contavatar  ">
                <span class="reping-nickname">我是超人</span>
                <span class="reping-content">敢为这我小伙，有何问题呢</span>
                <span class="reping-title"><a href="http://www.wubin.pro/c/5.html" target="_blank" title="thinkphp系列之QQ登录">评:thinkphp系列之QQ登录</a></span>
            </div>
        </li>
                <li class="list-item">
            <div class="reping-avatar   "><img width="50px" height="50px" src="http://sucimg.itc.cn/avatarimg/819761522_1497926460030_c55" title="thinkphp系列之QQ登录"></div>
            <div class=" contavatar  ">
                <span class="reping-nickname">张磊</span>
                <span class="reping-content">有问题啊
</span>
                <span class="reping-title"><a href="http://www.wubin.pro/c/5.html" target="_blank" title="thinkphp系列之QQ登录">评:thinkphp系列之QQ登录</a></span>
            </div>
        </li>
                <li class="list-item">
            <div class="reping-avatar   "><img width="50px" height="50px" src="http://sucimg.itc.cn/avatarimg/317238628_1450065469628_c55" title="thinkphp系列之QQ登录"></div>
            <div class=" contavatar  ">
                <span class="reping-nickname">超人</span>
                <span class="reping-content">沙发~沙发~@#%……&amp;</span>
                <span class="reping-title"><a href="http://www.wubin.pro/c/5.html" target="_blank" title="thinkphp系列之QQ登录">评:thinkphp系列之QQ登录</a></span>
            </div>
        </li>
        </ul>
</div></div>
                        <!-- 代码2：用来读取评论框配置，此代码需放置在代码1之后。 -->
                        <!-- 如果当前页面有评论框，代码2请勿放置在评论框代码之前。 -->
                        <!-- 如果页面同时使用多个实验室项目，以下代码只需要引入一次，只配置上面的div标签即可 -->
                        <script type="text/javascript" charset="utf-8" src="https://changyan.itc.cn/js/lib/jquery.js"></script>
                        <script type="text/javascript" charset="utf-8" src="https://changyan.sohu.com/js/changyan.labs.https.js?appid=cyt3Vvzmt"></script>
                    </div>


                </aside>
                <aside id="w-link" class="">
                    <div class="w-see-title">友情链接</div>
                    <ul class="w-links">
                                                <li><a style="text-decoration: none" href="http://www.houdunwang.com/" target="_blank">北京php培训</a></li>
                                                <li><a style="text-decoration: none" href="http://www.nickblog.cn/" target="_blank">Nick's Blog</a></li>
                                                <li><a style="text-decoration: none" href="http://www.sunqizheng.com/" target="_blank">孙琪峥博客</a></li>
                                                <li><a style="text-decoration: none" href="http://bbs.houdunwang.com/" target="_blank">php论坛</a></li>
                                                <li><a style="text-decoration: none" href="http://www.numberer.net/" target="_blank">第二导航网</a></li>
                                                <li><a style="text-decoration: none" href="http://lizongyang.cn/" target="_blank">李宗洋博客</a></li>
                                            </ul>
                </aside>
            </div>
        </div>
        <script>
            $(function(){
                $('.loading').animate({'width':'70%'},50) ;
            })
        </script>
        <footer class="footer">
    <p>
        Copyright© 2017 <?php echo v('webconfig.webname')?><a ><?php echo v('webconfig.pic')?></a>. 林然 版权所有



</p>
</footer>
    </div>
<script>
    $(function(){
        $('.loading').animate({'width':'100%'},50);
    })
    $(document).ready(function(){
        $('.loading').fadeOut();
    });
</script>

<script src="http://www.wubin.pro/static/prism/prism.min.js"></script>
<script src="http://www.wubin.pro/static/index/js/index.js"></script>
<script src="http://www.wubin.pro/static/index/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<a href="http://www.wubin.pro/l/4.html#0" class="cd-top cd-is-visible cd-fade-out">Top</a>
<!--复制黏贴提示框插件-->
<script src="http://www.wubin.pro/static/sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" href="http://www.wubin.pro/static/sweetalert/sweetalert.css">
<script>document.body.oncopy = function() {swal("复制成功！", "若要转载请务必保留原文链接，申明来源，谢谢合作！","success");};</script>

</body></html>