<extend file='resource/admin/layout/article.php'/>
<block name="content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">栏目</h3>
        </div>
        <div class="panel-body">
          <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="{{u('lists')}}">列表</a></li>
              <li><a href="{{u('store')}}">添加</a></li>
          </ul>
                <table class="table table-hover">
                <thead>
                <tr>
                    <th width="30">ID</th>
                    <th>名称</th>
                    <th>是否为封面</th>
                    <th width="200">操作</th>
                </tr>
                </thead>
                <tbody>
                <foreach from="$data" value="$v">
                    <tr>
                        <td>{{$v['id']}}</td>
                        <td>{{$v['_catname']}}</td>
                        <td>
                            <if value="$v['cover']">
                                <i style="color: green" class="fa fa-check-circle-o"></i>
                                <else/>
                                <i style="color: red" class="fa fa-times-circle-o"></i>
                            </if>
                        </td>
                        <td>
                            <a href="/{{$v['cover']?'cover':'c'}}_{{$v['id']}}.html" class="btn btn-success">预览</a>
                            <a href="{{u('store',['id'=>$v['id']])}}" class="btn btn-primary">编辑</a>
                            <a href="javascript:del({{$v['id']}});" class="btn btn-danger">删除</a>
                        </td>
                    </tr>
                </foreach>
                </tbody>
            </table>
            <script>
                function del(id) {
                   if (confirm('确定要删除吗?')){
                       location.href='{{u("remove")}}&id='+id;
                   }
                }
            </script>
        </div>
    </div>
</block>