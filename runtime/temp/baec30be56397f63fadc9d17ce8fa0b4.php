<?php /*a:1:{s:75:"D:\PhpStudy\PHPTutorial\WWW\blog\application\admin\view\login\register.html";i:1544346938;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>注册 - layuiAdmin</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/static/index/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/static/index/layui/css/admin.css" media="all">
    <link rel="stylesheet" href="/static/index/layui/css/login.css" media="all">
</head>
<body>
<form class="layui-form" action="">
    <div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;">
        <div class="layadmin-user-login-main">
            <div class="layadmin-user-login-box layadmin-user-login-header">
                <h2>layuiAdmin</h2>
                <p>layui 官方出品的单页面后台管理模板系统</p>
            </div>
            <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
                <div class="layui-form-item">
                    <label class="layadmin-user-login-icon layui-icon layui-icon-username" for="LAY-user-login-nickname"></label>
                    <input type="text" name="user_name" id="LAY-user-login-nickname" lay-verify="required" placeholder="昵称" class="layui-input">
                </div>
                <div class="layui-form-item">
                    <label class="layadmin-user-login-icon layui-icon layui-icon-cellphone" for="LAY-user-login-cellphone"></label>
                    <input type="text" name="email" id="LAY-user-login-cellphone" lay-verify="email" placeholder="邮箱" class="layui-input">
                </div>

                <div class="layui-form-item">
                    <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-password"></label>
                    <input type="password" name="password" id="LAY-user-login-password" lay-verify="pass" placeholder="密码" class="layui-input">
                </div>
                <div class="layui-form-item">
                    <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-repass"></label>
                    <input type="password" name="repass" id="LAY-user-login-repass" lay-verify="required" placeholder="确认密码" class="layui-input">
                </div>
                <div class="layui-form-item">
                    <div class="layui-row">
                        <div class="layui-col-xs7">
                            <label class="layadmin-user-login-icon layui-icon layui-icon-vercode" for="LAY-user-login-vercode"></label>
                            <input type="text" name="verify" id="LAY-user-login-vercode" lay-verify="required" placeholder="验证码" class="layui-input">
                        </div>
                        <div class="layui-col-xs5">
                            <div style="margin-left: 10px;">
                                <div><img src="<?php echo url('Login/verify'); ?>"  onclick="this.src=this.src+'?'" alt="captcha" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <input type="checkbox" name="agreement" lay-skin="primary" title="同意用户协议" checked=""><div class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin="primary"><span>同意用户协议</span><i class="layui-icon layui-icon-ok"></i></div>
                </div>
                <div class="layui-form-item">
                    <button class="layui-btn layui-btn-fluid" lay-submit="" lay-filter="LAY-user-reg-submit" >注 册</button>
                </div>
                <div class="layui-trans layui-form-item layadmin-user-login-other">
                    <label>社交账号注册</label>
                    <a href="javascript:;"><i class="layui-icon layui-icon-login-qq"></i></a>
                    <a href="javascript:;"><i class="layui-icon layui-icon-login-wechat"></i></a>
                    <a href="javascript:;"><i class="layui-icon layui-icon-login-weibo"></i></a>

                    <a href="<?php echo url('admin/login/index'); ?>" class="layadmin-user-jump-change layadmin-link layui-hide-xs">用已有帐号登入</a>
                    <a href="<?php echo url('admin/login/index'); ?>" class="layadmin-user-jump-change layadmin-link layui-hide-sm layui-show-xs-inline-block">登入</a>
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
<script src="/static/index/layui/layui.js"></script>
<script>
    layui.use(['form'], function(){
        var $ = layui.$
            ,form = layui.form;

        //登录
        form.on('submit(LAY-user-reg-submit)', function(data){
            var field = data.field;

            //确认密码
            if(field.password !== field.repass){
                 layer.msg('两次密码输入不一致');
                return false;
            }

            //是否同意用户协议
            if(!field.agreement){
                layer.msg('你必须同意用户协议才能注册');
                return false;
            }

            $.ajax({
                url:"<?php echo url('addregister'); ?>",
                data:field,
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
    })
</script>
</body>
</html>