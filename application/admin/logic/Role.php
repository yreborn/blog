<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/9/10
 * Time: 18:36
 */

namespace app\admin\logic;


class Role
{
    /**
     * 判读是否选择权限
     * Created by Reborn
     * 适用版本 v1.1
     * @return string|\think\response\Json
     */
    public static function ruleJudge()
    {
        $ruleid=input('ruleid','');
        if($ruleid==''){
            return result_data('未选择权限','5003');
        }
        return implode(',',$ruleid);
    }

}