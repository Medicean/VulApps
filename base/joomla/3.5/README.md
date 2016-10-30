## Joomla! 3.5 环境

> 后续相关 Joomla! 3.5 漏洞环境基础镜像

### 信息

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | root
/administrator/ | admin | admin123


### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:base_joomla_3.5
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:base_joomla_3.5
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

