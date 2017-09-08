<extend file='resource/admin/layout/article.php'/>
<block name="content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">文章</h3>
        </div>
        <div class="panel-body">
          <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="{{u('lists')}}">列表</a></li>
              <li><a href="{{u('recycle')}}">回收站</a></li>
              <li><a href="{{u('store')}}">添加</a></li>
          </ul>
                <table class="table table-hover">
                <thead>
                <tr>
                    <th width="30">ID</th>
                    <th width="350">标题</th>
                    <th>所属栏目</th>
                    <th>微信关键词</th>
                    <th width="200">操作</th>
                </tr>
                </thead>
                <tbody>
                <foreach from="$data" value="$v">
                    <tr>
                        <td>{{$v['aid']}}</td>
                        <td>{{$v['title']}}</td>
                        <td>{{$v->category()->catname}}</td>
                        <td>{{$v['wechat_keyword']}}</td>
                        <td>
                            <a href="a_{{$v['aid']}}.html" class="btn btn-success">预览</a>
                            <a href="{{u('store',['aid'=>$v['aid']])}}" class="btn btn-primary">编辑</a>
                            <a href="javascript:del({{$v['aid']}})" class="btn btn-danger">删除</a>
                        </td>
                    </tr>
                </foreach>
                </tbody>
            </table>
            <script>
                function del(aid) {
                    if(confirm('确定要删除吗')){
                        location.href='{{u('delete')}}&aid='+aid;
                    }
                }
            </script>
            {{$data->links()}}
        </div>
    </div>
</block>
