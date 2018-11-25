<?php
/**
 * 文章分类
 * User: reborn
 * Date: 2018/7/26
 * Time: 16:02
 */

namespace app\admin\controller;
use app\admin\model\ArticleClass as ArticleClassModle;

class Articleclass extends BaseController
{
    //获取文章分类
    public function index()
    {
        return $this->fetch();
    }

    //获取数据
    public function indexData()
    {
        $row=ArticleClassModle::index();
        return to_json(0,'获取成功',$row);
    }

    //分类页面
    public function addarticlehtml()
    {
        return $this->fetch();
    }

    //增加分类
    public function addarticle()
    {
        return ArticleClassModle::addArticle();
    }

    //更新分类页面
    public function uparticlehtml()
    {
        $article=ArticleClassModle::getArticleById();
        return $this->fetch('addarticlehtml',compact('article'));
    }

    //更新分类
    public function upArticle()
    {
        return ArticleClassModle::upArticle();
    }

    //删除分类
    public function delArticle()
    {
        return ArticleClassModle::delArticle();
    }
}
















