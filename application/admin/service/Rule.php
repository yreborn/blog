<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/9/7
 * Time: 14:21
 */

namespace app\admin\service;

use app\admin\validate\RuleValidate;
use app\index\model\BaseModel;

class Rule extends BaseModel
{
    /**
     * 规则验证
     * Created by Reborn
     * @param null $scene
     * @return array
     * @throws \Exception
     * Date: 2018-12-09
     * Time: 21:11
     */
    public static function ruleVAalidate($scene=null)
    {
        $ruleValidate = new RuleValidate();
        $ruleValidate->doCheck($scene);
        return $ruleValidate->getParamsByRule(input(),$scene);
    }

}