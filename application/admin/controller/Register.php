<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/7
 * Time: 22:55
 */

namespace app\admin\controller;
use app\admin\model\User as UserModel;
use think\Controller;


class Register extends Controller
{
    /**
     * 注册用户页面
     * @return mixed
     */
    public function register()
    {
        return $this->fetch('login/register');
    }

    /**
     * 增加用户
     * Created by Reborn
     * @return \think\response\Json
     * @throws \Exception
     * Date: 2018-12-06
     * Time: 23:19
     */
    public function addregister()
    {
        return UserModel::register();
    }
}