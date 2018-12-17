<?php

/**
 * 主页页面
 * User: reborn
 * Date: 2018/9/11
 * Time: 11:35
 */
namespace app\index\controller;

use app\index\model\Content as ContentModel;
use app\index\model\ArticleClass as ArticleClassModel;

class Index extends BaseController
{
    //获取所有文章
    public function index()
    {
        $content=ContentModel::getContent();
        $articleclass=ArticleClassModel::articleClass();
        $recommend=ContentModel::getContent('recommend');
        return $this->fetch('',compact('content','recommend','articleclass'));
    }

    //获取指定的文章
    public function content()
    {
        $res=ContentModel::upReadnum();
        if($res==false){
            $this->error('写入失败');
        }
        $contentinfo=ContentModel::getContentinfo();
        $articleclass=ArticleClassModel::articleClass();
        return $this->fetch('',compact('contentinfo','articleclass'));
    }


}

