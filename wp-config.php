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
	define('DB_NAME', 'teoco');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
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
define('AUTH_KEY',         '$}C|_O;F;EqsPka5)F[L_Pt+Lzm&$6>+*XwTHDb,`y e`vHhrvL#-bU #c5C(3Wp');
define('SECURE_AUTH_KEY',  'mQ|2!ND-7G0u ]BnwutL/! C]_7xdqRxyRv.0vZf]I:!2woWuphy7i(#O[c-0w$T');
define('LOGGED_IN_KEY',    '+w,# ?qaQwbw$%$glf|sM*-}r_||I]m]}|h);pA[-Ar]rXyHrYYIqo^i:cI#*v;Y');
define('NONCE_KEY',        'x]in*XhA9pb8$9q;C,}q;Q~mu5RUe;UO|`NTf!~FhN0|~:f]MW;V,du+1wUc2]y|');
define('AUTH_SALT',        'Zt&/ka9xL_A+>IEu3.)jhm+]e&c)uuHK *|npgk$!--cW,G:F6>C-Jc~*l_t)Wni');
define('SECURE_AUTH_SALT', 'emhebDv{2m|UQUBvXTHsKEnfvG[|Ow-;B?FnR&jehHh*;#Fdza~7;8F8dQ3-pJDx');
define('LOGGED_IN_SALT',   'v2:{m )2RWZL);+dxba&*{b{{^ZJEl$L4*-^/722u|w)$&o}b>X+Lf9W2k0mRaD:');
define('NONCE_SALT',       'J2!{8un]a-^g_c2y?,-N|guU<@&f_ }&J+hOCWmwqGmX~;1y#:qMvGX>q95K1Sfu');

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
