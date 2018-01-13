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
define('DB_NAME', 'thomatr4_wor2462');

/** MySQL database username */
define('DB_USER', 'thomatr4_wor2462');

/** MySQL database password */
define('DB_PASSWORD', 'Afroburger!1');

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
define('AUTH_KEY',         'IZhSrEx4|:r,N?TYEf/s|``ff*ifczOd,_4uo-|?.m]vMn4&X{@[_TMhCn=(C$#c');
define('SECURE_AUTH_KEY',  'Jf27FH%J0<qR3[x`{537j6F46O9R1|D}:mTsfa8J3!itGa[j^<F3<a}KT:BZ:mP7');
define('LOGGED_IN_KEY',    'BN;Rh!W.m7Zu@a?@f`c$)(.vg74uk(C++f l=l_LTl slG{1[cV:V*&+6n/ScLO3');
define('NONCE_KEY',        'c(.]qQ-}d?RGc1fd9]?Px|+,iC/3E=q&i%v0+l$2Wz!mRR2[:ZnvR-vf8<qdri6G');
define('AUTH_SALT',        ')uKP+^Ol|Q-]dPd+D+=>RSc)xXo=0>ps-P1S1+gzVX-^Y>W>q8!%f1Db_3I(6SM=');
define('SECURE_AUTH_SALT', 'X4?-3COH3uUnt_me%>,0+OczKer}{QCqns03Fz+vr[bHduY_kKL1*a~C2:HDnOMY');
define('LOGGED_IN_SALT',   'tusRpvCGuH[K+P|<+o?#Sy#6R-PL -w*[(Vfkg[w)!-kUs|;*</?#+-p]?f;St=L');
define('NONCE_SALT',       '&rs%lB|L=Ic$C#3Ov7Q!7 P1R+H=a:[-yb9F#Ds-0}8z86lR&v*P,>9EbaGi30dQ');

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
