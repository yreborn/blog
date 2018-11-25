<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/9/7
 * Time: 11:46
 */

namespace app\admin\service;

use app\admin\model\BaseModel;
use think\facade\Session;
use app\admin\validate\UserValidate;

class User extends BaseModel
{

    /**
     * 获取登录的用户名
     * @return mixed
     */
    public static function getCurrentUserName()
    {
        $name='index-userlogin';
        $user=Session::get($name,'index');
        if (!is_array($user)){
            $user=json_decode($user,true);
        }
        return $user['user_name'];
    }

    /**
     * 返回验证信息
     * Created by Reborn
     * 适用版本 v1.1
     * @param $scene
     * @return array
     */
    public static function setUserValidate($scene=null)
    {
        $userValidate = new UserValidate();
        $userValidate->doCheck($scene);
        return $userValidate->getParamsByRule(request()->param(),$scene);
    }

    /**
     * 获取登录的id
     * @return mixed
     */
    public static function getCurrentUserId()
    {
        $name='index-userlogin';
        $user=Session::get($name,'index');
        if (!is_array($user)){
            $user=json_decode($user,true);
        }
        return $user['id'];
    }

    /**
     * 获取角色
     * Created by Reborn
     * 适用版本 v1.1
     * @return mixed
     */
    public static function getUserRole()
    {
        $where['delete']=1;
        $where['id']=User::getCurrentUserId();
        return self::where($where)->value('roleid');
    }

}














