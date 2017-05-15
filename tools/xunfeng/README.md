巡风 
---

**巡风官方已经推出Docker环境，体验新版本建议直接使用官方镜像**

[项目地址： https://github.com/ysrc/xunfeng](https://github.com/ysrc/xunfeng)

### 工具简介

**巡风**是一款适用于企业内网的**漏洞快速应急、巡航扫描**系统，通过搜索功能可清晰的了解内部网络资产分布情况，并且可指定漏洞插件对搜索结果进行快速漏洞检测并输出结果报表。

其主体分为两部分：**网络资产识别引擎**，**漏洞检测引擎**。

网络资产识别引擎会通过用户配置的IP范围**定期自动**的进行端口探测（支持调用MASSCAN），并进行指纹识别，识别内容包括：服务类型、组件容器、脚本语言、CMS。

漏洞检测引擎会根据用户指定的**任务规则**进行定期或者一次性的漏洞检测，其支持2种插件类型、标示符与脚本，均可通过web控制台进行添加。

### 镜像信息

类型 | 用户名 | 密码
:-:|:-:|:-:
 管理员 | admin | xunfeng321
mongodb | scan | scanlol66
巡风物理路径 | /opt/xunfeng | -
MASSCAN 路径| /opt/xunfeng/masscan/linux_64/masscan | -
mongodb 端口 | 65521| -

### 获取环境

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:tools_xunfeng
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:tools_xunfeng
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 
 
 访问: `http://127.0.0.1:8000/` 正常访问则代表安装成功

