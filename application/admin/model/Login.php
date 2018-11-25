<?php
/**
 * Created by PhpStorm.
 * User: reborn
 * Date: 2018/7/9
 * Time: 17:04
 */

namespace app\admin\model;


class Login extends BaseModel
{
    /**
     * 获取登录信息
     * User: Reborn
     * Date: 2018/11/7 23:13
     * @return mixed
     */
    public static function getLoginSession()
    {
        $name='index-userlogin';
        return Session::get($name,'index');
    }

}