## WordPress Plugin Product Catalog 8 1.2.0 SQL注入漏洞环境

### 漏洞信息

 * [WordPress Plugin Product Catalog 8 1.2.0 - SQL Injection](https://www.exploit-db.com/exploits/40783/)

WordPress Product Catalog 8 插件 1.2.0 版本中, `includes/ajax-functions.php` 文件中 `UpdateCategoryList` 函数中 `selectedCategory` 参数未经过滤，直接拼接 SQL 语句，导致 SQL 注入漏洞。

### 漏洞相关代码

`includes/ajax-functions.php` 101行：

```
function UpdateCategoryList() {
    global $wpdb, $subcategories_table;
    global $wpdb;
    $table = $subcategories_table;

    // 注意这里 selectedCategory 未过滤
    $catid = $_POST['selectedCategory'];

    if($catid !== '0') {
        // 未过滤的 catid 变量直接拼接 sql 语句代入数据库查询
        $get_items = $wpdb->get_results( "SELECT * FROM $table WHERE subcategory_category = $catid ORDER BY subcategory_name ASC" );
    
        echo json_encode($get_items);
    }
    else {
        $get_items = "";
        echo json_encode($get_items);
    }
    die();
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
$ docker pull medicean/vulapps:w_wordpress_4
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:w_wordpress_4
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

#### PoC 使用

> 本例中使用 [Wordpress populate download edit form SQL注入漏洞检测 PoC](http://www.bugscan.net/source/plugin/4691/template/)
> 
> 本地插件开发测试代码与线上代码略有不同，请自行对比


1. 下载并安装 `BugScan SDK`

 详见 [BugScan 插件开发文档 - 环境配置](http://doc.bugscan.net/chapter1/1-1.html)

2. 修改 `poc.py` 中地址为容器地址

 ```
if __name__ == '__main__':
    from dummy import *
    audit(assign(fingerprint.wordpress, "http://127.0.0.1:8000")[1])

 ```

3. 修改 poc.py 中的 cookie 值

4. 运行 `poc.py`

 ```
$ python poc.py
 ```

### 相关链接

* [WordPress Plugin Product Catalog 8 1.2.0 - SQL Injection](https://www.exploit-db.com/exploits/40783/)
* [Wordpress populate download edit form SQL注入漏洞检测](http://www.bugscan.net/source/plugin/4691/template/)
* [product-catalog-8 源代码](http://plugins.svn.wordpress.org/product-catalog-8/)

