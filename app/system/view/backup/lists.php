<extend file='resource/admin/layout/system.php'/>
<block name="content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">备份列表</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>目录</th>
                    <th>时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <foreach from="$dirs" value="$d">
                <tr>
                    <td>{{$d['path']}}</td>
                    <td>{{date('m-d H:i:s',$d['fileatime'])}}</td>
                    <td><a class="btn btn-success" href="{{u('recover',['dir'=>$d['path']])}}">还原</a></td>
                </tr>
                </foreach>
                </tbody>
            </table>
        </div>
    </div>
</block>