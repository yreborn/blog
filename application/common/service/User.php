<?php
/**
 * Created by River
 * Date: 2018/5/31 15:03
 */

namespace app\common\service;


use think\Db;

class User
{
    public static function setPwd($loginname,$pwd)
    {
        $where['loginname'] = addslashes(trim($loginname));
        $where['status']    = 1;
        $where['trashflag'] = 1;
        $user = Db::name('user')->where($where)->find();

        //判断用户是否存在
        if (empty($user)){
            return false;
        }
        //判断新密码
        if (md5($pwd.config('setting.add_salt')) != $user['password']){

            //新密码不通过则判断旧密码
            if (md5($pwd) != $user['password_old']){
                return false;
            }

            //密码验证通过，更新新密码，删除旧密码
            $update['password']     = md5($pwd.config('setting.add_salt'));
            $update['password_old'] = '';

            $res = Db::name('user')->where(['id'=>$user['id']])->update($update);
            if (!$res){
                return false;
            }
            return true;
        }
        return true;
    }

    //member登录验证
    public static function memberPwd($loginname,$pwd)
    {
        $where['loginname'] = addslashes(trim($loginname));
        $where['status']    = 1;
        $where['trashflag'] = 1;
        $user = Db::name('member')->where($where)->find();

        //判断用户是否存在
        if (empty($user)){
            return false;
        }
        //判断新密码
        if (md5($pwd.config('setting.add_salt')) != $user['pwd']){

            //新密码不通过则判断旧密码
            if (md5($pwd) != $user['password_old']){
                return false;
            }

            //密码验证通过，更新新密码，删除旧密码
            $update['pwd']          = md5($pwd.config('setting.add_salt'));
            $update['password_old'] = '';

            $res = Db::name('member')->where(['id'=>$user['id']])->update($update);
            if (!$res){
                return false;
            }
            return true;
        }
        return true;
    }

}