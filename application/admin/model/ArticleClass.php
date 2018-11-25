<?php
/**
 * 文章分类
 * User: reborn
 * Date: 2018/7/26
 * Time: 16:02
 */

namespace app\admin\model;
use app\admin\service\ArticleClass as ArticleClassService;

class ArticleClass extends BaseModel
{
    /**
     * 获取文章分类
     * @return false|\PDOStatement|string|\think\Collection
     */
    public static function index()
    {
        $limit=input('limit','10');
        return self::where('delete',1)->paginate($limit);
    }

    /**
     * 增加文章分类
     * @return \think\response\Json
     */
    public static function addArticle()
    {
        $data=ArticleClassService::setArticleClassValidate('add');
        $res  = self::create($data);
        return resultType($res,'增加文章分类',8000);
    }

    /**
     * 根据id获取所属分类
     * @return false|\PDOStatement|string|\think\Collection
     */
    public static function getArticleById()
    {
        $id=input('id','');
        return self::where(['id'=>$id,'delete'=>1])->find();
    }

    /**
     * 更新分类
     * @return \think\response\Json
     */
    public static function upArticle()
    {
        $data=ArticleClassService::setArticleClassValidate('edit');
        $res  = self::update($data,'',true);
        return resultType($res,'更新文章分类',8001);
    }

    /**
     * 删除分类
     * @return \think\response\Json
     */
    public static function delArticle()
    {
        $data['id']=input('id','');
        $data['delete']=0;
        $res  = self::update($data,'',true);
        return resultType($res,'删除文章分类',8002);
    }
}














