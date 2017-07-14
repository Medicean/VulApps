## Nginx整数溢出漏洞 CVE-2017-7529

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:n_nginx_1
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:n_nginx_1
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 


### 使用与利用

补充中

### 参考链接

* [CVE-2017-7529 Nginx整数溢出漏洞分析](http://galaxylab.org/cve-2017-7529-nginx%E6%95%B4%E6%95%B0%E6%BA%A2%E5%87%BA%E6%BC%8F%E6%B4%9E%E5%88%86%E6%9E%90/)
