## CmsEasy_5.6_UTF-8_20160825 环境

> 后续相关 CmsEasy 漏洞环境基础镜像

### 信息

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | root
/admin | admin | admin123


### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:base_cmseasy_5_6_20160825
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:base_cmseasy_5_6_20160825
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

