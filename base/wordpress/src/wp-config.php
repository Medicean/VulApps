<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为"wp-config.php"，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

$home = 'http://'.$_SERVER['HTTP_HOST'];
$siteurl = 'http://'.$_SERVER['HTTP_HOST'];
define('WP_HOME', $home);
define('WP_SITEURL', $siteurl);
// disable auto update
define('WP_AUTO_UPDATE_CORE', false);
define('AUTOMATIC_UPDATER_DISABLED', true);
// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'root');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v5Z[v6{YS3rPc3?]tf0u>d;xu%e4.`)he[]2X8&8.eNo{a@9W97fnU1naDdVsVxl');
define('SECURE_AUTH_KEY',  'L4t zO.>:ue:s>d]Fu(9zhP%CA4 s8+TSC {6>];7g=JHx+i~)E>]>h:qM.(}FUe');
define('LOGGED_IN_KEY',    'i[.U>S4t)nnq)E$]<-`yB0Ns(Ci>iwST)j*ru4a2.y69Ss)f/{ h=<i:lIWpfU~D');
define('NONCE_KEY',        '[BsUo.wD/Gz/{<~O+<m;kHf2@)NHoi@qLX^s?IE2fwS?/fCm6kQabiOYfM{^PF)S');
define('AUTH_SALT',        '9s:E7>EFssu%k5tYDL3cMLyh=ecgT63|4RH&CA,dX[|Ibt)MjF*ufg6DX_W76|f ');
define('SECURE_AUTH_SALT', 'HX9O=*K+j+e:tKU;7O_1H;AJc_to_,|kJ0TMX3$9;jOT%6s!A>tnDM2wYeJtKd 5');
define('LOGGED_IN_SALT',   '+(P88)UMC_i-AfSMom{G2F>qKN^*i1<YhXRnn(wsdoWkLK0Fs,Im+~.j)V0`a0mh');
define('NONCE_SALT',       '49>)X6B&}b>8o@AY@<%lRDy=8*|n}sr}SA(zL&|Y4<b=kY3>EAc3RP_9>tgD=90b');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
