<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/7
 * Time: 22:55
 */

namespace app\admin\controller;
use app\admin\model\User as UserModel;

class Register extends BaseController
{
    /**
     * 注册用户页面
     * @return mixed
     */
    public function register()
    {
        return $this->fetch();
    }

    /**
     * 增加用户
     * @return array
     */
    public function addregister()
    {
        return UserModel::register();
    }
}