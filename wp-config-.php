<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hd_wallpaper');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'mQ6a_-K7FAc]uUY+dE5{yo5v~*_HV}@V_ 7?t;SRoV}L(naYYyHG!Cx*J=ud2cwk');
define('SECURE_AUTH_KEY',  'jb01#K&nNMDTK1d|t1gX0Fk/jb~.PR>P;:_%TwIaYS(8rcuI+tosY@[K),g22X<]');
define('LOGGED_IN_KEY',    '-`d~ur3[#[@%:4wwicW`uz);?[MxeTQ2(v.bCJI&fa;n:yyD5*h/SL!-dy]!|xl6');
define('NONCE_KEY',        'u![LGfY711CJt}9bQ17yp<e;*}aD%a@M+ri eAjSseM}3`N^^O/Kz:Y&g6/$R|^k');
define('AUTH_SALT',        ']shp?G6`yG/iZl8Un;$oK:IC9OUI-83`>J,#([jTcg)?6rfNTlK,Rg=huok@>i]2');
define('SECURE_AUTH_SALT', '*zM_ZfQZg8sZQ*(>xoXAr]j 0#[#]0F9J[x(k<W2wp.I2jbe@uVDxD,Ad6|RJb?J');
define('LOGGED_IN_SALT',   'aQKWMuMOBg<T?IAU0Lb&vwR^!1U`C6F}tl<U9Ct]KuOxtE2aB@}IQ|{nJ9Vx&1o@');
define('NONCE_SALT',       'eJ=E)sKefzX$F?Q{WRy>b3tC._QG]tFc*;v}U9D/_|RkZ:6&ybh/rLB,9_ k]f1E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_a1b2c3456_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
