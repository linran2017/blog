
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