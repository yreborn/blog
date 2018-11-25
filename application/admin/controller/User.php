<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/7/9
 * Time: 17:59
 */

namespace app\admin\controller;

use app\admin\model\User as UserModel;
use app\admin\model\Role as RoleModel;

class User extends BaseController
{
    //用户列表首页
    public function index()
    {
        return $this->fetch();
    }

    //用户列表数据
    public function indexData()
    {
        $row=UserModel::getUser();
        return to_json(0,'获取成功',$row);
    }

    //增加用户页面
    public function adduserhtml()
    {
        $role=RoleModel::index();
        return $this->fetch('',compact('role'));
    }

    //增加用户信息
    public function adduser()
    {
        return UserModel::addUser();
    }

    //更新获取用户信息
    public function upuserhtml()
    {
        $role=RoleModel::index();
        $user=UserModel::editUser();
        return $this->fetch('adduserhtml',compact('user','role'));
    }

    //更新用户
    public function upuser()
    {
        return UserModel::upUser();
    }

    //删除用户
    public function deluser()
    {
        return UserModel::delUser();
    }
}




















