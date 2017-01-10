## Shiro RememberMe 1.2.4 反序列化过程命令执行漏洞

### 漏洞信息

 * [Shiro RememberMe 1.2.4 反序列化导致的命令执行漏洞](https://www.seebug.org/vuldb/ssvid-92180)
 * [SHIRO-550 反序列化漏洞分析](http://blog.csdn.net/three_feng/article/details/52189559)
 * [SHIRO-550 Randomize default remember me cipher](https://issues.apache.org/jira/browse/SHIRO-550)

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:s_shiro_1
 ```

2. 启动环境

 ```
$ docker run -d -p 80:8080 medicean/vulapps:s_shiro_1
 ```
 > `-p 80:8080` 前面的 80 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

#### PoC

1. 修改 poc.py 44 行 `poc("http://127.0.0.1:9000/")` 中的 URL
2. 执行 poc.py

如果有提示，则代表存在漏洞

```
➜ python poc.py
[+] http://127.0.0.1:32770/ is vulnerable.
```

> 测试时使用的是 http://admin.dnslog.link ，可能由于网络原因导致超时或者测试不成功，请保证目标与网络连通性

#### Exp

暂未提供图形化 Exp 工具，可参考漏洞链接处提供的方法自行生成。

https://github.com/Xyntax/POC-T/blob/master/script/shiro-deserial-rce.py
