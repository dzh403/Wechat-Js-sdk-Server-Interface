# README #

1.微信公众号JS分享，服务端认证获取PHP接口。
2.本接口支持jsonp的调用，调用时须带callback参数。
3.本接口已全局缓存,access_token与jsapi_ticket;
4.接口返回值
{"appId":"appid","nonceStr":"","timestamp":0000,"url":"http://www.abc.com","signature":"","rawString":""}

* Version 
   v1.0

* Summary of set up

1.在php中设置微信公众平台的APPID与SECRET；
2.当活动页面的地址，为无参Link时，可直接提交（如：http://www.dzhcn.cn)；如为有参Link，Link须URL编码；

* Dependencies
  接口文件使用用的域名必须在［微信JS接口安全域名］中设置