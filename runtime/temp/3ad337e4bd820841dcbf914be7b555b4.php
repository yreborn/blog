<?php /*a:7:{s:65:"D:\phpStudy\WWW\blog\application\admin\view\user\adduserhtml.html";i:1536669273;s:60:"D:\phpStudy\WWW\blog\application\admin\view\base\common.html";i:1531213751;s:60:"D:\phpStudy\WWW\blog\application\admin\view\public\head.html";i:1536308456;s:62:"D:\phpStudy\WWW\blog\application\admin\view\public\header.html";i:1536634034;s:60:"D:\phpStudy\WWW\blog\application\admin\view\public\side.html";i:1531469330;s:62:"D:\phpStudy\WWW\blog\application\admin\view\public\footer.html";i:1536308591;s:59:"D:\phpStudy\WWW\blog\application\admin\view\public\var.html";i:1531213677;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
<title>layui</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="/static/index/layui/css/layui.css"  media="all">
    <title>测试</title>
    



    
</head>
<body class="">
<div class="layui-layout layui-layout-admin">

    <div class="layui-header">
    <div class="layui-logo" ><a href="<?php echo url('Index/index'); ?>" style="color: #009688">layui 后台</a></div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
        <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li class="layui-nav-item"><a href="<?php echo url($vo['line']); ?>"><?php echo htmlentities($vo['name']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <ul class="layui-nav layui-layout-right">
        <li class="layui-nav-item">
            <a href="javascript:;">
                <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                <?php echo htmlentities($username); ?>
            </a>
            <dl class="layui-nav-child">
                <dd><a href="">基本资料</a></dd>
                <dd><a href="">安全设置</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item"><a href="<?php echo url('Login/loginOut'); ?>">退了</a></li>
    </ul>
</div>
    <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class="layui-nav layui-nav-tree"  lay-filter="test">
            <?php if(is_array($sideMenu) || $sideMenu instanceof \think\Collection || $sideMenu instanceof \think\Paginator): $i = 0; $__LIST__ = $sideMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="layui-nav-item layui-nav-itemed">
                <a class="" href="javascript:;"><?php echo htmlentities($vo['name']); ?></a>
                <dl class="layui-nav-child">
                    <?php if(!(empty($vo['submenu']) || (($vo['submenu'] instanceof \think\Collection || $vo['submenu'] instanceof \think\Paginator ) && $vo['submenu']->isEmpty()))): if(is_array($vo['submenu']) || $vo['submenu'] instanceof \think\Collection || $vo['submenu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['submenu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['isshow'] == '1'): ?>
                    <dd class="<?php echo $currentUrl==$v['line'] ? 'layui-this'  :  ''; ?>"><a href="<?php echo url($v['line']); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo htmlentities($v['name']); ?></a></dd>
                    <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                </dl>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>

    
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">
            
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>用户管理</legend>
    </fieldset>

    <form class="layui-form" action="">
        <div class="layui-form-item">
            <label class="layui-form-label">用户名</label>
            <div class="layui-input-inline">
                <input type="text" name="user_name" lay-verify="text|required" autocomplete="off" placeholder="用户名" class="layui-input" value="<?php echo isset($user['user_name']) ? htmlentities($user['user_name']) : ''; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-inline">
                <input type="password" name="password" lay-verify="required|tips" autocomplete="请输入密码"  class="layui-input" value="<?php echo isset($user['password']) ? htmlentities($user['password']) : ''; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">email</label>
            <div class="layui-input-inline">
                <input type="text" name="email" lay-verify="required|email" autocomplete="off" placeholder="email" class="layui-input" value="<?php echo isset($user['email']) ? htmlentities($user['email']) : ''; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">角色</label>
            <div class="layui-input-inline">
                <select name="roleid">
                    <option value="">请选择角色</option>
                    <?php if(is_array($role) || $role instanceof \think\Collection || $role instanceof \think\Paginator): $key = 0; $__LIST__ = $role;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                        <option value="<?php echo isset($vo['id']) ? htmlentities($vo['id']) : ''; ?>" selected=""><?php echo isset($vo['rolename']) ? htmlentities($vo['rolename']) : ''; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-upload">
            <button type="button" class="layui-btn" id="upload">上传图片</button>
            <div class="layui-upload-list">
                <img class="layui-upload-img"  id="demo1" src="<?php echo isset($user['image']) ? htmlentities($user['image']) : ''; ?>">
                <p id="demoText"></p>
                <input type="hidden" name="image">
            </div>
        </div>
        <!--<div class="layui-form-item">-->
            <!--<label class="layui-form-label">是否激活</label>-->
            <!--<div class="layui-input-block">-->
                <!--<button class="layui-btn activate" lay-filter="demo1" value="<?php echo isset($user['activate']) ? htmlentities($user['activate']) : ''; ?>" <?php if(isset($user['activate']) && $user['activate'] ==1): ?> disabled="" <?php endif; ?>><?php echo isset($user['activate']) ? htmlentities($user['activate']) : ''; ?></button>-->
            <!--</div>-->
        <!--</div>-->
        <div class="layui-form-item">
            <div class="layui-input-block">
                <input type="hidden" name="id" value="<?php echo isset($user['id']) ? htmlentities($user['id']) : ''; ?>">
                <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
                <button type="button" class="layui-btn layui-btn-primary return">返回</button>
            </div>
        </div>
    </form>

        </div>
    </div>
    
</div>

<script src="/static/index/layui/layui.js" charset="utf-8"></script>



<script>var Sys = {}, url = getRealPath();

var ua = navigator.userAgent.toLowerCase();

if (window.ActiveXObject) {

    Sys.ie = ua.match(/msie ([\d.]+)/)[1];

    if (Sys.ie <= 8) {
        location.href = "<?php echo url('index/shield'); ?>";

    }

}


function getRealPath() {
//获取当前网址，如： http://localhost:8083/myproj/view/my.jsp
    var curWwwPath = window.document.location.href;
//获取主机地址之后的目录，如： myproj/view/my.jsp
    var pathName = window.document.location.pathname;
    var pos = curWwwPath.indexOf(pathName);
//获取主机地址，如： http://localhost:8083
    var localhostPaht = curWwwPath.substring(0, pos);
//获取带"/"的项目名，如：/myproj
    var projectName = pathName.substring(0, pathName.substr(1).indexOf('/') + 1);

//得到了 http://localhost:8083/myproj
    var realPath = localhostPaht;
    return realPath;
}

</script>

    <script>
        layui.use(['form', 'layedit', 'laydate','upload'], function() {
            var form = layui.form
                , layer = layui.layer
                , $=layui.jquery
                ,upload = layui.upload;

            form.on('submit(demo1)', function (data) {
                var userid = $("input[name='id']").val();
                var url = userid ? "<?php echo url('upuser'); ?>" : "<?php echo url('adduser'); ?>";
                $.ajax({
                    url: url,
                    data: data.field,
                    type: 'POST',
                    success: function (data) {
                        if (data.code == 200) {
                            layer.msg(data.msg, {icon: 6}, function () {
                                window.location.href = "<?php echo url('index'); ?>";
                            });
                        } else {
                            layer.msg(data.msg, {icon: 5});
                        }
                    },
                    error: function (data) {
                        layer.msg(data.message);
                    }
                });
                return false;
            });

            //普通图片上传
            var uploadInst = upload.render({
                elem: '#upload'
                ,url: '<?php echo url("upload"); ?>'
                ,before: function(obj){
                    //预读本地文件示例，不支持ie8
                    obj.preview(function(index, file, result){
                        $('#demo1').attr('src', result); //图片链接（base64）
                    });
                }
                ,done: function(res){
                    //如果上传失败
                    if(res.code > 0){
                        return layer.msg('上传失败');
                    }
                    //上传成功
                    $("input[name='image']").val(res);
                }
            });

            //返回页面
            $(document).off('click', ".return").on('click', ".return", function () {
                window.location.href="<?php echo url('index'); ?>";
            });

//                $(document).off('click', ".activate").on('click', ".activate", function () {
//                    var activate=$(this).val();
//                    if(activate==0){
//                        $.ajax({
//                            type:"POST",
//                            url:"<?php echo url('edit_ticket_attr'); ?>",
//                            dataType:"json",
//                            data:data.field,
//                            success:function (data) {
//                                console.log(data);
//                                if (data.status == 1){
//                                    layer.closeAll();
//                                    layer.msg(data.msg, {icon: 6});
//                                    location.reload();
//
//                                }else {
//                                    layer.msg(data.msg,{icon:5})
//                                }
//                                return false;
//                            }
//                        });
//                        return false;
//                    }
//                });
        });
    </script>

</body>
</html>