<extend file='resource/admin/layout/wechat.php'/>
<block name="content">
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="{{u('lists')}}" >列表</a></li>
        <li><a href="{{u('store')}}" >新增</a></li>
    </ul>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>关键词</th>
            <th>回复内容</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <foreach from="$data" value="$v">
        <tr>
            <td>{{$v['content']}}</td>
            <td>{{$v->content()->content}}</td>
            <td>
                <a class="btn btn-primary" href="{{u('update',['id'=>$v['id']])}}">编辑</a>
                <a href="javascript:del({{$v['id']}});" class="btn btn-danger">删除</a>
            </td>
        </tr>
        </foreach>
        </tbody>
    </table>
    <script>
        function del(id) {
            require(['util'], function (util) {
                util.confirm('确定删除吗？',function () {
                    location.href="/index.php?s=wechat/keywords/remove&id="+id;
                })
            })
        }
    </script>
</block>