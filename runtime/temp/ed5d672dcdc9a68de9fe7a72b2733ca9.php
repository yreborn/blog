<?php /*a:7:{s:58:"D:\phpStudy\WWW\tp5\application\admin\view\user\index.html";i:1536564044;s:59:"D:\phpStudy\WWW\tp5\application\admin\view\base\common.html";i:1531213751;s:59:"D:\phpStudy\WWW\tp5\application\admin\view\public\head.html";i:1536308456;s:61:"D:\phpStudy\WWW\tp5\application\admin\view\public\header.html";i:1536634034;s:59:"D:\phpStudy\WWW\tp5\application\admin\view\public\side.html";i:1531469330;s:61:"D:\phpStudy\WWW\tp5\application\admin\view\public\footer.html";i:1536308591;s:58:"D:\phpStudy\WWW\tp5\application\admin\view\public\var.html";i:1531213677;}*/ ?>
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
            
    <table class="layui-hide" id="test" lay-filter="test"></table>

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

<script type="text/html" id="toolbarDemo">
    <div class="layui-btn-container">
        <button class="layui-btn layui-btn-sm" lay-event="getCheckData">获取选中行数据</button>
        <button class="layui-btn layui-btn-sm" lay-event="getCheckLength">获取选中数目</button>
        <button class="layui-btn layui-btn-sm" lay-event="isAll">验证是否全选</button>
        <button class="layui-btn layui-btn-sm" lay-event="add">增加</button>
    </div>
</script>

<script type="text/html" id="barDemo">
    <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>
<script>
    layui.use(['layer','table','form'],function () {
        var layer=layui.layer
            ,table=layui.table
            ,$=layui.jquery;

        table.render({
            elem: '#test'
            ,url:"<?php echo url('indexData'); ?>"
            ,toolbar: '#toolbarDemo'
            ,title: '用户数据表'
            ,cols: [[
                {type: 'checkbox', fixed: 'left'}
                ,{field:'id', title:'ID', width:80, fixed: 'left', unresize: true, sort: true}
                ,{field:'user_name', title:'用户名', width:120, edit: 'text'}
                ,{field:'email', title:'邮箱', width:150, edit: 'text', templet: function(res){
                    return '<em>'+ res.email +'</em>'
                }}
                ,{field:'roleid', title:'角色', width:80, edit: 'text', sort: true}
                ,{field:'create_time', title:'加入时间', width:120}
                ,{field:'userName', title:'创建人', width:120,templet: function(res){
                    var d = res.userName;
                    return d && (d['user_name'])?'<em>' + d.user_name + '</em>': '<em></em>';
                }}
                ,{fixed: 'right', title:'操作', toolbar: '#barDemo', width:170}
            ]]
            ,page:true
        });

        //头工具栏事件
        table.on('toolbar(test)', function(obj){
            var checkStatus = table.checkStatus(obj.config.id);
            switch(obj.event){
                case 'getCheckData':
                    var data = checkStatus.data;
                    layer.alert(JSON.stringify(data));
                    break;
                case 'getCheckLength':
                    var data = checkStatus.data;
                    layer.msg('选中了：'+ data.length + ' 个');
                    break;
                case 'isAll':
                    layer.msg(checkStatus.isAll ? '全选': '未全选');
                    break;
                case 'add':
                    window.location.href="<?php echo url('adduserhtml'); ?>";
                    break;
            };
        });

        //监听行工具事件
        table.on('tool(test)', function(obj){
            var data = obj.data;
            console.log(data)
            if(obj.event === 'del'){
                layer.confirm('真的删除行么', function(index){
                    obj.del();
                    $.ajax({
                        url:"<?php echo url('deluser'); ?>"
                        ,dataType:'json'
                        ,type:'post'
                        ,data:{
                            id:data.id,
                        }
                        ,success:function (result) {
                            layer.msg(result.msg,{icon: 6}) ;
                        }
                    });
                    layer.close(index);
                });
            } else if(obj.event === 'edit'){
                window.location.href="<?php echo url('upuserhtml'); ?>?id="+data.id
            }
        });
    });
</script>

</body>
</html>