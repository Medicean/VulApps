# VulApps

收集各种漏洞环境，为方便使用，统一采用 Dockerfile 形式。

> 喜欢请点 Star，如果不打算贡献，千万别 Fork

本项目 GitHub 地址: [https://github.com/Medicean/VulApps](https://github.com/Medicean/VulApps)

[DockerHub 在线镜像地址](https://hub.docker.com/r/medicean/vulapps/)

## 获取并使用相关镜像

> 直接使用 docker 命令拉取相关镜像，并启动。需要查看相关环境的 tag

以 Struts2 S2-037 漏洞环境为例：

1. 获取镜像：

 ```
docker pull medicean/vulapps:s_struts2_s2-037
 ```

 > 如果获取速度慢，推荐使用 [中科大 Docker Mirrors](https://lug.ustc.edu.cn/wiki/mirrors/help/docker)

2. 创建并启动容器

 ```
docker run -d -p 80:8080 medicean/vulapps:s_struts2_s2-037
 ```

 > 说明： 
 >
 > -d 表示守护形式后台一直运行该容器
 >
 > -p 80:8080 Dockerfile 中暴露了容器的 8080 端口，将其映射到本机的 80 端口
 >
 > 其它选项请根据自己实际情况运行。

## 镜像 Tag 及路径命名规则

1. 路径

 `/组件首字母/组件名/具体漏洞名`

2. Tag

 **路径名全小写，路径分割符一率替换为下划线**

 **例如：**

  Struts2 S2-037 漏洞环境，路径为 [/s/struts2/s2-037](./s/struts2/s2-037) , 所以 Tag 为：`s_struts2_s2-037`

## 组件首字母

* [B](#b)
* [O](#o)
* [S](#s)
* [W](#w)

## 漏洞环境

### [B](./b/)<div id="b"></div>

* [Bash](./b/bash/)

### [O](./o/)<div id="o"></div>

* [OpenSSL](./o/openssl/)

### [S](./s/)<div id="s"></div>

* [Struts2](./s/struts2/)

### [W](./w/)<div id="w"></div>

* [WordPress](./w/wordpress/)
