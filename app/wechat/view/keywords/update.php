<extend file='resource/admin/layout/wechat.php'/>
<block name="content">
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="{{u('lists')}}" >列表</a></li>
        <li><a href="{{u('store')}}" >新增</a></li>
    </ul>
    <form action="" method="post" class="form-horizontal" role="form">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">关键词</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">关键词:</label>
                    <div class="col-sm-10">
                        <input type="text" name="keywords" id="inputID" class="form-control" value="{{$model['content']}}" title=""
                               required="required">
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">回复内容</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="inputID" class="col-sm-2 control-label">回复内容:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="5" name="content">{{$model->content()->content}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">保存</button>
            </div>
        </div>
    </form>
</block>