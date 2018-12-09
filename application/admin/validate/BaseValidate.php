<?php

/**
 * 基础验证器
 * User: reborn
 * Date: 2018/7/10
 * Time: 15:45
 */
namespace app\admin\validate;

use think\Validate;
use think\facade\Request;

class BaseValidate extends Validate
{
    /**
     * 验证器 适合全局自定义验证
     * Created by Reborn
     * @param null $scene 场景
     * @return bool
     * @throws \Exception
     * Date: 2018-12-06
     * Time: 23:07
     */
    public function doCheck($scene=null)
    {
        $request=Request::instance();
        $params=$request->param();

        //判断是否存在场景验证
        if (!$this->scene($scene)->check($params)) {
            exception($this->getError(), 500,'\think\exception\ValidateException');
        }else{
            return true;
        }
    }


    /**
     * 通过验证规则获取参数
     * @param array $arr
     * @param null $scene
     * @return array
     */
    public function getParamsByRule($arr=[],$scene=null)
    {
        //根据参数验证规则 获取过滤的数据
        $newArr=[];
        if ($scene){
            //场景验证获取数据
            foreach ($this->scene[$scene] as $key=>$value){
                $newArr[$value]=$arr[$value];
            }
        }else{
            //直接获取数据
            foreach ($this->rule as $key=>$value){
                $newArr[$value[0]]=$arr[$value[0]];
            }
        }
        //返回按照验证规则过滤好的数据
        return $newArr;
    }
}