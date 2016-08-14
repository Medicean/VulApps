## WordPress 4.5 环境

> 后续相关 WordPress 漏洞环境基础镜像

### 信息

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | root
/wp-admin/ | admin | admin123


### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:base_wordpress
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:base_wordpress
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

### 命令行下安装并启用插件

以 `double-opt-in-for-download` 为例：

1. 解压插件到 `/wp-content/plugins/` 目录
 ```
 $ unzip -x /tmp/double-opt-in-for-download.2.0.9.zip -d /var/www/html/wp-content/plugins/
 ```
2. 启用插件
```
$ wp --path=/var/www/html/ plugin activate double-opt-in-for-download --allow-root
```
