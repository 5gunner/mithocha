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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'mithocha_data');
}
if (!defined('DB_USER')) {
	define('DB_USER', '5gunner');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'Pratikrai980');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't-rR[})L9Y;y+y=g+_5/KWJBLx~;cG]TfxfqM-+-MwQ9isIv|^.l6{.f;bVxZOXP');
define('SECURE_AUTH_KEY',  'dX|+lG^hg{F#9$%MfZwP(D1Twv^XrILl|d57NO$S.~IYQ8;2UlC`?5C.1Kyd:_4o');
define('LOGGED_IN_KEY',    '`nN(kabc7.Hq{[&usYA;Y+`zY>|HVi(#`|uV$&_s+13)bRevkF$ktn@yh`9OA(Y[');
define('NONCE_KEY',        'f*k&%qt1[w-{3g:yV%J;u@Ga>y4Kn|V_e(+[OCWf8/D&p{aEBS$Ak+R28a@}6q`4');
define('AUTH_SALT',        'P@~(|g;LUt15_N`I3zIec4]W}MX^K%u!@f&,#dR[:*Mp]i,}*o*4!e:snWLlwYsR');
define('SECURE_AUTH_SALT', 'r!5cVk2*+pEBE}Z+]Ro#kpru<&@f:ReXUqEYus0/ ~elr0`ou]@Lf?+Om+hm=cj|');
define('LOGGED_IN_SALT',   '!e]mnsnD40.P:qg|a>t2b:m|#*`J/[+*ZMfTz[,mZ`S)?/TzoQzQ},-mMbHM9 S;');
define('NONCE_SALT',       '3hv#r)iv=ig~Iq7+]68RZ>-~W5*|%xeJ;a4%c>{c1LS^EIfD.B@#adWP2u8-U0m,');

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
