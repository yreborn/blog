<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/7/24
 * Time: 17:00
 */

namespace app\admin\validate;


class UserValidate extends BaseValidate
{
    protected $rule=[
        'id'            => 'require',
        'user_name'     => 'require|unique:user',
        'password'      => 'require',
        'email'         => 'email|unique:user',
        'roleid'        => 'require',
        'image'         => 'require',
    ];

    protected $message  =   [
        'id'                => 'id必须',
        'user_name'         => '名称必须',
        'user_name.unique'  => '名称已经存在',
        'password'          => '密码必须',
        'email'             => '邮箱格式错误',
        'email.unique'      => '邮箱已存在',
        'roleid'            => '所属角色必选',
        'image'             => '图片必须',
    ];

    protected $scene=[
        'add'  =>['user_name','password','email','roleid','image'],
        'edit' =>['id','user_name','password','email','roleid','image'],
    ];
}