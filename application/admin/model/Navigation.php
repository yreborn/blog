<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/7/11
 * Time: 10:27
 */

namespace app\admin\model;

use app\admin\model\Rule as RuleModel;

class Navigation extends BaseModel
{
    /**
     * 头部菜单
     * @param array $where
     * @return false|\PDOStatement|string|\think\Collection
     */
    public static function getNav($where = [])
    {
        $where['pid']=0;
        $where['delete']=1;
        return (new RuleModel())->where($where)->select();
    }

    /**
     * 获取所有菜单
     * @return false|\PDOStatement|string|\think\Collection
     */
    public static function getallNav()
    {
        $where['delete']=1;
        return (new RuleModel())->field('id,line,name,pid,isshow')->where($where)->select();
    }

    /**
     * 获取主订单id
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










































