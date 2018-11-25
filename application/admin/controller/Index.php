<?php
namespace app\admin\controller;

use app\admin\model\Index as IndexModel;

class Index extends BaseController
{
    //首页
    public function index()
    {
        $count=IndexModel::index();
        return $this->fetch('',compact('count'));
    }

}
