<?php
/**
 * 文本内容
 * User: reborn
 * Date: 2018/7/26
 * Time: 13:41
 */

namespace app\admin\validate;

class ContentValidate extends BaseValidate
{
    protected $rule=[
        'id'        => 'require',
        'title'     => 'require|unique:content',
        'content'   => 'require',
        'articleid' => 'require',
        'image'     => 'require',
    ];

    protected $message  =   [
        'id'            => 'id必须',
        'title'         => '标题必须',
        'title.unique'  => '标题已存在',
        'content'       => '内容必须',
        'articleid'     => '分类必须',
        'image'         => '图片必须',
    ];

    protected $scene=[
        'add'       =>['title','content','articleid','image'],
        'edit'      =>['id','title','content','articleid','image'],
    ];
}