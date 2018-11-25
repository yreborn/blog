<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/7/25
 * Time: 14:40
 */

namespace app\admin\validate;


class RoleValidate extends BaseValidate
{
    protected $rule=[
        'id'            => 'require',
        'rolename'      => 'require|unique:role',
    ];

    protected $message  =   [
        'rolename'          => '角色名称必填',
        'rolename.unique'   => '角色名称已存在',
    ];

    protected $scene=[
        'add'       =>['rolename'],
        'edit'      =>['id','rolename'],
    ];
}