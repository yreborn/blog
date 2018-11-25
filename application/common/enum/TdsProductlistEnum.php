<?php
/**
 * Created by River
 * User: River
 * Time: 2018/3/15 上午10:43
 *
 */

namespace app\common\enum;


class TdsProductlistEnum
{
    const prodtype_line=1;//产品类型 线路
    const prodtype_spot=2;//产品类型 景区
    const prodtype_hotel=3;//产品类型 酒店
    const prodtype_guide=4;//产品类型 导游
    const prodtype_car=5;//产品类型 车辆
    const prodtype_bundled=6;//产品类型 捆绑

    const type_self=1;//销售类型 自营
    const type_agent=2;//销售类型 代理

    const status_normal=1;//此条记录状态 正常
    const status_suspend=0;//此条记录状态 暂停保单

    const statuscontract_suspend=0;//此条记录合约的状态 合约暂停
    const statuscontract_normal=1;//此条记录合约的状态 正常

    const statussupp_off=0;//此产品状态 下架
    const statussupp_normal=1;//此产品状态 正常
    const statussupp_in=2;//此产品状态 审核中
    const statussupp_out=3;//此产品状态 审核失败

    const statusadmin_frozen=0;//此产品平台状态 平台冻结
    const statusadmin_normal=1;//此产品平台状态 正常

    const trashflag_normal=1;//逻辑删除符  正常
    const trashflag_del=0;//逻辑删除符 逻辑删除

}