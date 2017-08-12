## SSH 命令注入漏洞(CVE-2017-1000117)

### 漏洞信息

恶意人员可以通过巧妙构造 `ssh://…` 链接，让受害人在执行程序等情况下访问该恶意链接，从而达到命令执行的目的。

### 影响范围

#### 修复版本

* Git v2.14.1、2.7.6、v2.8.6、v2.9.5、v2.10.4、v2.11.3、v2.12.4 和 v2.13.5

### 镜像信息

类型 | 值
:-:|:-:
Git | 1.9.1
HTTP 端口 | 80
镜像 tag | `s_ssh_1`

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:s_ssh_1
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:s_ssh_1
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

 访问 http://127.0.0.1:8000 

### POC

本环境中，模拟了远程导入仓库的情景。在该场景下攻击者可远程执行命令。配合本环境所使用的远程 PoC 仓库为：[https://github.com/VulApps/CVE-2017-1000117.git](https://github.com/VulApps/CVE-2017-1000117.git)

1. 修改并提交远程 PoC 仓库的 [payload](https://github.com/VulApps/CVE-2017-1000117/blob/master/payload) 文件，内容为将要执行的命令

 本例中执行的命令为:

 ```
id > /var/www/html/vul
 ```

 > 若命令执行成功，则会在 `/var/www/html` 目录下生成 `vul` 文件，内容为 `id` 命令的执行结果(实际使用时可直接反弹 Shell)


2. 访问目标页面，并填写要 import 的仓库地址

 > 假如目标地址为： http://127.0.0.1:32774/

 ![](https://github.com/Medicean/VulApps/raw/master/s/ssh/1/poc-1.png)

3. 点击 import 之后，访问 `http://127.0.0.1:32774/vul`，看到执行结果

 ![](https://github.com/Medicean/VulApps/raw/master/s/ssh/1/poc-2.png)

### 相关链接

* [VulApps/CVE-2017-1000117](https://github.com/VulApps/CVE-2017-1000117.git)
* [SSH 命令注入漏洞(CVE-2017-1000117)分析](http://bobao.360.cn/learning/detail/4244.html)
* [多款主流版本控制系统被曝存在客户端任意代码执行漏洞](http://m.bobao.360.cn/news/detail/4260.html)
* [A PoC Repository for CVE-2017-1000117](https://gitlab.com/joernchen/CVE-2017-1000117)
* [CVE-2017-1000117 - PoCs](https://github.com/Manouchehri/CVE-2017-1000117)
