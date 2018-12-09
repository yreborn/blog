<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use phpmailer\PHPMailer\PHPMailer;
use think\facade\Session;

//$res 对数据库操作的状态 $operate操作名称   $code 失败状态码 $data 需要传的参数
function resultType($res,$operate,$code=0,$data='')
{
    if ($res == false){
        return result_data($operate.'失败',$code);
    }
    return result_data($operate.'成功',200);
}

//返回信息
function result_data($msg,$code=200,$data='')
{
    return json(['msg'=>$msg,'code'=>$code,'data'=>$data],200);
}


//发送邮件
 function sendemali($data = [])
{
    $mail = new PHPMailer(); //实例化
    $mail->IsSMTP(); // 启用SMTP
    $mail->Host = 'smtp.qq.com'; //SMTP服务器 以qq邮箱为例子
    $mail->Port = 465; //邮件发送端口
    $mail->SMTPAuth = true; //启用SMTP认证
    $mail->SMTPSecure = "ssl"; // 设置安全验证方式为ssl
    $mail->CharSet = "UTF-8"; //字符集
    $mail->Encoding = "base64"; //编码方式
    $mail->Username = '1395518942@qq.com'; //发件人邮箱
    $mail->Password = 'ittmeikuphibgjdi'; //发件人密码 ==>重点：是授权码，不是邮箱密码
    $mail->Subject = '邮箱注册激活验证'; //邮件标题
    $mail->From = '1395518942@qq.com'; //发件人邮箱
    $mail->FromName = 'reborn'; //发件人姓名
    if ($data && is_array($data)) {
        $mail->AddAddress($data['user_email']); //添加收件人
        $mail->IsHTML(true); //支持html格式内容
        $mail->Body = $data['content']; //邮件主体内容
        //发送成功就删除
        if ($mail->Send()) {
            //echo "Mailer Error: ".$mail->ErrorInfo;// 输出错误信息,用以邮件发送不成功问题排查
            $this->success('发送成功', $data['successUrl']);
        } else {
            $this->error('发送失败',$data['errorUrl']);
        }
    }
}

//格式化菜单
function arraySort($arr,$pid){

    $list=array();
    $i = 0;
    foreach ($arr as $key=>$val){
        if($val['pid'] == 0){
            $list[$val['id']]['id'] =  $val['id'];
            $list[$val['id']]['line'] = $val['line'];
            $list[$val['id']]['name'] = $val['name'];
            $list[$val['id']]['pid'] = $val['pid'];
        }
        foreach ($pid as $k => $v) {
            if ($val['pid'] == $v) {
                $list[$v]['submenu'][$i]['id'] = $val['id'];
                $list[$v]['submenu'][$i]['line'] = $val['line'];
                $list[$v]['submenu'][$i]['name'] = $val['name'];
                $list[$v]['submenu'][$i]['pid'] = $val['pid'];
                $list[$v]['submenu'][$i]['isshow'] = $val['isshow'];
                $i++;
            }
        }
    }

    return $list;
}

//设置登录缓存
function setLoginSession($res){
    $name='index-userlogin';
    if (is_array($res)){
        $data=json_encode($res);
    }
    Session::set($name,$data,'index');
}

//表格数据
function to_json($code=0,$msg='获取成功',$res=[])
{
    $count = 0;
    $data = [];
    if (is_array($res)) {
        if (array_key_exists('count', $res)) {
            $count = $res['count'];
        } else {
            $count = 0;
        }
        if (array_key_exists('data', $res)) {
            $data = $res['data'];
        } else {
            $data = $res;
        }
    } else if ($res == null) {
        $count = 0;
        $data = [];
    } else if (is_object($res)) {
        if (method_exists($res, 'total')) {
            $count = $res->total();
        } else {
            $count = 0;
        }
        if (method_exists($res, 'items')) {
            $data = $res->items();
        } else {
            $data = $res;
        }
    }

    $result = [
        'code' => $code,
        'msg' => $msg,
        'count' => $count,
        'data' => $data
    ];

    return json($result, 200);
}

/**
 * 规则数组
 * Created by Reborn
 * @param $data
 * @return array
 * Date: 2018-12-09
 * Time: 22:10
 */
function ruleData($data)
{
    $res=[];
    foreach ($data as $val){
        $exdata=explode(',',$val);
        $res=array_merge($res,$exdata);
    }
    return array_unique($res);
}














