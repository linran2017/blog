<extend file='resource/admin/layout/system.php'/>
<block name="content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">网站配置</h3>
        </div>
        <div class="panel-body">
            <form action="" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">网站名称:</label>
                    <div class="col-sm-10">
                        <input type="text" name="webname" id="inputID" class="form-control" value="{{$content['webname']}}" title=""
                               required="required">
                        <span class="help-block">name名为webname,{ {v('webconfig.webname')} }</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">网站描述:</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" id="inputID" class="form-control" value="{{$content['description']}}" title=""
                               required="required">
                        <span class="help-block">name名为description,{ {v('webconfig.description')} }</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">网站关键字:</label>
                    <div class="col-sm-10">
                        <input type="text" name="keywords" id="inputID" class="form-control" value="{{$content['keywords']}}" title=""
                               required="required">
                        <span class="help-block">name名为keywords,{ {v('webconfig.keywords')} }</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">备案号:</label>
                    <div class="col-sm-10">
                        <input type="text" name="icp" id="inputID" class="form-control" value="{{$content['icp']}}" title=""
                               required="required">
                        <span class="help-block">name名为icp,{ {v('webconfig.icp')} }</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">客服电话:</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone" id="inputID" class="form-control" value="{{$content['phone']}}" title=""
                               required="required">
                        <span class="help-block">name名为phone,{ {v('webconfig.phone')} }</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">分页条数:</label>
                    <div class="col-sm-10">
                        <input type="text" name="rows" id="inputID" class="form-control" value="{{$content['rows']}}" title=""
                               required="required">
                        <span class="help-block">name名为rows,{ {v('webconfig.rows')} }</span>
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