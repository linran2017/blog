<extend file='resource/admin/layout/modules.php'/>
<block name="content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">模块</h3>
        </div>
        <div class="panel-body">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="{{u('lists')}}">列表</a></li>
                <li><a href="{{u('design')}}">设计</a></li>
            </ul>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>模块名称</th>
                    <th>标题</th>
                    <th>作者</th>
                    <th>预览图</th>
                    <th width="200">操作</th>
                </tr>
                </thead>
                <tbody>
                <foreach from="$data" value="$v">
                    <tr>
                          <td>{{$v['name']}}</td>
                          <td>{{$v['title']}}</td>
                          <td>{{$v['author']}}</td>
                          <td><img src="{{$v['preview']}}" width="80" /></td>
                          <td>
                              <if value="$v['is_install']">
                                  <a href="{{u('uninstall',['name'=>$v['name']])}}" class="btn btn-danger">卸载</a>
                                  <else/>
                                  <a href="{{u('install',['name'=>$v['name']])}}"  class="btn btn-primary">安装</a>
                              </if>


                          </td>
                    </tr>
                </foreach>
                </tbody>
            </table>
        </div>
    </div>
</block>
