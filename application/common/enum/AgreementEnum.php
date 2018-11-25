<?php
/**
 * Created by PhpStorm.
 * User: river
 * Date: 2018/5/3
 * Time: 15:42
 */

namespace app\common\enum;


class AgreementEnum
{

    const status_normal=1; //1---正常
    const status_future=2; //2---即将生效
    const status_suspend=3; // 3---合约暂停
    const status_overdue=4; //4---合约过期
    const status_cease=5; // 5---合约终止
    const status_abolish=6; // 6---合约废除

    const contracttype_initial=1; //1---初始合约
    const contracttype_delegate=2; //2---转授权合约

    const ispause_normal=1; //1--正常
    const ispause_suspend=2; //2--暂停

    const updated_normal=1; //1--正常
    const updated_renew=2;  //2--带更新
    const updated_delegate=3;  //3--待重新授权

}