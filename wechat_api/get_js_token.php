<?php
/*
  调用本php后，会获得以下活动
  {"appId":"appid","nonceStr":"","timestamp":0000,"url":"http://www.abc.com","signature":"","rawString":""}
  使用说明：
  1.活动url的域名必须在 微信JS接口安全域名 中；
  2.设置微信公众平台对应的APPID与SECRET；
  3.活动页面的地址，为无参Link时，可直接提交（如：http://www.abc.com)；如为有参Link，Link须URL编码；
  4.本接口支持jsonp的调用，调用时，需带callback参数。
  5.本接口已全局缓存,access_token与jsapi_ticket;
 */

require_once "config.php";
require_once "wx_sdk.php";

//Appid与Secret参数检查
if (empty($appid) || empty($secret)) {
    exit(json_encode(array('code' => 0, 'info' => 'Parameter error')));
}

//需要签名的url参数检测
if (isset($_REQUEST['url'])) {
    $url = $_REQUEST['url'];
} else {
    exit(json_encode(array('code' => 0, 'info' => 'Not Find Url!')));
}

//获取签名
$jssdk = new WX_SDK($appid, $secret);
$signPackage = $jssdk->GetSignPackage($url);

$data=array('code' => 1, 'data' => $signPackage,'info'=>'ok');

//jsonp or json
if (isset($_REQUEST['callback'])) {
    $jsoncallback = $_REQUEST['callback'];
    exit($jsoncallback . '(' . json_encode($data) . ')');
} else {
    exit(json_encode($data));
}

exit;
