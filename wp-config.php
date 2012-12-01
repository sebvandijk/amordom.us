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
define('DB_NAME', 'offercloud');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '|zJ/s*X!rcrIZ&|^*/PjHJ8 Y@qTLV0t3}eoT#/>9;wxH8o%BaQXS$g`Uh:jlC,}');
define('SECURE_AUTH_KEY',  'R<N9X6C-u<2^fXp:K(J|0ey&b$=@zDgnh;JhYN`&I`c1m-U#kI6eH5}6%SAbkE,H');
define('LOGGED_IN_KEY',    '2)=~)-N@OqhheL]5,9wKs<v@MXO!jPS3-<O<KzD3coq}8>]Hss@vxoie)z(L`gLi');
define('NONCE_KEY',        'yIJC2DJH/M<h*ySa)9~ 5-#!l6O;y^]/lh@ *k)Z/I5pZs7o2u0O7IDtrwNHL5nF');
define('AUTH_SALT',        'Z^5f5D+wO4JvQDbAdvl,iZFbXl9ei61$):~p{lWt?^[exP3m<lk%W@S<^[N=+9CW');
define('SECURE_AUTH_SALT', '^Xr*`AJNFh>k%)uh13uy2EtsDi*4h6@dBCET{ZOpJ>vQ+B4_:`q.:.I F _{E=0L');
define('LOGGED_IN_SALT',   'OZ?M}HDDi6<?C@T#tGR6]|>FlK|1b!7b=?7fz]8Fw+@o}ZQzi~Mo)}1>VGfeQl8l');
define('NONCE_SALT',       '/}52WNUPqiJbd1|~FE$AdD-q6]0geC8X>D?/rC:@8r%H{J~q[N-xhRs!1Mm?MnuY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
