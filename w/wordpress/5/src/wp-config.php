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
define('AUTH_KEY',         '5]dIBac~]<-m&uX)+ns=erbE^MyGeckFEd{h$Zk<j;6Oq~16Azq*S4f*GqFcTZ89');
define('SECURE_AUTH_KEY',  ']!3@$(2=/3}w<4) fx-I$xb,ey;[&.CM|1nPIhq&KxqvS$e5Nar0uL%wi8zUJC|Q');
define('LOGGED_IN_KEY',    '!xg~W&P ek|?xLs@}H.CS2]mmX:,>?(m{x !@cj))*E|$F%LF8_J1*(&,:38@3I?');
define('NONCE_KEY',        '/^NqM+ccazr?1]`P#NpDF>o/:!s&&`F`Jjm_&my5YFtTX1[_KQk<8U7Z(k{96aj&');
define('AUTH_SALT',        'fbPa&lT .>#.v&Y=|j:BN@?p9[edR-B!8D[meDw8rgJg8_l+psvo3XcB}Soi&Jzv');
define('SECURE_AUTH_SALT', '/ I0a9S/+VY&S8QcTklx&-u:8J+H@V0*d/vSU92oID2?vDv!o7]4naA?hz7:b<&*');
define('LOGGED_IN_SALT',   '(P j@$6:InxW+;bC54t[+._e &bz((SG:En&(Fbm71AoxU}D>Lq*nKcJpP#Scc0!');
define('NONCE_SALT',       '0HnxKB?&N<[nBuPeBGA2fy2o<@Hc1B*dKGxEsf$FVYXAF7AF0x;AmXBGKL+]^XmG');

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
