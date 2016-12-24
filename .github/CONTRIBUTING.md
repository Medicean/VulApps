CONTRIBUTING to VulApps
---

> 很多公司都在做类似的事情，真正开放的并没有几个。我希望的是大家来共同维护着一个开源的靶场。在你从本项目中获取某个有用的环境时，相对的，我希望你能向 VulApps 贡献一个环境。

## 向 VulApps 贡献前需要注意的几个点：

- [接受何种形式的贡献](#cc)
- [目录结构](#dir)
- [漏洞环境文件说明](#files)
- [Commit 规范](#commit)
- [贡献流程](#howto)
- [相关链接](#url)

### <a name="cc"></a>接受何种形式的贡献

* 新增环境及完善资料
    * Dockerfile
    * 漏洞详细说明
    * 漏洞 poc
    * 漏洞 exp
* 原有环境 Bug 修复

### <a name="dir"></a>VulApps 目录结构

`/组件首字母/组件名/该组件的目录下的维一编号/`

> 一律采取小写
> 
> 唯一编号使用阿拉伯数字

```
.
├── README.md
├── base 组件基础镜像
├── 组件首字母
│   ├── README.md(组件列表)
│   └── 组件名
│       ├── README.md(组件漏洞靶场列表)
│       ├── 唯一编号
│       └── 唯一编号
├── b
│   ├── README.md
│   └── bash
│       ├── README.md
│       ├── 1
│       └── 2
└── s
    ├── README.md
    └── struts2
        ├── README.md
        └── 1
```

### <a name="files"></a>漏洞环境文件说明

```
.
├── README.md    靶场说明(需要指明环境中的相关信息)
├── poc.py       检测插件
├── exp.py       漏洞利用程序
├── Dockerfile
└── src          构建所需要的配置文件(**超过 10MB 的请使用外链**，推荐7牛)
    ├── ...
    └── ...
```

**源码包强烈建议使用外链，通过 wget 方式下载到容器中，Github 单仓库限制1GB**

### <a name="commit"></a>Commit 规范

Commit 分为标题和主体两部分，标题要求必须要简洁明了。对标题的详细补充在主体中体现，如果标题已经充分表达出提交者的意思，主体可省略。

```
(操作 镜像类型: 影响的组件名) 插件名或组件版本号
<空行>
详细的说明
```

* 操作:
 * Add    添加
 * Update 更新
 * Fix    修补 Bug
 * Delete 删除

* 镜像类型
 * Base   基础镜像
 * Vul    漏洞环境
 * Tools  安全工具

**下面给出了一些例子：**

* 新增 WordPress 某个插件的漏洞环境

```
(Add Vul: WordPress) double-opt-in-for-download

添加 double-opt-in-for-download.2.0.9 SQL 注入漏洞环境

该漏洞需要登录触发
```

* 新增了 WordPress 某个基础镜像

```
(Add Base: WordPress) 4.5.3

添加 WordPress 4.5.3 基础镜像
```

* 更新了 Discuz! 基础镜像的某个版本

```
(Update Base: Discuz) 7.2

* 更新了删除源码包的操作
* 在安装完毕后，自动卸载 `curl` 与 `wget`
```

* 修正了 PHPCms 基础镜像中的某个 Bug

```
(Fix Base: PHPCms) #2

修复了 #2 中提到的访问路径错误的 Bug
```

* 删除了某个漏洞镜像

```
(Delete Vul: Wordpress) double-opt-in-for-download 2.0.8

该漏洞环境与现有的 2.0.9 版本环境重复
```

### <a name="howto"></a>贡献流程

* Step1. fork 本仓库到你自己的仓库

* Step2. clone 自己的仓库到本地

* Step3. 本地添加环境或修改文档，然后推至远端自己的仓库

* Step4. 发起 Pull Request

### <a name="urls"></a>相关链接

* [Docker 从入门到实践](http://udn.yyuap.com/doc/docker_practice/)
* [Docker 官网](https://www.docker.com/)
* [Docker 官方文档](https://docs.docker.com/)
