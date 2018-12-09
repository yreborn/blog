<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/7/9
 * Time: 16:30
 */

namespace app\admin\controller;

use think\Controller;
use app\admin\model\Navigation as NavigationModel;
use app\admin\model\User as UserModel;
use think\facade\Session;
use app\admin\service\User as UserService;

class BaseController extends Controller
{

    public function initialize()
    {
        $this->loginType();//登录状态
        $this->getNav();//获取顶部导航
        $this->getsideNav();//左侧导航栏

//        $this->isActivate();//是否激活
    }

    //头部菜单
    private function getNav()
    {
        $nav=NavigationModel::getNav();
        $this->assign('nav',$nav);
    }

    //左侧导航栏
    private function getsideNav()
    {
        $allNav=NavigationModel::getallNav();
        $topNav=NavigationModel::getTopNav();
        $currentUrl=NavigationModel::getCurrentUrl();
        $sideMenu=arraySort($allNav,$topNav);
        $this->assign(compact('sideMenu','currentUrl'));
    }

    //获取用户id
    protected function getCurrentUserId()
    {
         return UserService::getCurrentUserId();
    }

    //获取用户名称
    protected function getCurrentUserName()
    {
        return UserService::getCurrentUserName();
    }

    //判断是否登录
    public function loginType(){
        $name='index-userlogin';
        if(!Session::has($name,'index')){
            $this->redirect('login/index');
        }
        $username=UserService::getCurrentUserName();
        $this->assign(compact('username'));
    }

    //判断是否激活
    public function isActivate()
    {
        $res=UserModel::isActivate();
        if($res['activate']==0){
            $id=$res['id'];
            $email=$res['email'];
            $url="http://yjy.tp5.com/index/Login/updateact?id=$id";
            $data=[
                'id'         =>$id,
                'user_email' => $email, //接收人邮箱
                'content'    => "您正在注册本网站,请于30分钟内点击此链接{$url}",
                'successUrl' => 'index/index',
                'errorUrl'   => 'login/index'
            ];
            return sendemali($data);
        }
    }

    //上传文件
    public function upload()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('file');
        // 移动到框架应用根目录/uploads/ 目录下
        $info = $file->validate(['size'=>15678,'ext'=>'jpg,png,gif'])->move('static/upload');
        if($info){
            // 成功上传后 获取上传信息
            $res=$info->getSaveName();
            return json_encode('/static/upload/'.$res);
        }else{
            // 上传失败获取错误信息
            return $file->getError();
        }
    }
}



















