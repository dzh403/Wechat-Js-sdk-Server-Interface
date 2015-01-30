<?php
/*
  获取用户信息
 */
require_once "config.php";
require_once "wx_sdk.php";

//Appid与Secret参数检查
if (empty($appid) || empty($secret)) {
    exit(json_encode(array('code' => 0, 'info' => 'Parameter error')));
}

//openid参数检测
if (isset($_REQUEST['openid'])) {
    $openid = $_REQUEST['openid'];
} else {
    exit(json_encode(array('code' => 0, 'info' => 'NOT FIND OPENID')));
}

//获取用户信息
$jssdk = new WX_SDK($appid, $secret);
$userinfo_res= $jssdk->getUserInfo($openid);

if(!$userinfo_res['code']){
    exit(json_encode($userinfo_res));
}

if(!isset($userinfo_res['data']->openid)){
     exit(json_encode(array('code' => 0, 'info' => 'NOT FIND USERINFO')));
}

//jsonp or json
if (isset($_REQUEST['callback'])) {
    $jsoncallback = $_REQUEST['callback'];
    exit($jsoncallback . '(' . json_encode($userinfo_res) . ')');
} else {
    exit(json_encode($userinfo_res));
}
exit;
