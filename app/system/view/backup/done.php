<extend file='resource/admin/layout/system.php'/>
<block name="content">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>备份完毕！</strong> {{$result['message']}}
    </div>
</block>