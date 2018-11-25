<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/9/10
 * Time: 17:37
 */
namespace app\admin\service;
use app\admin\validate\ArticleClassValidate;

class ArticleClass
{
    /**
     * 返回版本验证
     * Created by Reborn
     * 适用版本 v1.1
     * @param null $scene
     * @return array
     */
    public static function setArticleClassValidate($scene=null)
    {
        $ArticleClassValidate = new ArticleClassValidate();
        $ArticleClassValidate->doCheck($scene);
        return $ArticleClassValidate->getParamsByRule(request()->param(),$scene);
    }
}