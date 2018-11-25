<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/9/7
 * Time: 15:17
 */

namespace app\admin\service;

use app\admin\validate\ContentValidate;

class Content
{
    /**
     * 返回文章验证
     * Created by Reborn
     * 适用版本 v1.1
     * @param null $scene
     * @return array
     */
    public static function setContentValidate($scene=null)
    {
        $contentValidate = new ContentValidate();
        $contentValidate->doCheck($scene);
        return $contentValidate->getParamsByRule(request()->param(),$scene);
    }
}