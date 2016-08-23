<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
$home = 'http://'.$_SERVER['HTTP_HOST'];
$siteurl = 'http://'.$_SERVER['HTTP_HOST'];
define('WP_HOME', $home);
define('WP_SITEURL', $siteurl);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hPk;Yr%v2=E-onZlx|Vp4-3=yrYVOh6-IGub,?m_{i=[SxC-@gH1Kf|{)jUTvS,P');
define('SECURE_AUTH_KEY',  'l<zHFQ|h`A6uTd2|>[+~ZEDMo%48S2byvy}MqF-40>|4` b+Jo}wCl_A2[p32Rw)');
define('LOGGED_IN_KEY',    '+E/9/eWJH3&fQn|#f+f050$_gLX!P{@2xAT|ODM8oA+TwqV..vx**2-?ZF?:e?+x');
define('NONCE_KEY',        '4Zqz%%mtyvSPHMFOz+:,oVmE`2>H*G8R#O;y,],q%}|+C{8rA`ovo3~rAkqxat+<');
define('AUTH_SALT',        'P+$+4RcEETzUm>QF~:b0-%MHd{.Q8x15I4zDp2+dz3Okp/p}(L36Pd}!=x;2^Vd&');
define('SECURE_AUTH_SALT', 'e+JF|PE() 6**R?QZQ3jFFw^,Ur*(o|Y__Jr2wl9z_y,%ePd4f(*@ne&cv]{g.-r');
define('LOGGED_IN_SALT',   's6vc4VB. LtaPhOW4j)9t#xs,CU>b +@o(9onwsh[aa5|!TXx1M,E(jF&mgjB<KK');
define('NONCE_SALT',       'f+|wgN5H!N&$Hc|)[,5!+|E*[+u BxnQBnk>2RSBL`NJSsI%@-|tBR`%6hS~,h{2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
