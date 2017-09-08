<extend file='resource/admin/layout/wechat.php'/>
<block name="content">
    <form action="" method="post" class="form-horizontal" role="form">
    <div class="panel panel-default">

        <div class="panel-heading">
            <h3 class="panel-title">微信配置</h3>
        </div>
        <div class="panel-body">

                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">公众号名称:</label>
                    <div class="col-sm-10">
                        <input type="text" name="webname" id="inputID" class="form-control" value="{{$content['webname']}}" title=""
                               required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">微信账号:</label>
                    <div class="col-sm-10">
                        <input type="text" name="account" id="inputID" class="form-control" value="{{$content['account']}}" title=""
                               required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">appid:</label>
                    <div class="col-sm-10">
                        <input type="text" name="appid" id="inputID" class="form-control" value="{{$content['appid']}}" title=""
                               required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">appsecret:</label>
                    <div class="col-sm-10">
                        <input type="text" name="appsecret" id="inputID" class="form-control" value="{{$content['appsecret']}}" title=""
                               required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">token:</label>
                    <div class="col-sm-10">
                        <input type="text" name="token" id="inputID" class="form-control" value="{{$content['token'] ?: $token}}" title=""
                               required="required">
                        <span class="help-block">用于验证服务器的token,3-32为的随机字符串</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">encodingaeskey:</label>
                    <div class="col-sm-10">
                        <input type="text" name="encodingaeskey" id="inputID" class="form-control" value="{{$content['encodingaeskey'] ?: $aesKey}}" title=""
                               required="required">
                        <span class="help-block">用于消息加密的随机34位随机字符串</span>
                    </div>
                </div>

        </div>
    </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">默认回复</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">关注回复:</label>
                    <div class="col-sm-10">
                        <input type="text" name="subscribe_reply" id="inputID" class="form-control" value="{{$content['subscribe_reply']}}" title=""
                               required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">回复消息:</label>
                    <div class="col-sm-10">
                        <input type="text" name="default_reply" id="inputID" class="form-control" value="{{$content['default_reply']}}" title=""
                               required="required">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <button type="submit" class="btn btn-primary">保存成功</button>
        </div>
    </div>
    </form>
</block>