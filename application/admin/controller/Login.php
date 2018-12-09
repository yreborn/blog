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
use think\captcha\Captcha;

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

    /**
     * 验证码
     * Created by Reborn
     * @return \think\Response
     * Date: 2018-12-03
     * Time: 23:13
     */
    public function verify()
    {
        $config = [
            // 验证码字体大小
            'fontSize' => 15,
            // 验证码位数
            'length' => 4,
            // 关闭验证码杂点
            'useNoise' => true,
            // 验证码图片高度
            'imageH'   => 38,
            // 验证码图片宽度
            'imageW'   => 130,
            // 验证码过期时间（s）
            'expire'   => 1800,
            'reset'    => false,
        ];

        $captcha = new Captcha($config);
        $captcha->codeSet='0123456789';
        return $captcha->entry();
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















