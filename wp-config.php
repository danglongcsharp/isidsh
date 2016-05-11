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
define('DB_NAME', 'jvbccom_isidsh');

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
define('AUTH_KEY',         '|~Vz:U>Y1~T:<G_>^EW#O8+B#b7}`.=[OyP_c)8X4sM*(J:T94a[f5ey-Fqib3?}');
define('SECURE_AUTH_KEY',  '2)[-!~%^Up!eE*2e{Y]rrc>.Z1@0UH|Iy_K!6p8ZJ;(@t;6s8e)?*b`nat !BTpC');
define('LOGGED_IN_KEY',    '%qQlHWuSU45(@(Lu/cLYlC6M%doFe;K|f@Ht^.{Ez:GlReIpN}`:%PvW1{),LdFx');
define('NONCE_KEY',        'OIkCE0IYN=&|mz6x4]9l~Z#2|bn_)ulA!g.n{&CwL(.X#GAm $(Xup5:vjfM}<;o');
define('AUTH_SALT',        'Qz2(yMg0{uqu@q5kfy1%`rw&Uf[WmD:t|1i0s0eQWZS=vOL_+E1rR&Ai&d:+mDtq');
define('SECURE_AUTH_SALT', 'N}5t@x0.!cH%E9 >.v~MBwe-LR$$85HvX&2bZP<.c{a- }NRKviShWCs)$WMx16F');
define('LOGGED_IN_SALT',   '-B>Z?8|9^QoX0+}rzA5-AF`NXGar#&9(vgW.4HO<tsd<<|B1M3hX CtxadC<wiP#');
define('NONCE_SALT',       ']Kc$4ZQ58Ygs._n^3M4g1Wj0wFtfR=o%Wm),}k@)Ww9yGjS8u-uW0of%=FC o2.^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dc_';

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
