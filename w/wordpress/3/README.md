## WordPress CYSTEME Finder 1.3 任意文件读取漏洞环境

### 漏洞信息

 * [WordPressCYSTEME Finder 1.3 SQL 注入漏洞](https://www.exploit-db.com/exploits/40295/)

WordPress CYSTEME Finder 插件 1.3 版本中, `php/connector.php` 文件未对访问者cookies进行校验，导致出现任意文件读取漏洞。


### 镜像信息

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | root
/wp-admin/ | admin | admin123


### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

### PoC 使用

运行 `exp.py`，按提示操作。

 ```
$ python exp.py
 ```
