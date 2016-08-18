Zabbix 2.2.x/3.0.x latest.php SQL 注入漏洞

### 漏洞信息

 * [Zabbix 2.2.x / 3.0.x - SQL Injection](https://www.exploit-db.com/exploits/40237/)

 `latest.php` 文件中 `toggle_ids` 数组的输入，导致 SQL 注入。此注入漏洞需要登录使用，zabbix 默认开启 Guest 用户。

### 镜像信息

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | zabbix
/ | admin | zabbix


### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:z_zabbix_2
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:z_zabbix_2
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

### PoC 使用

> 本例中使用 [Zabbix 2.2.x / 3.0.x latest.php SQL 注入检测 PoC](http://www.bugscan.net/source/plugin/4594/template/)


1. 下载并安装 `BugScan SDK`

 详见 [BugScan 插件开发文档 - 环境配置](http://doc.bugscan.net/chapter1/1-1.html)

2. 修改 `poc.py` 中地址为容器地址

 ```
if __name__ == '__main__':
    from dummy import *
    audit(assign(fingerprint.wordpress, "http://localhost:8000")[1])

 ```

3. 修改 poc 中 `Cookie`(如果开启了 Guest 则不需要修改，默认开启)

4. 运行 `poc.py`

 ```
$ python poc.py
 ```
