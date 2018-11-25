<?php /*a:1:{s:62:"D:\phpStudy\WWW\blog\application\index\view\index\content.html";i:1536660669;}*/ ?>
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
            <div class="layui-row layui-col-space20">
                <!-- 左侧 -->
                <div class="layui-col-md12">
                    <div class="left box-shadow">
                        <div class="wycto-h20"></div>
                        <!-- 文章 -->
                        <div class="section">
                            <h3 class="section-head-view"><?php echo htmlentities($contentinfo['title']); ?></h3>
                            <div class="section-head-info">
                                <div class="list-info">
                                  <span class="user">
                                    <a href="/index/article/user/uid/9.html">
                                      <img src="<?php echo htmlentities($contentinfo['getUser']['image']); ?>">
                                      <i class="name"><?php echo htmlentities($contentinfo['getUser']['user_name']); ?></i>
                                    </a>
                                  </span>
                                    <span class="info">
                                        <i class="layui-icon"></i><i><?php echo htmlentities($contentinfo['readnum']); ?></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="layui-icon"></i><i><?php echo htmlentities($contentinfo['readnum']); ?></i>
                                    </span>
                                                        <span class="user">&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="/index/article/index/cid/5.html">
                                      <i class="wycto-icon"></i>
                                      <i class="name"><?php echo htmlentities($contentinfo['getArticleClass']['classname']); ?></i>
                                    </a>
                                  </span>
                                                        <span class="info">&nbsp;
                                    <i class="wycto-icon"></i><i><?php echo htmlentities($contentinfo['readnum']); ?></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="wycto-icon"></i><i><?php echo htmlentities($contentinfo['readnum']); ?></i>
                                  </span>
                                    <time datetime="<?php echo htmlentities($contentinfo['create_time']); ?>" class="time"><i class="layui-icon"></i>&nbsp;<?php echo htmlentities($contentinfo['create_time']); ?></time>
                                </div>
                            </div>
                            <div class="section-body">
                                <!-- 内容开始 -->
                                <div class="layui-row layui-col-space20">
                                    <!-- 摘要 -->
                                    <div class="layui-col-md12">
                                        <blockquote class="layui-elem-quote"><?php echo htmlentities(mb_substr($contentinfo['content'],0,30,'utf-8')); ?></blockquote>
                                    </div>
                                    <!-- 摘要 -->
                                    <!-- 内容 -->
                                    <div class="layui-col-md12 view-content"><?php echo htmlentities($contentinfo['content']); ?></div>
                                    <!-- 内容 -->
                                </div>
                                <!-- 内容结束 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
<script src="/static/index/layui/layui.js" charset="utf-8"></script>
</html>