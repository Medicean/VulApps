## WordPress CYSTEME Finder 1.3 任意文件读取漏洞环境

### 说明

感谢 [@Jeremy-is-here](https://github.com/Jeremy-is-here)

### 漏洞信息

 * [WordPress Plugin CYSTEME Finder 1.3 - Arbitrary File Disclosure/Arbitrary File Upload](https://www.exploit-db.com/exploits/40295/)

WordPress CYSTEME Finder 插件 1.3 版本中, `php/connector.php` 文件未对访问者cookies进行校验，导致出现任意文件读取漏洞。


### 镜像信息

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | root
/wp-admin/ | admin | admin123


### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:w_wordpress_3
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:w_wordpress_3
 ```

 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

### PoC/EXP 使用

1. 修改 exp.py 中的 `TARGET_HOST`

2. 运行 `exp.py`，按提示操作。

 ```
$ python exp.py
 ```
