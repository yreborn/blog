<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/7/25
 * Time: 16:30
 */

namespace app\admin\validate;


class RuleValidate extends BaseValidate
{
    protected $rule=[
        'id'        => 'require',
        'line'      => 'require|unique:rule',
        'name'      => 'require|unique:rule',
        'pid'       => 'require',
        'isshow'    => 'require',
    ];

    protected $message  =   [
        'id'         => 'id必须',
        'line'       => '链接',
        'line.unique'=> '链接已存在',
        'name'       => '名称必须',
        'name.unique'=> '名称已存在',
        'pid'        => '是否加入导航',
        'isshow'     => '是否显示',
    ];

    protected $scene=[
        'add'       =>['line','name','pid','isshow'],
        'edit'      =>['id','line','name','pid','isshow'],
    ];

    /**
     * 定义验证方法
     * Created by Reborn
     * 适用版本 v1.1
     * @return $this
     */
    public function sceneEdit()
    {
        return $this->only(['id','line','name','pid','isshow'])
            ->remove('line', 'unique')
            ->remove('name', 'unique');

    }
}