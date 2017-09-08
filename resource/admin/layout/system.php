<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>后盾网 - HDCMS开源免费内容管理系统</title>
    <include file="resource/admin/layout/header.php"></include>
    <!--主体-->
    <div class="container-fluid admin_menu">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2 left-menu">
                <div class="search-menu">
                    <input class="form-control input-lg" type="text" placeholder="输入菜单名称可快速查找"
                           onkeyup="search(this)">
                </div>
                <!--扩展模块动作 start-->
                <div class="panel panel-default">
                    <!--系统菜单-->



                    <div class="panel-heading">
                        <h4 class="panel-title">系统管理</h4>
                        <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                            <i class="fa fa-chevron-circle-down"></i>
                        </a>
                    </div>
                    <ul class="list-group menus">
                        <li class="list-group-item" id="3">

                            <a href="{{u('system/config/entry')}}"
                               class="quickMenuLink">系统配置</a>
                        </li>
                    </ul>
                    <div class="panel-heading">
                        <h4 class="panel-title">备份还原</h4>
                        <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                            <i class="fa fa-chevron-circle-down"></i>
                        </a>
                    </div>
                    <ul class="list-group menus">
                        <li class="list-group-item" id="3">

                            <a href="{{u('system/backup/backups')}}"
                               class="quickMenuLink">网站备份</a>
                        </li>
                        <li class="list-group-item" id="30">
                            <a href="{{u('system/backup/lists')}}"
                               class="quickMenuLink"> 网站还原 </a>
                        </li>
                    </ul>
                    <div class="panel-heading">
                        <h4 class="panel-title">用户管理</h4>
                        <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                            <i class="fa fa-chevron-circle-down"></i>
                        </a>
                    </div>
                    <ul class="list-group menus">
                        <li class="list-group-item" id="30">
                            <a href="{{u('system/user/changePassword')}}"
                               class="quickMenuLink"> 修改密码 </a>
                        </li>
                    </ul>
                </div>


                <!----------返回模块列表 start------------>
                <!--模块列表-->
                <!--模块列表 end-->
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
                <blade name="content"/>
            </div>
        </div>
    </div>
    <div class="master-footer">
        <a href="">猎人训练</a>
        <a href="http://www.hdphp.com">开源框架</a>
        <a href="http://bbs.houdunwang.com">后盾论坛</a>
        <br>
        Powered by hdcms v2.0 © 2014-2019 www.hdcms.com runtime: 0.09</div>

    <script>
        require(['bootstrap']);
    </script>
    <!--右键菜单添加到快捷导航-->
    <div id="context-menu">
        <ul class="dropdown-menu" role="menu">
            <li><a tabindex="-1" href="#">添加到快捷菜单</a></li>
        </ul>
    </div>
    <!--右键菜单删除快捷导航-->
    <div id="context-menu-del">
        <ul class="dropdown-menu" role="menu">
            <li><a tabindex="-1" href="#">删除菜单</a></li>
        </ul>
    </div>
    <!--底部快捷菜单导航-->
    <script src="/resource/js/menu.js"></script>
    <script src="/resource/js/quick_navigate.js"></script>

    </body>
</html>

<style>
    table {
        table-layout: fixed;
    }
</style>