<extend file='resource/admin/layout/modules.php'/>
<block name="business">
    <div class="panel-heading">
        <h4 class="panel-title">业务功能</h4>
        <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
            <i class="fa fa-chevron-circle-down"></i>
        </a>
    </div>
    <ul class="list-group menus">
        <li class="list-group-item" id="3">

            <a href="?m=links&a=controller/entry/index"
               class="quickMenuLink">友链列表</a>
        </li>
        <li class="list-group-item" id="3">

            <a href="?m=links&a=controller/entry/store"
               class="quickMenuLink">友链添加</a>
        </li>
    </ul>

</block>
<block name="content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">友情链接</h3>
        </div>
        <div class="panel-body">
            <ul class="nav nav-tabs">
                <li><a href="{{url('links.entry.index')}}">列表</a></li>
                <li class="active"><a href="{{url('links.entry.store')}}">添加</a></li>
            </ul>
            <form action="" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">网站名称</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" id="inputID" class="form-control" value="{{$model['name']}}" title=""
                               required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">链接网址</label>
                    <div class="col-sm-10">
                        <input type="text" name="url" id="inputID" class="form-control" value="{{$model['url']}}" title=""
                               required="required">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</block>