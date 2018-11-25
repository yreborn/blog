<?php
/**
 * 角色列表
 * User: reborn
 * Date: 2018/7/25
 * Time: 14:16
 */

namespace app\admin\controller;
use app\admin\model\Role as RoleModel;
use app\admin\model\Rule as RuleModel;

class Role extends BaseController
{
    //角色列表
    public function index()
    {
        return $this->fetch();
    }

    //页面数据
    public function indexData()
    {
        $row=RoleModel::index();
        return to_json(0,'获取成功',$row);
    }

    //增加角色页面
    public function addrolehtml()
    {
        $rule=RuleModel::getRuleAll();
        return $this->fetch('',compact('rule'));
    }

    //增加角色
    public function addrole()
    {
        return RoleModel::addRole();
    }

    //更新角色页面
    public function uprolehtml()
    {
        $role=RoleModel::getRoleById();
        $rule=RuleModel::getRuleAll();//所有的权限列表
        return $this->fetch('addrolehtml',compact('role','rule'));
    }

    //更新角色
    public function uprole()
    {
        return RoleModel::upRole();
    }

    //删除角色
    public function delrole()
    {
        return RoleModel::delRole();
    }
}














