<?php

/**
 * Created by PhpStorm.
 * User: test
 * Date: 2018/7/9
 * Time: 16:34
 */
namespace app\admin\model;
use think\Model;
use app\admin\model\User as UserModel;

class BaseModel extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $insert=['createby','updateby','userid'];
    protected $update=['updateby'];

    //插入userid
    public function setUseridbyAtte()
    {
        return UserModel::getCurrentUserId();
    }

    //插入
    public function setCreatebyAttr()
    {
        return UserModel::getCurrentUserId();
    }

    //更新
    public function setUpdatebyAttr()
    {
        return UserModel::getCurrentUserId();
    }


}