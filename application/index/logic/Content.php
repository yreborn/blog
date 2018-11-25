<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/9/11
 * Time: 17:30
 */

namespace app\index\logic;

class Content
{
    /**
     * 判断是否为推荐
     * Created by Reborn
     * 适用版本 v1.1
     * @param string $recommend
     * @return mixed
     */
    public static function condition($recommend=null)
    {
        $where['delete']=1;
        if($recommend){
            $where['recommend']=1;
        }
        return $where;
    }
}