<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/9/11
 * Time: 14:34
 */

namespace app\index\model;


class ArticleClass extends BaseModel
{

    /**
     * 获取产品类
     * Created by Reborn
     * @return array|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * Date: 2018-12-17
     * Time: 22:30
     */
    public static function articleClass()
    {
        $where[]=['delete','=',1];
        return self::where($where)->select();
    }
}