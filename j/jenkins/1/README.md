## Jenkins 「Java 反序列化」过程远程命令执行漏洞(CVE-2015-8103)

### 说明

 FoxGlove 安全研究团队于2015年11月06日在其博客上公开了一篇关于常见 Java 应用如何利用反序列化操作进行远程命令执行的文章。文中提到了2015年1月 AppSec2015 上一个关于各语言序列化操作利用议题《Marshalling Pickles》，其中介绍了 Ruby、Python、PHP 和 Java 中反序列化操作的危害，详细说明了 Java 中如何使用 Apache Commons Collections 这个常用库来构造 POP 链（类ROP链）来进行任意命令执行，并且提供了相应的 Payload 生成工具 – ysoserial。

 原博文所提到的 WebSphere，WebLogic，JBoss，Jenkins 和 OpenNMS 等 Java 应用都使用了 `Apache Commons Collections` 这个库，并且都存在一个序列化对象数据交互接口能够被访问到。针对每个应用，博文都提供了相应的分析和验证代码来说明 Java 应用存在远程命令执行的普遍性。

### 漏洞信息

 * [What Do WebLogic, WebSphere, JBoss, Jenkins, OpenNMS, and Your Application Have in Common? This Vulnerability.](https://foxglovesecurity.com/2015/11/06/what-do-weblogic-websphere-jboss-jenkins-opennms-and-your-application-have-in-common-this-vulnerability/)
 * [Jenkins “Java 反序列化”过程远程命令执行漏洞](https://www.seebug.org/vuldb/ssvid-89725)
 * [FoxGlovesec JavaUnserializeExploits](https://github.com/foxglovesec/JavaUnserializeExploits)
 * [Java反序列化漏洞执行命令回显实现及Exploit下载](http://www.freebuf.com/sectool/88908.html)

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:j_jenkins_1
 ```

2. 启动环境

 ```
$ docker run -d -p 8080:8080 -p 50000:50000 medicean/vulapps:j_jenkins_1
 ```
 > 8080 为 Jenkins web 管理端口
 >
 > 50000 为 Jenkins SLAVE AGENT 端口

 访问 `http://你的 IP 地址:8080/`，看到 Jenkins Web 管理界面即代表启动成功

### 使用与利用

#### PoC

控制台下执行：

```
$ python poc.py http://127.0.0.1:8080/
```

> 参数为 Jenkins 的 Web 地址

如果看到如下结果则表示存在该漏洞：

```
[+] Send request to find CLI listener port from response headers
[+] Found CLI listener port: "50000"
[+] Connecting CLI listener 127.0.0.1:50000
[+] Sending handshake headers
[+] Sending payload...
[+] Check result...
[+] http://127.0.0.1:8080/ is Vulnerable
```

> 由于该命令执行无回显，使用的是 DNSLog 的方式来将无回显的命令执行转为有回显，可能会因为网络访问问题造成误漏报。

#### Exp

 * [FoxGlovesec JavaUnserializeExploits](https://github.com/foxglovesec/JavaUnserializeExploits)
 * [Java反序列化漏洞执行命令回显实现及Exploit下载](http://www.freebuf.com/sectool/88908.html)
