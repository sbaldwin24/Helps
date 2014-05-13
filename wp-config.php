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
define('DB_NAME', 'helpsinternational');

/** MySQL database username */
define('DB_USER', 'be0a7ba2ce70b2');

/** MySQL database password */
define('DB_PASSWORD', '47cb8674');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-azure-west-b.cleardb.com');

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
define('AUTH_KEY',         'lZD8;3H[[+,rK0u66!4^_2rGe-k`Lw~rL2}GDyE-[qi+`gn!WsAywX{+|{[(KTg[');
define('SECURE_AUTH_KEY',  'IY|</z:oo:_weH0`Mz0UpVN[2=eOK-I|+R+7E(g5|b-]:NF-ftx0^DJ4x9UzAo7#');
define('LOGGED_IN_KEY',    '=*AK,@c7PA9#F| A(5!@TSJ;*Ve:>1JrujiiLw>f.mzGIW.JQG6#?6<cd_#|J#JY');
define('NONCE_KEY',        '}p)yR?X^dr@ZdSxE15Xxnm_M&mlM5+3H>i&JZ0o;TLz@ aupw+CvK|jOG?yl71f|');
define('AUTH_SALT',        'u}awzZb#x=| l(9L0bM?Cc;sD_1FSpc|F,RG[i-<z6&sGt=Hj;0!*e<9!RDAHbW|');
define('SECURE_AUTH_SALT', 'oQ[^t^(l_^(M>-blhj|mf`D1ep&PDmyZM-9VK$NZk~3Wo{=7==8gJk]?Nn!SMp|~');
define('LOGGED_IN_SALT',   'FHzo*0YLSZ-kHGo+h:[Lfv-vJqp9&Q pwy5B>gZ-Qe_/&T7PzOku7!C[)Q.SU0P)');
define('NONCE_SALT',       '+6o+K%{c ^|a4%W]!2nw=-~$bp;6hL=>XA#;SaA?n9E:hw[C`-U@=wXt^~%|o/fs');
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
