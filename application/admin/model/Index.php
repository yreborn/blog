<?php

/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/7/9
 * Time: 16:33
 */
namespace app\admin\model;
use app\admin\model\Content as ContentModel;
use app\admin\model\User as UserModel;

class Index extends BaseModel
{
    /**
     * 首页统计
     * Created by Reborn
     * 适用版本 v1.1
     * @return mixed
     */
    public static function index()
    {
        $data['user']=UserModel::countUser();
        $data['content']=ContentModel::countContent();
        return $data;
    }
}