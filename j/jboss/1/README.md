## JBoss 「Java 反序列化」过程远程命令执行漏洞(CVE-2015-8103)

### 说明

 FoxGlove 安全研究团队于2015年11月06日在其博客上公开了一篇关于常见 Java 应用如何利用反序列化操作进行远程命令执行的文章。文中提到了2015年1月 AppSec2015 上一个关于各语言序列化操作利用议题《Marshalling Pickles》，其中介绍了 Ruby、Python、PHP 和 Java 中反序列化操作的危害，详细说明了 Java 中如何使用 Apache Commons Collections 这个常用库来构造 POP 链（类ROP链）来进行任意命令执行，并且提供了相应的 Payload 生成工具 – ysoserial。

 原博文所提到的 WebSphere，WebLogic，JBoss，Jenkins 和 OpenNMS 等 Java 应用都使用了 `Apache Commons Collections` 这个库，并且都存在一个序列化对象数据交互接口能够被访问到。针对每个应用，博文都提供了相应的分析和验证代码来说明 Java 应用存在远程命令执行的普遍性。

### 漏洞信息

 * [JBoss “Java 反序列化”过程远程命令执行漏洞](https://www.sebug.net/vuldb/ssvid-89723)
 * [What Do WebLogic, WebSphere, JBoss, Jenkins, OpenNMS, and Your Application Have in Common? This Vulnerability.](https://foxglovesecurity.com/2015/11/06/what-do-weblogic-websphere-jboss-jenkins-opennms-and-your-application-have-in-common-this-vulnerability/)
 * [常见 Java Web 容器通用远程命令执行漏洞](https://www.seebug.org/vuldb/ssvid-89713)
 * [FoxGlovesec JavaUnserializeExploits](https://github.com/foxglovesec/JavaUnserializeExploits)
 * [Java反序列化漏洞执行命令回显实现及Exploit下载](http://www.freebuf.com/sectool/88908.html)

### 镜像默认信息

类型 | 值
:-:|:-:
JBoss 版本| 6.1.0.Final
物理路径 | `/jboss-6.1.0.Final`
JBoss管理用户名 | admin 
JBOSS_PASS | admin123
JAVA_HOME  | `/usr/lib/jvm/java-6-oracle`
JBOSS 端口 | 8080

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:j_jboss_1
 ```

2. 启动环境

 ```
$ docker run -d -p 8080:8080 medicean/vulapps:j_jboss_1
 ```
 > 8080 为 JBoss 管理端口

 访问 `http://你的 IP 地址:8080/`，看到界面即代表启动成功

 如果需要指定管理员密码，可以在启动时加上参数 `-e JBOSS_PASS=admin123`

### 使用与利用

#### Exp

 1. 使用6哥的Java反序列化利用工具

 ![](https://github.com/Medicean/VulApps/raw/master/j/jboss/1/exp-0.png)

 ![](https://github.com/Medicean/VulApps/raw/master/j/jboss/1/exp-1.png)

 2. 使用 [Jexboss](https://github.com/joaomatosf/jexboss)

 ![](https://github.com/Medicean/VulApps/raw/master/j/jboss/1/exp-2.png)

### 相关链接
 * [Jexboss](https://github.com/joaomatosf/jexboss)
 * [FoxGlovesec JavaUnserializeExploits](https://github.com/foxglovesec/JavaUnserializeExploits)
 * [Java反序列化漏洞执行命令回显实现及Exploit下载](http://www.freebuf.com/sectool/88908.html)
