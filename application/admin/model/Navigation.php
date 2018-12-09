<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/7/11
 * Time: 10:27
 */

namespace app\admin\model;

use app\admin\model\Rule as RuleModel;
use app\admin\service\Role as RoleService;

class Navigation extends BaseModel
{

    /**
     * 头部菜单
     * Created by Reborn
     * @param array $where
     * @return array|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * Date: 2018-12-09
     * Time: 21:03
     */
    public static function getNav($where = [])
    {
        $role=ruleData(RoleService::getRoleByUserid());
        $where[]=['pid','=',0];
        $where[]=['delete','=',1];
        $where[]=['id','IN',$role];
        return (new RuleModel())->where($where)->select();
    }

    /**
     * 获取所有菜单
     * Created by Reborn
     * @return array|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * Date: 2018-12-09
     * Time: 21:03
     */
    public static function getallNav()
    {
        $role=ruleData(RoleService::getRoleByUserid());
        $where[]=['delete','=',1];
        $where[]=['id','IN',$role];
        return (new RuleModel())->field('id,line,name,pid,isshow')->where($where)->select();
    }

    /**
     * 头部菜单id
     * @return array
     */
    public static function getTopNav()
    {
        $where['pid']=0;
        $where['delete'] = 1;
        return (new RuleModel())->field('id,line,name,pid')->where($where)->column('id');
    }

    /**
     * 获取当前控制器
     * @return string
     */
    public static function getCurrentUrl()
    {
        $controller=\request()->controller();
        $action=\request()->action();
        return $controller.'/'.$action;
    }

}










































