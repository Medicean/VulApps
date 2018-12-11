## ThinkPHP 5.0,5.1 远程代码执行漏洞

### 影响版本

ThinkPHP < 5.0.23
ThinkPHP < 5.1.31

### 修复版本

ThinkPHP 5.0.23

ThinkPHP 5.1.31

补丁发布日期为: 2018年12月9日

### 镜像信息 (FROM virink/tpgetshell)

类型 | 值
:-:|:-:|:-:
端口 | 80
ThinkPHP | 5.1.30

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:t_thinkphp_2
 ```

2. 启动环境

 ```
$ docker run -d -p 80:80 medicean/vulapps:t_thinkphp_2
 ```
 > `-p 80:80` 前面的 80 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`, 假设启动的端口号为 80, 然后根据提示进行操作

### 参考链接

* [virink/tpgetshell](https://hub.docker.com/r/virink/tpgetshell/)
* [ThinkPHP5.*版本发布安全更新(2018年12月9日)](https://blog.thinkphp.cn/869075)
