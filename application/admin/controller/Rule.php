<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/7/25
 * Time: 16:15
 */

namespace app\admin\controller;
use app\admin\model\Rule as RuleModel;

class Rule extends BaseController
{
    //权限列表
    public function index()
    {
        return $this->fetch();
    }

    //页面数据
    public function indexData()
    {
        $row=RuleModel::rule();
        return to_json(0,'获取成功',$row);
    }

    //增价列表页面
    public function addrulehtml()
    {
        return $this->fetch();
    }

    //增加列表
    public function addrule()
    {
        return RuleModel::addRule();
    }

    //编辑权限列表页面
    public function uprulehtml()
    {
        $rule=RuleModel::getRule();
        return $this->fetch('addrulehtml',compact('rule'));
    }

    //更新列表
    public function uprule()
    {
        return RuleModel::upRule();
    }

    //删除角色
    public function delRule()
    {
        return RuleModel::delRule();
    }
}