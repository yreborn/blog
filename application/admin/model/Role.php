<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/7/25
 * Time: 14:21
 */

namespace app\admin\model;
use app\admin\service\Role as RoleService;
use app\admin\logic\Role as RoleLogic;

class Role extends BaseModel
{
    /**
     * 获取角色列表
     * @return false|\PDOStatement|string|\think\Collection
     */
    public static function index()
    {
        $limit=input('limit','10');
        return self::relation('getUser,getRule')->where('delete',1)->paginate($limit);
    }

    /**
     * 增加角色
     * @return \think\response\Json
     */
    public static function addRole()
    {
        $data=RoleService::setRoleValidate('add');
        $data['ruleid']=RoleLogic::ruleJudge();
        $res=self::create($data,true);
        return resultType($res,'增加角色',5000);
    }

    /**
     * 更新角色
     * @return \think\response\Json
     */
    public static function upRole()
    {
        $data=RoleService::setRoleValidate('edit');
        $data['ruleid']=RoleLogic::ruleJudge();
        $res=self::update($data,'',true);
        return resultType($res,'更新角色',5001);
    }

    /**
     * 根据id获取角色信息
     * @return array|false|\PDOStatement|string|\think\Model
     */
    public static function getRoleById()
    {
        $id=input('id','');
        return self::where(['id'=>$id,'delete'=>1])->find();
    }

    /**
     * 删除角色
     * @return \think\response\Json
     */
    public static function delRole()
    {
        $data['id']=input('id','');
        $data['delete']=0;
        $res=self::update($data);
        return resultType($res,'删除角色',5002);
    }

    /**
     * 获取用户
     * Created by Reborn
     * 适用版本 v1.1
     * @return $this
     */
    public function getUser()
    {
        return $this->belongsTo('user','createby','id')->field('id,user_name')->where('delete',1);
    }

    /**
     * 获取权限名称
     * Created by Reborn
     * 适用版本 v1.1
     * @return $this
     */
    public function getRule()
    {
        return $this->belongsTo('rule','ruleid','id')->field('id,name')->where('delete',1);
    }
}







































