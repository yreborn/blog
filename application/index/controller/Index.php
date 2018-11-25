<?php

/**
 * 主页页面
 * User: reborn
 * Date: 2018/9/11
 * Time: 11:35
 */
namespace app\index\controller;

use app\index\model\Content as ContentModel;

class Index extends BaseController
{
    //获取所有文章
    public function index()
    {
        $content=ContentModel::getContent();
        $recommend=ContentModel::getContent('recommend');
        return $this->fetch('',compact('content','recommend'));
    }

    //获取指定的文章
    public function content()
    {
        $res=ContentModel::upReadnum();
        if($res==false){
            $this->error('写入失败');
        }
        $contentinfo=ContentModel::getContentinfo();
        return $this->fetch('',compact('contentinfo'));
    }



}

