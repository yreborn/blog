<?php /*a:7:{s:77:"D:\PhpStudy\PHPTutorial\WWW\blog\application\admin\view\role\addrolehtml.html";i:1536581018;s:72:"D:\PhpStudy\PHPTutorial\WWW\blog\application\admin\view\base\common.html";i:1531213751;s:72:"D:\PhpStudy\PHPTutorial\WWW\blog\application\admin\view\public\head.html";i:1536308456;s:74:"D:\PhpStudy\PHPTutorial\WWW\blog\application\admin\view\public\header.html";i:1544347311;s:72:"D:\PhpStudy\PHPTutorial\WWW\blog\application\admin\view\public\side.html";i:1531469330;s:74:"D:\PhpStudy\PHPTutorial\WWW\blog\application\admin\view\public\footer.html";i:1536308591;s:71:"D:\PhpStudy\PHPTutorial\WWW\blog\application\admin\view\public\var.html";i:1531213677;}*/ ?>
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
        <li class="layui-nav-item"><a href="<?php echo url('/index'); ?>">前台首页</a></li>
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
                    <?php endif; ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php endif; ?>
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
    <legend>角色管理</legend>
</fieldset>
<form class="layui-form" action="">
    <div class="layui-form-item">
        <label class="layui-form-label">角色名称</label>
        <div class="layui-input-inline">
            <input type="text" name="rolename" lay-verify="text|required" autocomplete="off" placeholder="标题" class="layui-input" value="<?php echo isset($role['rolename']) ? htmlentities($role['rolename']) : ''; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">权限列表</label>
        <div class="layui-input-block">
            <?php if(!(empty($role['ruleid']) || (($role['ruleid'] instanceof \think\Collection || $role['ruleid'] instanceof \think\Paginator ) && $role['ruleid']->isEmpty()))): if(is_array($rule) || $rule instanceof \think\Collection || $rule instanceof \think\Paginator): $key = 0; $__LIST__ = $rule;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if(in_array(($vo['id']), is_array($role['ruleid']??'')?$role['ruleid']??'':explode(',',$role['ruleid']??''))): ?>
                        <input type="checkbox" name="ruleid[]" lay-skin="primary" title="<?php echo htmlentities($vo['name']); ?>" checked="" value="<?php echo htmlentities($vo['id']); ?>">
                    <?php else: ?>
                        <input type="checkbox" name="ruleid[]" lay-skin="primary" title="<?php echo htmlentities($vo['name']); ?>" value="<?php echo htmlentities($vo['id']); ?>">
                    <?php endif; ?>
                <?php endforeach; endif; else: echo "" ;endif; else: if(is_array($rule) || $rule instanceof \think\Collection || $rule instanceof \think\Paginator): $key = 0; $__LIST__ = $rule;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <input type="checkbox" name="ruleid[]" lay-skin="primary" title="<?php echo htmlentities($vo['name']); ?>" value="<?php echo htmlentities($vo['id']); ?>">
                <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="hidden" name="id" value="<?php echo isset($role['id']) ? htmlentities($role['id']) : ''; ?>">
            <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary return">返回</button>
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
    layui.use(['form', 'laydate'], function() {
        var form=layui.form
            ,layer=layui.layer
            ,$=layui.jquery;

        form.on('submit(demo1)', function (data) {
            var id=$("input[name='id']").val();
            var url=id ? "<?php echo url('uprole'); ?>" : "<?php echo url('addrole'); ?>";
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

        //返回页面
        $(document).off('click', ".return").on('click', ".return", function () {
            window.location.href="<?php echo url('index'); ?>";
        });
    });
</script>

</body>
</html>