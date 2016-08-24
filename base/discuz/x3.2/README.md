## Discuz! x3.2 环境

> 后续相关 Discuz! x3.2 漏洞环境基础镜像

### 信息

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | root
/admin.php | admin | admin123


### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:base_discuz_x3.2
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:base_discuz_x3.2
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

