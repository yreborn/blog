<?php /*a:1:{s:59:"D:\phpStudy\WWW\tp5\application\admin\view\login\index.html";i:1536636781;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form class="layui-form" action="">
        <input type="hidden" name="type" value="<?php echo isset($type) ? htmlentities($type) : ''; ?>">
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">用户名</label>
                <div class="layui-input-inline">
                    <input type="tel" name="user_name"  autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-inline">
                <label class="layui-form-label">密码</label>
                <div class="layui-input-inline">
                    <input type="password" name="password"  autocomplete="off" class="layui-input">
                </div>
            </div>
            <?php if(!(empty($type) || (($type instanceof \think\Collection || $type instanceof \think\Paginator ) && $type->isEmpty()))): ?>
            <div class="layui-inline">
                <label class="layui-form-label">邮箱</label>
                <div class="layui-input-inline">
                    <input type="text" name="email" lay-verify="email" autocomplete="off" class="layui-input">
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="demo1"><?php echo !empty($type) ? '注册' : '登录'; ?></button>
                <button type="button" class="layui-btn layui-btn-primary register"><?php echo !empty($type) ? '登录' : '注册'; ?></button>
            </div>
        </div>
    </form>
</body>
</html>
<script src="/static/index/layui/layui.js"></script>
<script>
    layui.use(['form'],function () {
        var form = layui.form
            ,$=layui.jquery;

        //登录
        form.on('submit(demo1)', function(data){
            var type = $("input[name='type']").val(),url= type==1?"<?php echo url('register'); ?>":"<?php echo url('isLogin'); ?>";
            $.ajax({
                url:url,
                data:data.field,
                type:'POST',
                success:function (data) {
                    console.log(data);
                    if(data.code == 200){
                        layer.msg(data.msg,{icon:6},function () {
                            window.location.href="<?php echo url('/admin/index'); ?>";
                        })
                    }else{
                        layer.msg(data.msg,{icon:5});
                    }
                },
                error:function () {
                    console.log(data.msg);
                    layer.msg(data.msg);
                }
            });
            return false;
        });

        //注册跳转
        $(document).off('click', ".register").on('click', ".register", function () {
            var type = $("input[name='type']").val(),url= type==1?"<?php echo url('index'); ?>":"<?php echo url('registerhtml'); ?>";
            window.location.href=url;
        });

    })
</script>












