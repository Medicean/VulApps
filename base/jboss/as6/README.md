## JBOSS AS6 环境

> 后续相关 PHP 环境基础镜像

### 信息

类型 | 值
:-:|:-:
JBoss 版本| 6.1.0.Final
物理路径 | `/jboss-6.1.0.Final`
JBoss管理用户名 | admin 
JBOSS_PASS | admin123
JAVA_HOME  | `/usr/lib/jvm/java-6-oracle`
JBOSS 端口 | 8080

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:base_jboss_as6
 ```

2. 启动环境

 ```
$ docker run -d -p 8080:8080 medicean/vulapps:base_jboss_as6
 ```
 > `-p 8080:8080` 前面的 8080 代表物理机的端口，可随意指定。 
