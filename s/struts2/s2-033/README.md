## Struts2 S2-033 漏洞环境

### 说明

 官方 demo 中提供的 war 包由于添加了 jsp 拦截器，配置会有问题，修正了一下。

### 漏洞信息

 * [S2-033 官方公告](http://struts.apache.org/docs/s2-033.html)

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:s_struts2_s2-033
 ```

2. 启动环境

 ```
$ docker run -d -p 80:8080 medicean/vulapps:s_struts2_s2-033
 ```
 > `-p 80:8080` 前面的 80 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`
