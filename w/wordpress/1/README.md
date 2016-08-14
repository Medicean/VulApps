## WordPress Double Opt-In for Download Plugin 2.0.9 SQL 注入漏洞环境

### 漏洞信息

 * [WordPress Double Opt-In for Download Plugin 2.0.9 SQL 注入漏洞](https://www.exploit-db.com/exploits/39896/)
 * [Wordpress populate download edit form SQL注入漏洞检测 PoC](http://www.bugscan.net/source/plugin/4474/template/)

WordPress Double Opt-In for Download 插件 2.0.9 版本中, `public/class-doifd.php` 文件中 `populate_download_edit_form` 函数中 `id` 参数未经过滤，直接拼接 SQL 语句，导致 SQL 注入漏洞。

### 漏洞相关代码

```
public function populate_download_edit_form() {

    global $wpdb; // this is how you get access to the database

    if( isset( $_POST[ 'id' ] ) ) {

        $value = $_POST[ 'id' ];

        $download = $wpdb->get_row( "SELECT * FROM {$wpdb->prefix}doifd_lab_downloads WHERE doifd_download_id = $value", ARRAY_A );
    }
    echo json_encode( $download );
    die(); // this is required to terminate immediately and return a proper response
}
```

### 镜像信息

类型 | 用户名 | 密码
:-:|:-:|:-:
Mysql | root | root
/wp-admin/ | admin | admin123


### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:w_wordpress_1
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:w_wordpress_1
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

### PoC 使用

> 本例中使用 [Wordpress populate download edit form SQL注入漏洞检测 PoC](http://www.bugscan.net/source/plugin/4474/template/)
> 
> 本地插件开发测试代码与线上代码略有不同，请自行对比


1. 下载并安装 `BugScan SDK`

 详见 [BugScan 插件开发文档 - 环境配置](http://doc.bugscan.net/chapter1/1-1.html)

2. 修改 `poc.py` 中地址为容器地址

 ```
if __name__ == '__main__':
    from dummy import *
    audit(assign(fingerprint.wordpress, "http://localhost:8000")[1])

 ```

3. 修改 poc.py 中的 cookie 值

4. 运行 `poc.py`

 ```
$ python poc.py
 ```
