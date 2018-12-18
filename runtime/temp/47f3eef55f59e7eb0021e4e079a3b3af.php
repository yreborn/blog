<?php /*a:6:{s:74:"D:\PhpStudy\PHPTutorial\WWW\blog\application\index\view\index\content.html";i:1545146895;s:72:"D:\PhpStudy\PHPTutorial\WWW\blog\application\index\view\base\common.html";i:1544968378;s:72:"D:\PhpStudy\PHPTutorial\WWW\blog\application\index\view\public\head.html";i:1544971293;s:74:"D:\PhpStudy\PHPTutorial\WWW\blog\application\index\view\public\header.html";i:1545059742;s:72:"D:\PhpStudy\PHPTutorial\WWW\blog\application\index\view\public\foot.html";i:1545143968;s:74:"D:\PhpStudy\PHPTutorial\WWW\blog\application\index\view\public\footer.html";i:1544971161;}*/ ?>
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
            
<div class="content whisper-content leacots-content details-content">
  <div class="cont w1000">
    <div class="whisper-list">
      <div class="item-box">
        <div class="review-version">
          <div class="form-box">
            <div class="article-cont">
              <div class="title">
                <h3><?php echo htmlentities($contentinfo['title']); ?></h3>
                <p class="cont-info"><span class="data"><?php echo htmlentities($contentinfo['create_time']); ?></span><span class="types"><?php echo htmlentities($contentinfo['getArticleClass']['classname']); ?></span></p>
              </div>
              <?php echo htmlentities($contentinfo['content']); ?>
              <!--<div class="btn-box">-->
                <!--<button class="layui-btn layui-btn-primary">上一篇</button>-->
                <!--<button class="layui-btn layui-btn-primary">下一篇</button>-->
              <!--</div>-->
            </div>
            <!--<div class="form">-->
              <!--<form class="layui-form" action="">-->
                <!--<div class="layui-form-item layui-form-text">-->
                  <!--<div class="layui-input-block">-->
                    <!--<textarea name="desc" placeholder="既然来了，就说几句" class="layui-textarea"></textarea>-->
                  <!--</div>-->
                <!--</div>-->
                <!--<div class="layui-form-item">-->
                  <!--<div class="layui-input-block" style="text-align: right;">-->
                    <!--<button class="layui-btn definite">確定</button>-->
                  <!--</div>-->
                <!--</div>-->
              <!--</form>-->
            <!--</div>-->
          </div>
          <!--<div class="volume">-->
            <!--全部留言 <span>10</span>-->
          <!--</div>-->
          <!--<div class="list-cont">-->
            <!--<div class="cont">-->
              <!--<div class="img">-->
                <!--<img src="../res/img/header.png" alt="">-->
              <!--</div>-->
              <!--<div class="text">-->
                <!--<p class="tit"><span class="name">吳亦凡</span><span class="data">2018/06/06</span></p>-->
                <!--<p class="ct">敢问大师，师从何方？上古高人呐逐一地看完你的作品后，我的心久久 不能平静！这世间怎么可能还有如此精辟的作品？我不敢相信自己的眼睛。自从改革开放以后，我就以为再也不会有任何作品能打动我，没想到今天看到这个如此精妙绝伦的作品好厉害！</p>-->
              <!--</div>-->
            <!--</div>-->
          <!--</div>-->
        </div>
      </div>
    </div>
    <div id="demo" style="text-align: center;"></div>
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



  <!--<script type="text/html" id="laytplCont">-->
    <!--<div class="cont">-->
      <!--<div class="img">-->
        <!--{{#  if(d.avatar){ }}-->
        <!--<img src="{{d.avatar}}" alt="">-->
        <!--{{#  } else { }}-->
        <!--<img src="../res/img/header.png" alt="">-->
        <!--{{# } }}-->
      <!--</div>-->
      <!--<div class="text">-->
        <!--<p class="tit"><span class="name">{{d.name}}</span><span class="data">2018/06/06</span></p>-->
        <!--<p class="ct">{{d.cont}}</p>-->
      <!--</div>-->
    <!--</div>-->
  <!--</script>-->
  <!--<script type="text/javascript">-->
    <!--layui.config({-->
      <!--base: '/static/res/js/util/'-->
    <!--}).use(['element','laypage','form','menu'],function(){-->
      <!--element = layui.element,laypage = layui.laypage,form = layui.form,menu = layui.menu;-->
      <!--laypage.render({-->
        <!--elem: 'demo'-->
        <!--,count: 70 //数据总数，从服务端得到-->
      <!--});-->
      <!--menu.init();-->
      <!--menu.submit();-->
    <!--})-->
  <!--</script>-->

</body>
</html>