<meta name="csrf-token" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link href="/node_modules/hdjs/css/bootstrap.min.css" rel="stylesheet">
<link href="/node_modules/hdjs/css/font-awesome.min.css" rel="stylesheet">
<script>
    //HDJS组件需要的配置
    hdjs = {
        'base': '/node_modules/hdjs',
        'uploader': '?s=component/upload/uploader&siteid=11',
        'filesLists': '?s=component/upload/filesLists&siteid=11',
        'removeImage': '?s=component/upload/removeImage&siteid=11',
        'ossSign': '?s=component/oss/sign&siteid=11',
    };
    window.system = {
        attachment: "/attachment",
        root: "",
        url: "/?s=site/entry/home&siteid=11",
        siteid: "11",
        module: "",
        //用于上传等组件使用标识当前是后台用户
        user_type: 'user'
    }
</script>

<script src="/node_modules/hdjs/app/util.js"></script>
<script src="/node_modules/hdjs/require.js"></script>
<script src="/node_modules/hdjs/config.js"></script>
<script src="/resource/admin/js/hdcms.js"></script>
<link href="/resource/admin/css/hdcms.css" rel="stylesheet">
<script>
    require(['jquery'], function ($) {
        //为异步请求设置CSRF令牌
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    })
</script>
</head>
<body class="site">
<div class="container-fluid admin-top">
    <!--导航-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="/">
                            <i class="fa fa-reply-all"></i> 返回首页
                        </a>
                    </li>
                    <?php
                    $s=$_GET['s'];
                    $arr=explode('/',$s);
                    ?>

                    <li class="top_menu {{$arr[0]=='admin'?'active':''}}">
                        <a href="{{u('admin/category/lists')}}" class="quickMenuLink">
                            <i class="'fa-w fa fa-comments-o"></i>文章管理                        </a>
                    </li>
                    <li class="top_menu {{$arr[0]=='wechat'?'active':''}}">
                        <a href="{{u('wechat/entry/setting')}}" class="quickMenuLink">
                            <i class="'fa-w fa fa-wechat"></i> 微信功能                       </a>
                    </li>
                    <li class="top_menu {{$arr[0]=='system'?'active':''}}">
                        <a href="{{u('system/config/entry')}}" class="quickMenuLink">
                            <i class="'fa-w fa fa-cog"></i> 系统管理                     </a>
                    </li>
                    <li class="top_menu {{$arr[0]=='modules'?'active':''}}">
                        <a href="{{u('modules/modules/lists')}}" class="quickMenuLink">
                            <i class="'fa-w fa fa-cube"></i> 扩展模块                     </a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="fa fa-w fa-user"></i>
                            {{Session::get('user.username')}}                          <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="?s=system/user/changePassword">我的帐号</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="?s=admin/login/logout">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--导航end-->
</div>