<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/9/7
 * Time: 14:06
 */

namespace app\admin\service;
use app\admin\validate\RoleValidate;

class Role
{
    /**
     * 返回验证信息
     * Created by Reborn
     * 适用版本 v1.1
     * @param null $scene
     * @return mixed
     */
    public static function setRoleValidate($scene=null)
    {
        $roleValidate = new RoleValidate();
        $roleValidate->doCheck($scene);
        return $roleValidate->getParamsByRule(request()->param(),$scene);
    }
}