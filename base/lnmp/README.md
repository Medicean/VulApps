## Ubuntu-lnmp 环境

> 后续相关 PHP 环境基础镜像

### 信息

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | root

网站根目录 `/html/` 或 `/usr/share/nginx/html`

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:base_lnmp
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:base_lnmp
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 
