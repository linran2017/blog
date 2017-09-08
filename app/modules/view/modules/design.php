<extend file='resource/admin/layout/modules.php'/>
<block name="content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">模块</h3>
        </div>
        <div class="panel-body">
            <ul class="nav nav-tabs" role="tablist">
                <li><a href="{{u('lists')}}">列表</a></li>
                <li class="active"><a href="{{u('design')}}">设计</a></li>
            </ul>
            <form action="" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">模块名称:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" id="inputID" class="form-control" value="" title=""
                               required="required">
                        <span class="help-block">模块名称只能为英文和数字字符，因为它将来是文件夹的名字</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">标题:</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" id="inputID" class="form-control" value="" title=""
                               required="required">
                        <span class="help-block">模块简单的中文标题描述</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">描述:</label>
                    <div class="col-sm-10">
                       <textarea name="resume" class="form-control"></textarea>
                        <span class="help-block">模块的描述</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">作者:</label>
                    <div class="col-sm-10">
                        <input type="text" name="author" id="inputID" class="form-control" value="" title=""
                               required="required">
                        <span class="help-block">模块设计者</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">预览图:</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" name="preview" readonly="" value="">
                            <div class="input-group-btn">
                                <button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
                            </div>
                        </div>
                        <div class="input-group" style="margin-top:5px;">
                            <img src="resource/images/nopic.jpg" class="img-responsive img-thumbnail" width="150">
                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                        </div>
                    </div>
                    <script>
                        //上传图片
                        function upImage(obj) {
                            require(['util'], function (util) {
                                options = {
                                    multiple: false,//是否允许多图上传
                                    //data是向后台服务器提交的POST数据
                                    data:{name:'后盾人',year:2099},
                                };
                                util.image(function (images) {
                                    //上传成功的图片，数组类型
                                    $("[name='preview']").val(images[0]);
                                    $(".img-thumbnail").attr('src', images[0]);
                                }, options)
                            });
                        }

                        //移除图片
                        function removeImg(obj) {
                            $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
                            $(obj).parent().prev().find('input').val('');
                        }
                    </script>
                    </div>
        <div class="form-group">
            <label for="inputID" class="col-sm-2 control-label">微信处理:</label>
            <div class="radio">
                <label>
                    <input type="radio" name="is_wechat" value="1" checked />
                    是
                </label>
                <label>
                    <input type="radio" name="is_wechat" value="0" />
                    否
                </label>
            </div>
        </div>
        <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">设计</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</block>
