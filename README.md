# README #
采用PHP语言编写的微信JS-SDK权限签名算法接口。

* Author David dzh403@gmail.com
* Version 1.0

Interface Features
* 支持全局缓存,access_token与jsapi_ticket
* 支持jsonp的调用（调用时须带callback参数）
* 通过分享页面Link的传入，实现为一个微信公众号提供所有JS-SDK分享签名

Interface Example
{"appId":"appid","nonceStr":"","timestamp":0000,"url":"http://www.dzhcn.cn","signature":"","rawString":""}


Summary of set up
* 将接口文件放在微信JS接口安全域名的服务器中；
* 在php中输入微信公众平台的APPID与SECRET；
* 当传入页面Link为无参数时，可直接提交（如：http://www.dzhcn.cn)；
* 当传入页面Link为有参数时，Link须URL编码；

Dependencies
* 接口文件使用的域名必须在［微信JS接口安全域名］中设置
