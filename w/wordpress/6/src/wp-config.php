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
// disable auto update
define('WP_AUTO_UPDATE_CORE', false);
define('AUTOMATIC_UPDATER_DISABLED', true);

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
define('AUTH_KEY',         '|~ L&jap4kvq@;G~5sDuFh2zS?|/nm!Mi@Nig,? Sd{_o;r=jIzAMiqh,w^F;]VG');
define('SECURE_AUTH_KEY',  '|ri$rn^.!ytc?P:?N4cgXj)+mZP>e@/eto;k~q+Wr=>|G}7<GC:>K*vo^gpgjpr:');
define('LOGGED_IN_KEY',    'yhRnN[yd}.zV?Ba)Wk_Y)P)@>u@ED)u!,<Ur]9#D3)v@zR|ia%fib(#CjT5-(bR:');
define('NONCE_KEY',        'BH}kstJ}X?O%BDrI^U#Y;Iv$5)w.5Cgiyy4iT$##t(j3m&,q[wG29.~WiootKkU-');
define('AUTH_SALT',        '&{_(MzBd}0g*>r[EAf07D*qkA?a:I5p_^Qcwv>8a]w1rG0-1k4bFhuu2n?LG`uQX');
define('SECURE_AUTH_SALT', ' SDc2t5sk+Do$9+3v#}~5* QIOM?C?d7uo9R)82uKbM=!supD&+25z=Y0cSg2a]g');
define('LOGGED_IN_SALT',   'iuK$_X_TM?w:}g:Zb^DBxJU,~>=zW=d+_.EA5?H*0qq`L|(0F@D]Km(2y{s1i}mG');
define('NONCE_SALT',       'A-3GiRCT}lvfWITxfb1._O4PjCO743a]z=.99NL(_`6%-khb.9iy*S%=QYxxxGPt');

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
