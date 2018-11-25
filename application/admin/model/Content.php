<?php
/**
 * 文本内容
 * User: reborn
 * Date: 2018/7/26
 * Time: 13:40
 */

namespace app\admin\model;

use app\admin\service\Content as ContentService;
use app\admin\service\User as UserService;
class Content extends BaseModel
{
    /**
     * 获取当前用户的文章列表
     * @param $where
     * @return \think\Paginator
     * @throws \think\exception\DbException
     * User: Reborn
     * Date: 2018/11/7 23:16
     */
    public static function index($where)
    {
        $limit = input('limit','10');
        return self::relation('articleClass,getUser')->where($where)->paginate($limit);
    }

    /**
     * 增加文章
     * @return \think\response\Json
     */
    public static function addContent()
    {
        $data=ContentService::setContentValidate('add');
        $data['userid']=UserService::getCurrentUserId();
        $res=self::create($data);
        return resultType($res,'增加文章',7000);
    }

    /**
     * 根据id获取信息
     * @return array|null|\PDOStatement|string|\think\Model
     */
    public static function getContentById()
    {
        $id=input('id','');
        return self::relation('articleClass')->where(['id'=>$id,'delete'=>1])->find();
    }

    /**
     * 更新文章
     * @return \think\response\Json
     */
    public static function upContent()
    {
        $data=ContentService::setContentValidate('edit');
        $res=self::update($data,'',true);
        return resultType($res,'更新文章',7001);
    }

    /**
     * 删除文章
     * @return static
     */
    public static function delContent()
    {
        $data['delete']=0;
        $data['id']=input('id','');
        $res=self::update($data);
        return resultType($res,'删除文章',7002);
    }

    /**
     * 统计文章数量
     * Created by Reborn
     * 适用版本 v1.1
     * @return array
     */
    public static function countContent()
    {
        $where['delete']=1;
        $res=UserService::getUserRole();
        if($res!=1){
            $where['userid']=UserService::getCurrentUserId();
        }
        return self::where($where)->count('id');
    }

    /**
     * 关联查询
     * @return $this
     */
    public function articleClass()
    {
        return $this->belongsTo('ArticleClass','articleid','id')->field('id,classname')->where('delete',1);
    }

    /**
     * 关联用户
     * Created by Reborn
     * 适用版本 v1.1
     * @return $this
     */
    public function getUser()
    {
        return $this->belongsTo('user','userid','id')->field('id,user_name')->where('delete',1);
    }
}



















