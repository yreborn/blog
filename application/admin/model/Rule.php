<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/7/11
 * Time: 10:30
 */

namespace app\admin\model;

use app\admin\service\Rule as RuleService;
class Rule extends BaseModel
{
    /**
     * 获取所有的权限列表
     * @return array|\PDOStatement|string|\think\Collection
     */
    public static function getRuleAll()
    {
        return self::where('delete',1)->select();
    }

    /**
     * 根据权限id数组获取权限列表
     * @param array $ruleid
     * @return array|\PDOStatement|string|\think\Collection
     */
    public static function getRuleByRuleId($ruleid=[])
    {
        return self::where(['delete'=>1,'id'=>['in',$ruleid]])->select();
    }

    /**
     * 获取权限
     * @return false|\PDOStatement|string|\think\Collection
     */
    public static function rule()
    {
        $limit=input('limit','10');
        return self::relation('getUser')->where('delete',1)->paginate($limit);
    }

    /**
     * 增加权限
     * @return \think\response\Json
     */
    public static function addRule()
    {
        $data=RuleService::ruleVAalidate('add');
        $res=self::create($data,true);
        return resultType($res,'增加权限',6000);
    }

    /**
     * 更新权限
     * @return \think\response\Json
     */
    public static function upRule()
    {
        $data=RuleService::ruleVAalidate('edit');
        $res=self::update($data,'',true);
        return resultType($res,'更新权限',6001);
    }

    /**
     * 根据权限列表id获取列表信息
     * @return array|null|\PDOStatement|string|\think\Model
     */
    public static function getRule()
    {
        $id=input('id','');
        return self::where(['id'=>$id,'delete'=>1])->find();
    }

    /**
     * 删除角色
     * @return \think\response\Json
     */
    public static function delRule()
    {
        $data['id']=input('id','');
        $data['delete']=0;
        $res=self::update($data,'',true);
        return resultType($res,'删除角色',6002);
    }

    /**
     * 获取用户名称
     * Created by Reborn
     * 适用版本 v1.1
     * @return $this
     */
    public function getUser()
    {
        return $this->belongsTo('user','createby','id')->field('id,user_name')->where('delete',1);
    }
}











