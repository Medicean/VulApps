## Ubuntu-lamp PHP7 环境

> 后续相关 PHP7 环境基础镜像

### 信息

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | root


### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:base_lamp_php7
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:base_lamp_php7
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 
