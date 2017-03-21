## Struts2_Jakarta_Plugin插件远程代码执行漏洞(S2-046) 环境

### 漏洞信息

 * [S2-046 公告](https://cwiki.apache.org/confluence/display/WW/S2-046)

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:s_struts2_s2-046
 ```

2. 启动环境

 ```
$ docker run -d -p 80:8080 medicean/vulapps:s_struts2_s2-046
 ```
 > `-p 80:8080` 前面的 80 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

#### PoC

> 本例中使用 [Struts2_Jakarta_Plugin插件远程代码执行漏洞(S2-046) ](http://www.bugscan.net/source/plugin/4787/template/)


1. 下载并安装 `BugScan SDK`

 详见 [BugScan 插件开发文档 - 环境配置](http://doc.bugscan.net/chapter1/1-1.html)

2. 修改 `poc.py` 中地址为容器地址

 > 该漏洞无需配合上传表单使用

 ```
if __name__ == '__main__':
    from dummy import *
    audit(assign(fingerprint.struts, 'http://127.0.0.1:8080/')[1])

 ```

3. 运行 `poc.py`

 ```
$ python poc.py
 ```

