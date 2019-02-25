## WordPress 5.0.0 远程代码执行漏洞(CVE-2019-8942 CVE-2019-8943)

### 漏洞信息

2月19日，Rips在博客上披露了一个关于Wordpress 5.0.0远程代码执行漏洞（https://blog.ripstech.com/2019/wordpress-image-remote-code-execution/）。该漏洞为CVE-2019-8942和 CVE-2019-8943组合漏洞，漏洞代码在Wordpress核心中已存在了6年。

漏洞由三部分构成：

(核心问题) PostMeta可以被覆盖。攻击者可以控制POST中meta_input字段的值，从而自由更改wp_postmeta表中的meta_key与meta_value的值。

更新附件时，攻击者可自由设置对应附件的`_wp_attached_file`的值，并结合裁剪功能实现目录穿越，从而将恶意图片保存到任意目录。

更新文章时，攻击者可以自由设置文章的`_wp_page_template`的值，并结合模板功能实现本地文件包含，从而最终造成代码执行。

> 来源: [Wordpress 5.0.0 远程代码执行漏洞分析与复现](https://paper.seebug.org/825/)

### 影响版本

WordPress <= 5.0.0

### 镜像信息

> 来源: [WordPress_4.9.8_RCE_POC](https://github.com/brianwrf/WordPress_4.9.8_RCE_POC)

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | root
/wp-admin/ | admin | admin4wp498
/wp-admin/ | author | admin4wp498

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:w_wordpress_7
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:w_wordpress_7
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

 访问 http://127.0.0.1:8000 看到 WordPress 主界面代表启动成功


### POC

参考: [漏洞复现](https://paper.seebug.org/825/#_3)

### 相关链接

* [brianwrf/WordPress_4.9.8_RCE_POC](https://github.com/brianwrf/WordPress_4.9.8_RCE_POC)
* [Wordpress 5.0.0 远程代码执行漏洞分析与复现](https://paper.seebug.org/825/)
