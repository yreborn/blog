<?php /*a:1:{s:72:"D:\PhpStudy\PHPTutorial\WWW\blog\application\index\view\index\index.html";i:1536660758;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/static/index/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/static/index/layui/css/common.css" media="all">
</head>
<body>
<header class="header">
    <div class="layui-container">
        <a class="logo" href="/">
            <img src="/static/index/layui/images/tx.jpg" alt="layui">
        </a>
        <div class="layui-row">
            <ul class="menu-nav layui-nav layui-bg-cyan layui-col-xs12">
                <li code="index" class="layui-nav-item layui-this">
                    <a href="<?php echo url('index'); ?>">首页</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<div id="content-main">
    <div class="layui-container">
        <div class="content wycto-mt10 wycto-mb20">
            <div class="layui-row layui-col-space20 wycto-mt10">
                <!-- 左侧 -->
                <div class="layui-col-md9">
                    <div class="left box-shadow">
                        <div class="wycto-h20"></div>
                        <div class="wycto-h20"></div>
                        <!-- 最新文章 -->
                        <div class="section">
                            <h3 class="section-head">最新文章</h3>
                            <div class="section-body">
                                <div class="layui-row layui-col-space20">
                                    <?php if(is_array($content) || $content instanceof \think\Collection || $content instanceof \think\Paginator): $key = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                                    <div class="layui-col-md12 list-item">
                                        <div class="layui-row layui-col-space20">
                                            <div class="layui-col-md4">
                                                <a href="<?php echo url('content',['id'=>$vo['id']]); ?>">
                                                    <img src="<?php echo htmlentities($vo['image']); ?>" alt="<?php echo htmlentities($vo['title']); ?>" class="img">
                                                </a>
                                            </div>
                                            <div class="layui-col-md8">
                                                <a href="<?php echo url('content',['id'=>$vo['id']]); ?>" class="list-title"><?php echo htmlentities($vo['title']); ?></a>
                                                <p class="list-summary"><?php echo htmlentities(mb_substr($vo['content'],0,30,'utf-8')); ?></p>
                                                <div class="list-info">
                                                  <span class="user">
                                                    <a href="<?php echo url('content',['id'=>$vo['id']]); ?>">
                                                      <img src="<?php echo htmlentities($vo['getUser']['image']); ?>">
                                                      <i class="name"><?php echo htmlentities($vo['getUser']['user_name']); ?></i>
                                                    </a>
                                                  </span>
                                                    <span class="info">
                                                        <i class="layui-icon"></i><i><?php echo htmlentities($vo['readnum']); ?></i>
                                                    </span>
                                                    <span class="user">&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a href="<?php echo url('content',['id'=>$vo['id']]); ?>">
                                                          <i class="wycto-icon"></i>
                                                          <i class="name"><?php echo htmlentities($vo['getArticleClass']['classname']); ?></i>
                                                        </a>
                                                    </span>
                                                    <time datetime="<?php echo htmlentities($vo['create_time']); ?>" class="time">
                                                        <i class="layui-icon"></i>&nbsp;<?php echo htmlentities($vo['create_time']); ?>
                                                    </time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <!-- 列表结束 -->
                                    <div class="layui-col-md12 more-box">
                                        <a class="more-btn" href="/index/article/index.html">查看更多 →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 右侧 -->
                <div class="layui-col-md3">
                    <div class="right">
                        <section class="section box-shadow side-right">
                            <h3 class="section-head">推荐文章</h3>
                            <article class="section-body wycto-p10">
                                <?php if(is_array($recommend) || $recommend instanceof \think\Collection || $recommend instanceof \think\Paginator): $i = 0; $__LIST__ = $recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <a href="<?php echo url('content',['id'=>$vo['id']]); ?>">
                                    <img src="<?php echo htmlentities($vo['image']); ?>" alt="<?php echo htmlentities($vo['title']); ?>"
                                         class="img">
                                    <span class="section-body-summary"><?php echo htmlentities($vo['title']); ?></span>
                                    <div class="list-info">
                                          <span class="info">
                                            <i class="layui-icon"></i><i><?php echo htmlentities($vo['readnum']); ?></i>&nbsp;&nbsp;
                                            <i class="layui-icon"></i><i><?php echo htmlentities($vo['readnum']); ?></i>
                                          </span>
                                        <time datetime="<?php echo htmlentities($vo['create_time']); ?>" class="time"><i class="layui-icon"></i>&nbsp;<?php echo htmlentities($vo['create_time']); ?>
                                        </time>
                                    </div>
                                </a>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="/static/index/layui/layui.js" charset="utf-8"></script>
</html>