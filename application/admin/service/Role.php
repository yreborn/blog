<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/9/7
 * Time: 14:06
 */

namespace app\admin\service;
use app\admin\model\BaseModel;
use app\admin\validate\RoleValidate;
use app\admin\service\User as UserService;
use app\admin\model\Role as RoleModel;

class Role extends BaseModel
{

    /**
     * 返回验证信息
     * Created by Reborn
     * @param null $scene
     * @return array
     * @throws \Exception
     * Date: 2018-12-09
     * Time: 21:12
     */
    public static function setRoleValidate($scene=null)
    {
        $roleValidate = new RoleValidate();
        $roleValidate->doCheck($scene);
        return $roleValidate->getParamsByRule(request()->param(),$scene);
    }

    /**
     * 获取权限规则
     * Created by Reborn
     * @return array
     * Date: 2018-12-09
     * Time: 21:16
     */
    public static function getRoleByUserid()
    {
        $roleid=UserService::getUserRole()?:'';
        $where[]=['delete','=',1];
        $where[]=['id','IN',$roleid];
        return RoleModel::where($where)->column('ruleid');
    }
}