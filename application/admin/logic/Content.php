<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/9/7
 * Time: 15:09
 */

namespace app\admin\logic;
use app\admin\service\User as UserService;
use app\admin\model\Content as ContentModel;

class Content
{
    /**
     * 判断用户角色
     * 当userid等于1时为管理员角色 管理员角色可以查看所有文章
     * Created by Reborn
     * 适用版本 v1.1
     * @return \think\Paginator
     */
    public static function userRoleJudge()
    {
        $roleid = UserService::getUserRole();
        if ($roleid != 1) {
            $where['userid'] = $roleid;
        }
        $where['delete'] = 1;
        return ContentModel::index($where);
    }
}