<?php
/**
 * 文章分类
 * User: reborn
 * Date: 2018/7/26
 * Time: 16:02
 */

namespace app\admin\validate;


class ArticleClassValidate extends BaseValidate
{
    protected $rule=[
        'id'            => 'require',
        'classname'     => 'require|unique:articleclass',

    ];

    protected $message  =   [
        'classname'         => '名称必须',
        'classname.unique'  => '名称已经存在',
    ];

    protected $scene=[
        'add'       =>['classname'],
        'edit'      =>['id','classname'],
    ];
}