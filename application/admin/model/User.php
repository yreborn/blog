<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/7/9
 * Time: 17:59
 */

namespace app\admin\model;

use think\facade\Session;
use app\admin\logic\Login as LoginLogic;
use app\admin\service\Login as LoginService;
use app\admin\service\User as UserService;

class User extends BaseModel
{
    /**
     * 判断是否在登陆正确
     * @return array
     */
    public static function isLogin()
    {
        $data=LoginService::setLoginValidate('login');
        $data['password']=md5($data['password']);
        $data['delete']=1;
        $res=self::where($data)->find();
        return LoginLogic::isLogin($res,$data);
    }

    /**
     * 注册用户
     * @return array
     */
    public static function register()
    {
        $data=LoginService::setLoginValidate('register');
        $data['password']=md5($data['password']);
        $res=self::create($data);
        return resultType($res,'注册','1000');
    }

    /**
     * 激活用户
     * @return \think\response\Json
     */
    public static function updateact()
    {
        $id = request()->param('id','');
        $data = [
            'id' => $id,
            'activate' => 1
        ];
        $data = self::update($data);
        if ($data == false){
            return ['status'=>3000];
        }
        return ['status'=>200];
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
        return $user['name'];
    }

    /**
     * 判断是否激活
     * @return array|false|\PDOStatement|string|\think\Model
     */
    public static function isActivate()
    {
        $id=self::getCurrentUserId();
        return self::where(['id'=>$id,'delete'=>1])->find();
    }

    /**
     * 增加用户
     * @return \think\response\Json
     */
    public static function addUser()
    {
        $data=UserService::setUserValidate('add');
        $res=self::create($data,true);
        return resultType($res,'增加用户',4000);
    }

    /**
     * 修改用户
     * @return \think\response\Json
     */
    public static function upUser()
    {
        $data=UserService::setUserValidate('edit');
        $res=self::update($data,'',true);
        return resultType($res,'更新用户',4001);
    }

    /**
     * 获取用户信息
     * @return array|false|\PDOStatement|string|\think\Model
     */
    public static function editUser(){
        $id=input('id','');
        return self::where(['id'=>$id,'delete'=>1])->find();
    }

    /**
     * 用户列表
     * @return false|\PDOStatement|string|\think\Collection
     */
    public static function getUser()
    {
        $limit=request()->param('limit','10');
        return self::relation('userName')->where('delete',1)->paginate($limit);
    }

    /**
     * 删除用户
     * @return $this|static
     */
    public static function delUser()
    {
        $data['id']=input('id','');
        $data['delete']=0;
        $res = self::update($data);
        return resultType($res,'删除用户',4002);
    }

    /**
     * 获取用户名称
     * Created by Reborn
     * 适用版本 v1.1
     * @return $this
     */
    public function userName()
    {
        return $this->belongsTo('user','createby','id')->field('user_name');
    }

    /**
     * 统计用户名称
     * Created by Reborn
     * 适用版本 v1.1
     * @return float|int
     */
    public static function countUser()
    {
        return self::where('delete',1)->count('id');
    }
}













