<?php

/**
 * 登录接口
 * User: reborn
 * Date: 2018/9/5
 * Time: 10:53
 */
namespace app\admin\service;

use think\facade\Session;
use app\admin\validate\LoginValidate;

class Login
{
    /**
     * 设置缓存
     * Created by Reborn
     * 适用版本 v1.1
     * @param $res
     * @param $data
     */
    public static function setLoginSession($res,$data)
    {
        $name='index-userlogin';
        if (is_array($res)){
            $data=json_encode($res);
        }
        Session::set($name,$data,'index');
    }

    /**
     * 返回验证信息
     * Created by Reborn
     * 适用版本 v1.1
     * @param null $scene 场景名称
     * @return array
     */
    public static function setLoginValidate($scene=null)
    {
        $loginValidate = new loginValidate();
        $loginValidate->doCheck($scene);
        return $loginValidate->getParamsByRule(request()->param(),$scene);
    }

    /**
     * 清除缓存
     * Created by Reborn
     * 适用版本 v1.1
     */
    public static function logonOut()
    {
        session::delete('index');
    }
}