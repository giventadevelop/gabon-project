<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'wpuser');

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
define('AUTH_KEY',         'Qfwk>=][-Po2!N1JNGY)2vrJ6~yY!OcXic9I9(*#y!a+{.Hz:0^|(>v Ri}Z$N,7');
define('SECURE_AUTH_KEY',  'jZ%pOx1a!TU-3Pnich+RUr9v] |:EL0m[I(V}iUm3B0uzlX(tZzxR+Y]|!1XM`-9');
define('LOGGED_IN_KEY',    ' Fma$E2W>+QG|cHHFUW.3{H8vuF-`]MA%d.PiQT/b)`OaCTc|In]9;F-?DtSPiJ/');
define('NONCE_KEY',        'yB2i<TIYVT+4vZ~!U[Me1V%j/~3qY}P(~+KJH6g3QLnTt|cO,KUHSR](6=|.>/l4');
define('AUTH_SALT',        '=|;y~,vUxI~|t+]Ut[MtCmYI +P&L||^=o)9tm#+8W=`FOcdRLFY+dMYGX$!~})[');
define('SECURE_AUTH_SALT', '-I3.w m1(rcbK2E-+Ap-rhDYGUBBH@>r$v_#l5Z/tCKyco1n..&4iP0&txz#|-I`');
define('LOGGED_IN_SALT',   '&1<aQy_-Hc:vpv+IA-4-$^gkOOP]..b*e+`33Y][$ ?]WQyWQ=r&SFShk]mnfvWH');
define('NONCE_SALT',       'H9kDJiJgZ&*t-7<)h*r$) 1|DGC+^J|<H-e/?9)?5H2~E_A7U9zyv>7pm`Mf|&0&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
