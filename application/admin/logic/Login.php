<?php

/**
 * 登录逻辑处理
 * User: reborn
 * Date: 2018/9/5
 * Time: 10:56
 */
namespace app\admin\logic;
use app\admin\service\Login as LoginService;


class Login
{
    /**
     * 判断是否登录
     * Created by Reborn
     * 适用版本 v1.1
     * @param $res
     * @param $data
     * @return \think\response\Json
     */
    public static function isLogin($res,$data)
    {
        if($res == ''){
            return result_data('登录失败',2000);
        }
        $data['id'] = $res['id'];
        LoginService::setLoginSession($res,$data);
        return result_data('登录成功',200);
    }

}









