<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/9/7
 * Time: 14:21
 */

namespace app\admin\service;

use app\admin\validate\RuleValidate;

class Rule
{
    /**
     * 规则验证
     * Created by Reborn
     * 适用版本 v1.1
     * @param null $scene
     * @return array
     */
    public static function ruleVAalidate($scene=null)
    {
        $ruleValidate = new RuleValidate();
        $ruleValidate->doCheck($scene);
        return $ruleValidate->getParamsByRule(input(),$scene);
    }
}