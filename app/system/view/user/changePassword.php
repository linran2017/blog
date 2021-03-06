<extend file='resource/admin/layout/system.php'/>
<block name="content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">修改密码</h3>
        </div>
        <div class="panel-body">
            <form action="" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">旧密码:</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" id="inputID" class="form-control" value="" title=""
                               required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">新密码:</label>
                    <div class="col-sm-10">
                        <input type="password" name="newpassword" id="inputID" class="form-control" value="" title=""
                               required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">确认密码:</label>
                    <div class="col-sm-10">
                        <input type="password" name="confirmpassword" id="inputID" class="form-control" value="" title=""
                               required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">修改密码</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</block>
