<?php

/**
 * 登录验证
 * User: reborn
 * Date: 2018/7/10
 * Time: 15:45
 */
namespace app\admin\validate;

class LoginValidate extends BaseValidate
{
    protected $rule =   [
        'user_name'  => 'require|unique:user',
        'password'   => 'require',
        'email'     => 'require|email|unique:user',
    ];

    protected $message  =   [
        'user_name.require' => '名称必须',
        'user_name.unique'  => '名称已存在',
        'password.require'  => '密码必须',
        'email.require'     => '邮箱必须',
        'email.email'       => '邮箱格式错误',
        'email.unique'      => '邮箱已存在',
    ];

    protected $scene = [
        'login'     =>['user_name','password'],
        'register'  =>['user_name','password','email'],
    ];

    /**
     * 定义验证方法
     * Created by Reborn
     * 适用版本 v1.1
     * @return $this
     */
    public function sceneLogin()
    {
        return $this->only(['user_name','password'])
            ->remove('user_name', 'unique');
    }


}