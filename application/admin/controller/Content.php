<?php
/**
 * 文本内容
 * User: reborn
 * Date: 2018/7/26
 * Time: 13:40
 */

namespace app\admin\controller;
use app\admin\model\Content as ContentModel;
use app\admin\logic\Content as ContentLogic;
use app\admin\model\ArticleClass as ArticleClassModel;

class Content extends BaseController
{
    //文章页面
    public function index()
    {
        return $this->fetch();
    }

    //文章页面数据获取
    public function indexData()
    {
        $row=ContentLogic::userRoleJudge();
        return to_json(0,'获取成功',$row);
    }

    //新增文章页面
    public function addcontenthtml()
    {
        $articleClass=ArticleClassModel::index();
        return $this->fetch('',compact('articleClass'));
    }

    //新增文章
    public function addcontent()
    {
        return ContentModel::addContent();
    }

    //编辑文章页面
    public function upcontenthtml()
    {
        $content=ContentModel::getContentById();
        $articleClass=ArticleClassModel::index();
        return $this->fetch('addcontenthtml',compact('content','articleClass'));
    }

    //编辑文章
    public function upcontent()
    {
        return ContentModel::upContent();
    }

    //删除文章
    public function delcontent()
    {
        return ContentModel::delContent();
    }
}























