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
define('AUTH_KEY',         '`FJ-&C%Y@]Ot+M/aJ3;j08T~}DDi_i.H}<O-+lJp:;6<py7YJ#ZY/[(-DWj~Ec~a');
define('SECURE_AUTH_KEY',  'g@)2WdP($`;6AJjw?i=YrsHy@1(F.x2mo]r }-uwv{X-S*ng,TBI-1>`2_=bKLUT');
define('LOGGED_IN_KEY',    '+j|t(kxsQ4lR{*-p5Q!RN;bAd$jj([Cj|E6L#C9wwYf&j8KI2 i1h)McB+6t)aXP');
define('NONCE_KEY',        'WOrl&8psuH?:&tM nv;63[W-^t8%AhcNS9ObUf%@@DI-vOcFBfFS>0srJ(E-t3!~');
define('AUTH_SALT',        'gJMFs{9=zT>RuRqLDY`;K|?lU1Iy)~cEdN4G-$M)k_>;FQgL D:G^_qd4RS&WYze');
define('SECURE_AUTH_SALT', 'LoePau&LEm*IbAY)<t0wR)h&n: ]611axbl,]5C?!O}xa0<Cw|2M#J.Az7z3:gz5');
define('LOGGED_IN_SALT',   'In{O3D|jt-[ri6J6Hhf2^0S7|uaf}{B+IN,h|^AwhQOu#_Lz]_KB?j.*o3XIm_0t');
define('NONCE_SALT',       'd|q6>E?jI[A|eY*+7!!MQ{OGqMzst4@v*Q6]W~2X7 (6*ga{(>%@ODV)Y:m;9m3&');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
