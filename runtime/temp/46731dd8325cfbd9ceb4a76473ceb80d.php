<?php /*a:6:{s:72:"D:\PhpStudy\PHPTutorial\WWW\blog\application\index\view\index\index.html";i:1545146658;s:72:"D:\PhpStudy\PHPTutorial\WWW\blog\application\index\view\base\common.html";i:1544968378;s:72:"D:\PhpStudy\PHPTutorial\WWW\blog\application\index\view\public\head.html";i:1544971293;s:74:"D:\PhpStudy\PHPTutorial\WWW\blog\application\index\view\public\header.html";i:1545059742;s:72:"D:\PhpStudy\PHPTutorial\WWW\blog\application\index\view\public\foot.html";i:1545143968;s:74:"D:\PhpStudy\PHPTutorial\WWW\blog\application\index\view\public\footer.html";i:1544971161;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Document</title>
<link rel="stylesheet" type="text/css" href="/static/res/layui/css/layui.css">
<link rel="stylesheet" type="text/css" href="/static/res/css/main.css">
<!--加载meta IE兼容文件-->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
    <title>测试</title>
    

    
</head>
<body class="">
<div class="">

    <div class="header">
    <div class="menu-btn">
        <div class="menu"></div>
    </div>
    <h1 class="logo">
        <a href="<?php echo url('index'); ?>">
            <span>MYBLOG</span>
            <img src="/static/res/img/logo.png">
        </a>
    </h1>
    <div class="nav">
        <a href="<?php echo url('index'); ?>" class="active">全部</a>
        <?php if(is_array($articleclass) || $articleclass instanceof \think\Collection || $articleclass instanceof \think\Paginator): $key = 0; $__LIST__ = $articleclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a href="<?php echo url('index',['articleid'=>$vo['id']]); ?>" class="active"><?php echo htmlentities($vo['classname']); ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <ul class="layui-nav header-down-nav">
        <a href="<?php echo url('index'); ?>" class="active">全部</a>
        <?php if(is_array($articleclass) || $articleclass instanceof \think\Collection || $articleclass instanceof \think\Paginator): $key = 0; $__LIST__ = $articleclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a href="<?php echo url('index',['articleid'=>$vo['id']]); ?>" class="active"><?php echo htmlentities($vo['classname']); ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
    
    <div class="">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">
            
<div class="content">
  <div class="cont w1000">
    <div class="list-item">
      <?php if(is_array($content) || $content instanceof \think\Collection || $content instanceof \think\Paginator): $key = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
      <div class="item">
        <div class="layui-fluid">
          <div class="layui-row">
            <div class="layui-col-xs12 layui-col-sm4 layui-col-md5">
              <div class="img">
                <a href="<?php echo url('content',['id'=>$vo['id']]); ?>"><img src="<?php echo htmlentities($vo['image']); ?>" alt="<?php echo htmlentities($vo['title']); ?>"></a>
              </div>
            </div>
            <div class="layui-col-xs12 layui-col-sm8 layui-col-md7">
              <div class="item-cont">
                <h3><?php echo htmlentities($vo['title']); ?><button class="layui-btn layui-btn-danger new-icon">new</button></h3>
                <h5><?php echo htmlentities($vo['getArticleClass']['classname']); ?></h5>
                <p><?php echo htmlentities(mb_substr($vo['content'],0,30,'utf-8')); ?></p>
                <a href="<?php echo url('content',['id'=>$vo['id']]); ?>" class="go-icon"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
      <div id="demo">
          <?php echo $content; ?>
      </div>
  </div>
</div>

        </div>
    </div>
    

</div>

<div class="footer-wrap">
    <div class="footer w1000">

        <div class="qrcode">
            <div style="text-align: center;">支付宝打赏</div>
            <img src="/static/res/img/erweima.jpg">
        </div>
        <div class="practice-mode">
            <div style="text-align: center;">微信打赏</div>
            <div class="qrcode">
                <img src="/static/res/img/wx.jpg">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/res/layui/layui.js"></script>




</body>
</html>