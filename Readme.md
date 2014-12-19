#御坂网络树洞 Misaka_Network
---


###简介 Discription
御坂网络树洞是一款基于新浪微博和人人网的匿名消息发布程序，用户可以通过树洞以公共账号的名义发布匿名消息。  
Misaka Network is a program to post annoymous status on Sina Weibo and Renren.
###更新日志 Update Log
如果你想要查看更新日志，请访问update.html  
If you want to see update log, please visit update.html
###部署 Deploy
御坂网络树洞的部署仅需要一台服务器。服务器需要安装 php，并且需要支持curl特性。推荐的 php 版本是 5.4。另外，你需要修改 Verify.php 中的新浪微博和人人网的 access_token 以使得消息可以以具体的账号发布，获取 access_token 的方法请参考新浪微博和人人网的开放SDK。同样的，为了使验证码功能工作正常，你需要获取[点触验证码](http://www.touclick.com/)的 public_key 和 private_key。  


The deployment of Misaka Network only requires a php server which supports curl feature. PHP 5.4 is recommended. Otherwise, you need to modify access_token in the file of Verify.php in order to make status posted in your own account. I use [TouchClick](http://www.touclick.com/) for CAPTCHA function. You may need to get your own public_key and private_key. (TouchClick only provides Chinese user interface. You may need to change the whole CAPTCHA function if your users mostly speak English.)

###许可 Licence
御坂网络树洞基于 MIT License 发布。详见 [MIT LICENSE](http://opensource.org/licenses/MIT)。  
Misaka_Network Project is under MIT License. Visit [MIT LICENSE](http://opensource.org/licenses/MIT) for details.

---
>如果你发现了项目的任何BUG，请提交Issue，我会尽快解决这些问题。  
If you found any bug of the project, please submit the issue on Github, and I'll fix it soon.

---
>如果你对项目有任何问题以及意见建议，请发送邮件到dsh0416@gmail.com，我很乐意听到这些。  
If you have any problem, please DON'T hesitate to let me know. Please send e-mail to dsh0416@gmail.com, and I'll be willing to help you.

