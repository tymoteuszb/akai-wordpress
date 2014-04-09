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
	define('DB_NAME', 'akainew_dev');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'slimak');
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
define('AUTH_KEY',         'b8]-nn*+)rgQNCI1N;=}=8, _>ZA-v|w`]`O.`b)J)SSnbQ1;13PW(EGOFP?w$;}');
define('SECURE_AUTH_KEY',  'td;5Tm}S?ce8cITN81*Et3s?xUk(m91*FtLc:HbwS 5Tqp_|u*g;QTV@6iP)s30v');
define('LOGGED_IN_KEY',    'RIg9Bej(PZwt%k|$8sCu -IJMXj^i[f:h]*3D k+8Beevi2mBI|?0(qBtGW (E+)');
define('NONCE_KEY',        '>?U-Bw3,*=)W}mN,s:f/Yxb|s}#u4J/0h`nf}[-N`(4eTXy]!8nD({6KrP_6&z;K');
define('AUTH_SALT',        '4C*+}+xNBSTLCYc86G2_+lj5J|3V-u{nF];uM Q$mAUU=w(`]^;0=~Jb%~+^tte<');
define('SECURE_AUTH_SALT', '5UQ<:%kc)Y_aJc=NuC]~|=m`@At}].:d=2.VaZ!<P9o[MWlpC[(tdCaV*>=lt%J^');
define('LOGGED_IN_SALT',   '9_.!ujQMEcK6IIR3+mkh6o%&8gX8.Ux5!037r -UA?N_b<7{hh^g4^)cv]rMS{k:');
define('NONCE_SALT',       '8;SZ+R&?*eH&_-v)YaY)Vz_6,9/OL_zsv/I|C~nOt:pj^fM`M-b|FHsqk4k}t}?E');

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
define('WPLANG', 'pl_PL');



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
