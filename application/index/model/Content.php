<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/9/11
 * Time: 13:42
 */

namespace app\index\model;

use app\index\logic\Content as ContentLogic;
class Content extends BaseModel
{
    /**
     * 获取所有的文章
     * Created by Reborn
     * 适用版本 v1.1
     * @return \think\Paginator
     */
    public static function getContent($recommend=null)
    {
        $where=ContentLogic::condition($recommend);
        dump('123');
        return self::relation('getUser,getArticleClass')->where($where)->order('id','desc')->paginate('10',false,['query'=>input()]);
    }

    /**
     * 获取当前文章
     * Created by Reborn
     * 适用版本 v1.1
     * @return array|false|\PDOStatement|string|\think\Model
     */
    public static function getContentinfo()
    {
        $where['delete']=1;
        $where['id']=input('id','');
        return self::relation('getUser,getArticleClass')->where($where)->find();
    }

    /**
     * 阅读数数量
     * Created by Reborn
     * 适用版本 v1.1
     * @return $this
     */
    public static function upReadnum()
    {
        $where['delete']=1;
        $where['id']=input('id','');
        return self::where($where)->inc('readnum',1)->update();
    }

    /**
     * 获取用户名称
     * Created by Reborn
     * 适用版本 v1.1
     * @return $this
     */
    public function getUser()
    {
       return $this->belongsTo('user','userid','id')->field('id,user_name,image')->where('delete',1);
    }

    /**
     * 获取文章分类
     * Created by Reborn
     * 适用版本 v1.1
     * @return $this
     */
    public function getArticleClass()
    {
        return $this->belongsTo('article_class','articleid','id')->field('id,classname')->where('delete',1);
    }
}