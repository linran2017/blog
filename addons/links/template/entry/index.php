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
               <li class="active"><a href="{{url('links.entry.index')}}">列表</a></li>
               <li><a href="{{url('links.entry.store')}}">添加</a></li>
           </ul>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>名称</th>
                    <th>网址</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <foreach from="$data" value="$v">
                <tr>
                    <td>{{$v['name']}}</td>
                    <td>{{$v['url']}}</td>
                    <td>
                        <a class="btn btn-primary" href="javascript:store({{$v['id']}});">编辑</a>
                        <a class="btn btn-danger" href="javascript:remove({{$v['id']}});">删除</a>
                    </td>
                </tr>
                </foreach>
                </tbody>
            </table>
            <script>
                function store(id) {
                    location.href='{{url("links.entry.store")}}&id='+id;
                }

                function remove(id) {
                    require(['util'], function (util) {
                        util.confirm('确定删除吗？',function () {
                            location.href="/index.php?m=links&a=controller/entry/remove&id="+id;
                        })
                    })
                }
            </script>
        </div>
    </div>
</block>