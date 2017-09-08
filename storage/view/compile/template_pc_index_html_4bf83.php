<!DOCTYPE html>
<!-- saved from url=(0021)http://www.wubin.pro/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="http://push.zhanzhang.baidu.com/push.js"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://hm.baidu.com/hm.js?a4535105572471f305ae4fac98e7be00"></script>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <meta name="Keywords" content="php、前端、html、js、博客、php博客、thinkphp、技术博客、武斌博客、武斌">
    <meta name="description" content="武斌php博客,个人技术博客,php技术分享、web前端分享">
    <link rel="stylesheet" href="http://www.wubin.pro/static/index/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://www.wubin.pro/static/index/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://www.wubin.pro/static/index/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="http://www.wubin.pro/static/index/css/index.css">
    <script src="http://www.wubin.pro/static/index/js/jquery.min.js"></script>
    <!--百度验证-->
    <meta name="baidu-site-verification" content="hyywvAl2zC">

<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.8/clipboard.min.js"></script><link rel="stylesheet" type="text/css" href="http://changyan.itc.cn/css/??plugin/reping.css"></head>
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
                </l
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
                
<?php
if(0){
$where=[
['category_id',0],
['isrecycle',0]
];
    $arcData=\system\model\Article::where($where)->limit(10000)->get();
}else{
    $arcData=\system\model\Article::limit(10000)->get();
}
$arcData=$arcData?$arcData->toArray():[];
foreach ($arcData as $v):
$v['url']='a_'.$v['aid'].'.html';
?>

<article>
    <h3 class="col-xs-12 col-md-12 col-lg-12" style="font-size: 18px">
        <a style="text-decoration: none;" href="http://www.wubin.pro/c/37.html"><?php echo $v['title']?></a>
    </h3>
    <div class="col-xs-12 col-md-12 col-lg-12 w-date">
                    <span class="w-posted-on col-xs-5 col-md-2 col-lg-3">
                        <i class="fa fa-calendar"></i>
                        <span><time datetime="2017/08/24 14:07:35"><?php echo $v['created_at']?></time></span>
                    </span>
        <span class="col-xs-5 col-md-2 col-lg-3">
                        <span>by</span>
                        <i class="fa fa-user"></i>
                        <span><?php echo $v['author']?></span>
                    </span>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-12 w-body">
        <div class="col-lg-3 col-sm-4 col-md-3  hidden-xs">
            <div class="w-thumb">
                <a href="<?php echo $v['url']?>" class="">
                    <img src="<?php echo $v['thumb']?>">
                </a>
            </div>
        </div>
        <div class="col-lg-9 col-xs-12 col-sm-8  col-md-9  w-body-content">
            <?php echo $v['description']?>
        </div>
        <p class="pull-right hidden-xs">
            <a href="<?php echo $v['url']?>" class="btn btn-primary w-read">
                详细信息&gt;&gt;
            </a>
        </p>
    </div>
    <footer class="col-xs-12 col-md-12 col-lg-12 w-date">
        <i class="glyphicon glyphicon-tags"></i>
        <span>关键词：</span>
                <a> <?php echo $v['keywords']?></a>
    </footer>
</article>

<?php
endforeach;
?>


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
                <aside id="w-click" class="">
                    <div class="w-click-title">热门浏览</div>
                    <div class="w-click-hostlook">
                        <ul>
                            <?php if(is_array($aData) || is_object($aData)){foreach ($aData as $v){?>
                                                        <li class="list-item" style="width: 90%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                <a style="text-decoration: none" href="/a_<?php echo $v['aid']?>.html">
                                    <i class="fa fa-th-list"></i><?php echo $v['title']?></a>
                            </li>
                            <?php }}?>
                                                    </ul>
                    </div>
                </aside>
                <aside id="w-link" class="">
                    <div class="w-see-title">友情链接</div>
                    <ul class="w-links">
                        <?php
$data=\addons\links\model\Links::get();
$data=$data?$data->toArray():[];
foreach($data as $v):
?>

                        <li><a style="text-decoration: none" href="http://<?php echo $v['url']?>" target="_blank"><?php echo $v['name']?></a></li>
                        
<?php
endforeach;
?>
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
<a href="http://www.wubin.pro/#0" class="cd-top">Top</a>
<!--复制黏贴提示框插件-->
<script src="http://www.wubin.pro/static/sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" href="http://www.wubin.pro/static/sweetalert/sweetalert.css">
<script>document.body.oncopy = function() {swal("复制成功！", "若要转载请务必保留原文链接，申明来源，谢谢合作！","success");};</script>

</body></html>