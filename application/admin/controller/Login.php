<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/7/9
 * Time: 17:04
 */

namespace app\admin\controller;


use think\Controller;
use app\admin\model\User as UserModel;
use app\admin\service\Login as LoginService;

class Login extends Controller
{
    //登录首页
    public function index()
    {
        return $this->fetch('login');
    }

    //判断登录信息是否正确
    public function isLogin()
    {
        return UserModel::isLogin();
    }

    //激活用户
    public function updateact()
    {
        $res = UserModel::updateact();
        if($res['status']==200){
            $this->success('新增成功', '/index/index');
        }else {
            $this->error('新增失败');
        }
    }

    //退出
    public function loginOut()
    {
        LoginService::logonOut();
        $this->redirect('Login/index');
    }
}















