# VulApps

收集各种漏洞环境，为方便使用，统一采用 Dockerfile 形式。

> 喜欢请点 Star，如果不打算贡献，千万别 Fork

本项目 DockerHub 在线镜像地址: [https://hub.docker.com/r/medicean/vulapps/](https://hub.docker.com/r/medicean/vulapps/)

## 获取相关镜像

> 直接使用 docker 命令拉取相关镜像，需要查看相关环境的 tag

例如获取 Struts2 S2-037 镜像：

```
docker pull medicean/vulapps:s_struts2_s2-037
```

## 镜像 Tag 命名规则

**路径名全小写，路径分割符一率替换为下划线**

**例如：**

 Struts2 S2-037 漏洞环境，路径为 [/s/struts2/s2-037](./s/struts2/s2-037) ,所以 Tag 为：`s_struts2_s2-037`

## 组件首字母

* [S](#s)

## 漏洞环境

### [S](./s/)<div id="s"></div>

* [Struts2](./s/struts2/)

