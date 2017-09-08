<extend file='resource/admin/layout/system.php'/>
<block name="content">
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>备份中....</strong> {{$result['message']}}
    </div>
    <script>
        setTimeout(function () {
            location.href = '{{$_SERVER['REQUEST_URI']}}';
        }, 100);
    </script>
</block>