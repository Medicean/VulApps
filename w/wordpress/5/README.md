## WordPress 4.7.0/4.7.1 REST API 内容注入漏洞

### 漏洞信息

 WordPress 是一种使用 PHP 语言开发的博客平台，用户可以在支持 PHP 和 MySQL 数据库的服务器上架设属于自己的网站。也可以把 WordPress 当作一个内容管理系统（CMS）来使用。从 4.7.0 版本开始，WordPress 集成了 REST API 插件的功能。近日，一个由 REST API 引起的漏洞被披露，远程攻击者可利用该漏洞在无认证情况下查看、修改、删除、甚至创建新的文章。

### 影响版本

WordPress 4.7.0
WordPress 4.7.1 

### 镜像信息

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | root
/wp-admin/ | admin | admin123

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:w_wordpress_5
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:w_wordpress_5
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

 访问 http://127.0.0.1:8000 看到 WordPress 主界面代表启动成功

### 相关链接

* https://www.seebug.org/vuldb/ssvid-92637
* https://blog.sucuri.net/2017/02/content-injection-vulnerability-wordpress-rest-api.html 
* https://wordpress.org/news/2017/01/wordpress-4-7-2-security-release/ 
* https://www.exploit-db.com/exploits/41223/ 
