<extend file='resource/admin/layout/article.php'/>
<block name="content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">栏目</h3>
        </div>
        <div class="panel-body">
            <ul class="nav nav-tabs" role="tablist">
                <li><a href="{{u('lists')}}">列表</a></li>
                <li class="active"><a href="{{u('store')}}">添加</a></li>
            </ul>
            <form action="" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">名称：</label>
                    <div class="col-sm-10">
                        <input type="text" name="catname" id="inputID" class="form-control" value="{{$model['catname']}}" title=""
                            />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">所属栏目：</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="pid">
                            <option value="">顶级栏目</option>
                            <foreach from="$categoryData" value="$v">
                                <option value="{{$v['id']}}" {{$model['pid']==$v['id']?'selected':''}}>{{$v['catname']}}</option>
                            </foreach>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">描述：</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="description" cols="30" rows="5">{{$model['description']}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">外部链接：</label>
                    <div class="col-sm-10">
                        <input type="text" name="linkurl" id="inputID" class="form-control" value="{{$model['linkurl']}}" title=""
                              />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">排序:</label>
                    <div class="col-sm-10">
                        <input type="text" name="orderby" id="inputID" class="form-control" value="{{$model['orderby']}}" title=""
                              />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">预览图：</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" name="thumb" readonly="" value="{{$model['thumb']}}">
                            <div class="input-group-btn">
                                <button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
                            </div>
                        </div>
                        <div class="input-group" style="margin-top:5px;">
                            <img src="{{$model['thumb'] ? $model['thumb'] : 'resource/images/nopic.jpg'}}" class="img-responsive img-thumbnail" width="150">
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
                                util.image(function (images) {          //上传成功的图片，数组类型

                                    $("[name='thumb']").val(images[0]);
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
                    <label for="inputID" class="col-sm-2 control-label">是否为封面栏目:</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="cover" value="1" {{$model['cover']?'checked':''}} />
                            是
                        </label>
                        <label>
                            <input type="radio" name="cover" value="0" {{$model['cover']?'':'checked'}} />
                            否
                        </label>
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