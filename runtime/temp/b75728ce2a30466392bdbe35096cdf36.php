<?php /*a:1:{s:60:"D:\phpStudy\WWW\blog\application\admin\view\login\index.html";i:1541601956;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>登入 - layuiAdmin</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/static/index/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/static/index/layui/css/admin.css" media="all">
    <link rel="stylesheet" href="/static/index/layui/css/login.css" media="all">
</head>
<body>
<form class="layui-form" action="">
    <input type="hidden" name="type" value="<?php echo isset($type) ? htmlentities($type) : ''; ?>">
    <div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;">
        <div class="layadmin-user-login-main">
            <div class="layadmin-user-login-box layadmin-user-login-header">
                <h2>tpblog</h2>
                <p>layui 官方出品的单页面后台管理模板系统</p>
            </div>
            <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
                <div class="layui-form-item">
                    <label class="layadmin-user-login-icon layui-icon layui-icon-username" for="LAY-user-login-username"></label>
                    <input type="text" name="user_name" id="LAY-user-login-username" lay-verify="required" placeholder="用户名" class="layui-input">
                </div>
                <div class="layui-form-item">
                    <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-password"></label>
                    <input type="password" name="password" id="LAY-user-login-password" lay-verify="required" placeholder="密码" class="layui-input">
                </div>
                <div class="layui-form-item">
                    <div class="layui-row">
                        <div class="layui-col-xs7">
                            <label class="layadmin-user-login-icon layui-icon layui-icon-vercode" for="LAY-user-login-vercode"></label>
                            <input type="text" name="vercode" id="LAY-user-login-vercode" lay-verify="required" placeholder="图形验证码" class="layui-input">
                        </div>
                        <div class="layui-col-xs5">
                            <div style="margin-left: 10px;">
                                <img src="https://www.oschina.net/action/user/captcha" class="layadmin-user-login-codeimg" id="LAY-user-get-vercode">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layui-form-item" style="margin-bottom: 20px;">
                    <input type="checkbox" name="remember" lay-skin="primary" title="记住密码"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>记住密码</span><i class="layui-icon layui-icon-ok"></i></div>
                    <a href="forget.html" class="layadmin-user-jump-change layadmin-link" style="margin-top: 7px;">忘记密码？</a>
                </div>
                <div class="layui-form-item">
                    <button class="layui-btn layui-btn-fluid" lay-submit="" lay-filter="LAY-user-login-submit">登 入</button>
                </div>
                <div class="layui-trans layui-form-item layadmin-user-login-other">
                    <label>社交账号登入</label>
                    <a href="javascript:;"><i class="layui-icon layui-icon-login-qq"></i></a>
                    <a href="javascript:;"><i class="layui-icon layui-icon-login-wechat"></i></a>
                    <a href="javascript:;"><i class="layui-icon layui-icon-login-weibo"></i></a>
                    <a href="reg.html" class="layadmin-user-jump-change layadmin-link">注册帐号</a>
                </div>
            </div>
        </div>

        <div class="layui-trans layadmin-user-login-footer">
            <p>© 2018 <a href="http://www.layui.com/" target="_blank">layui.com</a></p>
            <p>
                <span><a href="http://www.layui.com/admin/#get" target="_blank">获取授权</a></span>
                <span><a href="http://www.layui.com/admin/pro/" target="_blank">在线演示</a></span>
                <span><a href="http://www.layui.com/admin/" target="_blank">前往官网</a></span>
            </p>
        </div>
    </div>
</form>

        <!--<input type="hidden" name="type" value="<?php echo isset($type) ? htmlentities($type) : ''; ?>">-->
        <!--<div class="layui-form-item">-->
            <!--<div class="layui-inline">-->
                <!--<label class="layui-form-label">用户名</label>-->
                <!--<div class="layui-input-inline">-->
                    <!--<input type="tel" name="user_name"  autocomplete="off" class="layui-input">-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="layui-inline">-->
                <!--<label class="layui-form-label">密码</label>-->
                <!--<div class="layui-input-inline">-->
                    <!--<input type="password" name="password"  autocomplete="off" class="layui-input">-->
                <!--</div>-->
            <!--</div>-->
            <!--<?php if(!(empty($type) || (($type instanceof \think\Collection || $type instanceof \think\Paginator ) && $type->isEmpty()))): ?>-->
            <!--<div class="layui-inline">-->
                <!--<label class="layui-form-label">邮箱</label>-->
                <!--<div class="layui-input-inline">-->
                    <!--<input type="text" name="email" lay-verify="email" autocomplete="off" class="layui-input">-->
                <!--</div>-->
            <!--</div>-->
            <!--<?php endif; ?>-->
        <!--</div>-->
        <!--<div class="layui-form-item">-->
            <!--<div class="layui-input-block">-->
                <!--<button class="layui-btn" lay-submit="" lay-filter="demo1"><?php echo !empty($type) ? '注册' : '登录'; ?></button>-->
                <!--<button type="button" class="layui-btn layui-btn-primary register"><?php echo !empty($type) ? '登录' : '注册'; ?></button>-->
            <!--</div>-->
        <!--</div>-->


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
</body>
</html>









