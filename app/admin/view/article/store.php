<extend file='resource/admin/layout/article.php'/>
<block name="content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">文章</h3>
        </div>
        <div class="panel-body">
            <ul class="nav nav-tabs" role="tablist">
                <li><a href="{{u('lists')}}">列表</a></li>
                <li><a href="{{u('recycle')}}">回收站</a></li>
                <li class="active"><a href="{{u('store')}}">添加</a></li>
            </ul>
            <form action="" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">标题：</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" id="inputID" class="form-control" value="{{$article['title']}}" title=""
                            />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">微信关键词:</label>
                    <div class="col-sm-10">
                        <input type="text" name="wechat_keyword" id="inputID" class="form-control" value="{{$article['wechat_keyword']}}" title=""
                              >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">点击数：</label>
                    <div class="col-sm-10">
                        <input type="text" name="click" id="inputID" class="form-control" value="{{$article['click']}}" title=""
                        />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">描述：</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" value="{{$article['description']}}" name="description" cols="30" rows="5">{{$article['description']}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">正文：</label>
                    <div class="col-sm-10">
                        <textarea id="container" name="content" style="height:300px;width:100%;">{{$article['content']}}</textarea>
                        <script>
                            util.ueditor('container', {hash:2,data:'hd'}, function (editor) {
                                //这是回调函数 editor是百度编辑器实例
                            });
                        </script>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">文章来源：</label>
                    <div class="col-sm-10">
                        <input type="text" name="source" id="inputID" class="form-control" value="{{$article['source']}}" title=""
                        />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">作者：</label>
                    <div class="col-sm-10">
                        <input type="text" name="author" id="inputID" class="form-control" value="{{$article['author']}}" title=""
                        />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">排序:</label>
                    <div class="col-sm-10">
                        <input type="text" name="orderby" id="inputID" class="form-control" value="{{$article['orderby']}}" title=""
                        />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">外部链接：</label>
                    <div class="col-sm-10">
                        <input type="text" name="linkurl" id="inputID" class="form-control" value="{{$article['linkurl']}}" title=""
                              />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">关键词：</label>
                    <div class="col-sm-10">
                        <input type="text" name="keywords" id="inputID" class="form-control" value="{{$article['keywords']}}" title=""
                        />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">是否推荐:</label>
                    <div class="radio">
                        <label>
                            <input name="iscommend" type="radio" value="1" {{$article['iscommend']==1?'checked':''}} />
                            是
                        </label>
                        <label>
                            <input name="iscommend" type="radio" value="0" {{$article['iscommend']==0?'checked':''}} />
                            否
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">是否热门:</label>
                    <div class="radio">
                        <label>
                            <input name="ishot" type="radio" value="1" {{$article['ishot']==1?'checked':''}} />
                            是
                        </label>
                        <label>
                            <input name="ishot" type="radio" value="0" {{$article['ishot']==0?'checked':''}} />
                            否
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">预览图：</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" name="thumb" readonly="" value="{{$article['t']}}">
                            <div class="input-group-btn">
                                <button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
                            </div>
                        </div>
                        <div class="input-group" style="margin-top:5px;">
                            <img src="{{$article['thumb']?:'resource/images/nopic.jpg'}}" class="img-responsive img-thumbnail" width="150">
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
                    <label for="inputID" class="col-sm-2 control-label">所属栏目：</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="category_id">
                            <foreach from="$categoryData" value="$v">
                                <option value="{{$v['id']}}" {{$article['category_id']==$v['id']?'selected':''}}>{{$v['_catname']}}</option>
                            </foreach>
                        </select>
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