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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'x');

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
define('AUTH_KEY',         'Q6]45}AQBz@vuXHWOXLc>v#U~JbXc~(:Vnv[W-V}m]<^)|YFau.e?avMF&^yM{Zx');
define('SECURE_AUTH_KEY',  ',>FzXzQNfWn-gPp/=(7H9! _H][?|TGWvq{Ij?$O-uT6jn&>8+|Yrwg=lS1#nJ=`');
define('LOGGED_IN_KEY',    '^AoSm*Ys`]-YTwP3J+5)k637#RlDM6?jaoZNTww`:/t~H).p.:kw>Ms>i|P]Uv!U');
define('NONCE_KEY',        'P3Q!>XW(jM72Y,lizRuA5P*`Zx76!m|z:F:ieIbslSlUiLAS@O2;9YO99a_6D7@&');
define('AUTH_SALT',        '52u$Eu66xCMws~s?Eo2X&C<77@@tI?&15PYyFn-j?^|-{Z8Hp]P_.cL9gj]WHI*o');
define('SECURE_AUTH_SALT', '7QJ{EK/ehFO_A1_.RXs8:tRG<=x*Hf:~E3*W*yjQi(SjZRl ?L+FD&GM<:M6#i&Z');
define('LOGGED_IN_SALT',   'NG&)bHnm,??[YFi:P{HcJb&w*Wg9?`k3|di!P_d$.k}ytUY#D|F=G0XOddGQE1NH');
define('NONCE_SALT',       '6!I7I(ik4(.nzh976h=ww-i?BAl0Z LW.zE5 H^8@RtL6Y[*Rok,v3ErkodXdbGZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'x_';

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
