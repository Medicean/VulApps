蚁逅 
---

[项目地址： https://github.com/antoor/ant](https://github.com/antoor/ant)

### 工具简介

**蚁逅**是一款实时上线的 XSS 盲打平台。是不是有点像当年的灰鸽子的感觉？开源，不维护系列

蚁逅有多酷？看演示就知道了：[**蚁逅演示视频**](http://v.youku.com/v_show/id_XMTI0OTYzNzMyMA==.html?f=25926434&spm=a2hzp.8253876.0.0)

### 镜像信息

类型 | 用户名 | 密码
:-:|:-:|:-:
 管理员 | i@root.cool | 123456
ant物理路径 | /htdocs/ant-master | -
mongodb数据路径| /var/data | -


### 获取环境

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:tools_ant
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:3000 medicean/vulapps:tools_ant
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 
 
 访问: `http://127.0.0.1:8000/` 正常访问则代表安装成功

 **邮件服务设置**
 > 如果需要自动设置邮件服务，则需要在启动时指定环境变量
 
 类型 | 环境变量名 | 默认
:-:|:-:|:-:
邮箱账号 | `EMAIL_ADDRESS` | email@user.com
邮箱密码 | `EMAIL_PASSWORD` | email-password
SMTP服务器 | `SMTP_HOST` | smtp.qq.com
SMTP服务端口 | `SMTP_PORT` | 465

 eg: 指定一个 QQ 邮箱来作为发信邮箱(默认使用的是QQ的发信服务器，所以不需要设置)：
 
 ```
 $ docker run -d -p 8000:3000 -e EMAIL_ADDRESS=546074829@qq.com -e EMAIL_PASSWORD=123456 medicean/vulapps:tools_ant
 ```

 **挂载点**

 如果需要将数据保存到物理机，需要在物理机上创建一个挂载点，在启动时使用`-v`参数挂载到容器的`/var/data`目录
 
 例如：
 
 ```
 $ mkdir -p ~/antdata
 $ docker run -d -p 8000:3000 -v ~/antdata/:/var/data medicean/vulapps:tools_ant
 ```
 
 > 这样在销毁容器后，如果下次新建容器还指定了该数据目录，就会将数据还原
