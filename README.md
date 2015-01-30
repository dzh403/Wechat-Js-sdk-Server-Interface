采用PHP语言编写的微信JS-SDK签名权限接口与openid用户信息查询接口。

* Author David dzh403@gmail.com
* Version 1.1

功能简述 [Function Description]

*  支持全局缓存,access_token与jsapi_ticket
*  支持jsonp的调用（调用时须带callback参数）
*  通过分享页面Link的传入，实现为一个微信公众号提供所有JS-SDK分享签名
*  支持openid查询用户信息

依赖 [Dependencies]

接口文件使用的域名必须在［微信JS接口安全域名］中设置

基本设置步骤 [The basic setup steps] 

* 将接口文件放在微信JS接口安全域名的服务器中；
* 在config.php中输入微信公众平台的APPID与SECRET；

微信JS-SDK签名权限接口使用说明 [Signed permission Wechat JS-SDK interface setup steps] 

* 调用地址：get_js_token.php?url=[url]&callback=[callback]
* 调用方式：GET
* 调用参数1：[url] 为必填参数   
* 调用参数2：[callback] 为Jsonp调用时必选项,参数为任意字符
* 当传入页面Link为无参数时，可直接提交（如：http://www.dzhcn.cn)；
* 当传入页面Link为有参数时，Link须URL编码；
* 返回示例: 

{"code":1,"info":"ok","data":{"appId":"appid","nonceStr":"","timestamp":0000,"url":"http://www.dzhcn.cn","signature":"","rawString":""}}



Openid获取用户信息接口 [Get the user information by openid]

* 调用格式：get_userinfo.php?openid=[openid]&callback=[callback]
* 调用方式：GET
* 调用参数1：[openid] 为必填参数   
* 调用参数2：[callback] 为Jsonp调用时必选项,参数为任意字符
* 返回示例:

{"code":1,"info":"ok","data":{"subscribe":1,"openid":"xxxx","nickname":"xxxxx","sex":1,"language":"zh_CN","city":"xxxx","province":"xxxx","country":"xxxx","headimgurl":"http:\/\/wx.qlogo.cn\/mmopen\/b7yYPAxusiaxs","subscribe_time":1413195917,"remark":""}}

提示信息 [Message]

* code＝1  成功 [Success]
* code＝0  失败 [Failure]
