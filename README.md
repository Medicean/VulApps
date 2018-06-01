# VulApps [http://vulapps.evalbug.com/](http://vulapps.evalbug.com/)

收集各种漏洞环境，为方便使用，统一采用 Dockerfile 形式。同时也收集了安全工具环境。

> 喜欢请点 Star，如果不打算贡献，千万别 Fork

本项目 GitHub 地址: [https://github.com/Medicean/VulApps](https://github.com/Medicean/VulApps)

[DockerHub 在线镜像地址](https://hub.docker.com/r/medicean/vulapps/)

## 获取并使用相关镜像

> 直接使用 docker 命令拉取相关镜像，并启动。

**需要查看相关环境的 tag 在Github具体的漏洞目录下查看 README 文件**

### 以 Struts2 S2-037 漏洞环境为例：

通过 S2-037漏洞环境的 [README文件](./s/struts2/s2-037/README.md) 得知 tag 为 `s_struts2_s2-037`

1. 获取镜像：

 ```
docker pull medicean/vulapps:s_struts2_s2-037
 ```

 > 如果获取速度慢，推荐使用 [中科大 Docker Mirrors](https://lug.ustc.edu.cn/wiki/mirrors/help/docker) 或者使用 [阿里云 Mirrors(加速器)](https://cr.console.aliyun.com/#/accelerator)

2. 创建并启动容器

 ```
docker run -d -p 80:8080 medicean/vulapps:s_struts2_s2-037
 ```

访问 `http://127.0.0.1/` 即可访问启动好的 s2-037 环境，快拿出 exp 工具尝试一下吧。

## 组件首字母

* [B](#b)
* [C](#c)
* [D](#d)
* [F](#f)
* [I](#i)
* [J](#j)
* [M](#m)
* [N](#n)
* [O](#o)
* [P](#p)
* [R](#r)
* [S](#s)
* [T](#t)
* [W](#w)
* [Z](#z)

## 安全工具环境

* [巡风](./tools/xunfeng/)
* [Ant(蚁逅)](./tools/ant/)
* [Hawkeye](./tools/hawkeye)

## 漏洞环境

### [B](./b/)<div id="b"></div>

* [Bash](./b/bash/)

### [C](./c/)<div id="c"></div>

* [Cisco](./c/cisco/)
* [CmsEasy](./c/cmseasy/)

### [D](./d/)<div id="d"></div>

* [Drupal](./d/drupal/)

### [F](./f/)<div id="f"></div>

* [FFmpeg](./i/ffmpeg/)

### [G](./g/)<div id="g"></div>

* [Git](./g/git/)

### [I](./i/)<div id="i"></div>

* [ImageMagick](./i/imagemagick/)

### [J](./j/)<div id="j"></div>

* [JBoss](./j/jboss/)
* [Jenkins](./j/jenkins/)
* [Joomla!](./j/joomla/)

### [M](./m/)<div id="m"></div>

* [Memcached](./m/memcached/)

### [N](./n/)<div id="n"></div>

* [Nagios](./n/nagios/)
* [Node.js](./n/nodejs/)
* [Nginx](./n/nginx/)

### [O](./o/)<div id="o"></div>

* [OpenSSL](./o/openssl/)

### [P](./p/)<div id="p"></div>

* [PHPMailer](./p/phpmailer/)

### [R](./r/)<div id="r"></div>

* [Redis](./r/redis/)

### [S](./s/)<div id="s"></div>

* [Samba](./s/samba/)
* [Shiro](./s/shiro/)
* [SSH](./s/ssh/)
* [Spring](./s/spring/)
* [Spring Boot](./s/springboot/)
* [Struts2](./s/struts2/)
* [Spring WebFlow](./s/springwebflow/)
* [Supervisor](./s/supervisor/)

### [T](./t/)<div id="t"></div>

* [Tomcat](./t/tomcat/)

### [W](./w/)<div id="w"></div>

* [WordPress](./w/wordpress/)

### [Z](./z/)<div id="z"></div>

* [Zabbix](./z/zabbix/)

---

## 同类项目

* [phith0n/vulhub](https://github.com/phith0n/vulhub)

## 相关链接

* [如何参与VulApps](./.github/CONTRIBUTING.md)
* [致谢列表](./THANKS.md)
