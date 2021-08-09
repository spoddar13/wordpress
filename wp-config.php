<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sp#@32962557' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.%0(9euV;A8AdTCRaYXqmqq7*E#E4a^3I-XMJY{iI9qs S?uiPH4..U%5w^{=Is,' );
define( 'SECURE_AUTH_KEY',  'CzSlGS@wf4Sa!^Yp.[-av}]r~_-Erh;uPiD_Sn;-ONwt4+~4^KX}jO|L+kS1mI;*' );
define( 'LOGGED_IN_KEY',    'F]r^iJivC[E&V$Fs7q:ONFb_5J1+O0RT1h][!s4Lyu$,Vmw_!=sfh.JjfF_{!.e)' );
define( 'NONCE_KEY',        't?Qe$K[D&/!H7X.ijUYB<kLkpA&.C|Mr&L@xHaeW9`l*7KNy+@9HuIC0 TSYcbj]' );
define( 'AUTH_SALT',        '!KjXWZ_o5A7T@ d` A7?:$Vs*r[/>G$>jomDzHeiWL`f`_!fG?s^(T*{dQoAI;lh' );
define( 'SECURE_AUTH_SALT', ';h8bg;>2:r)0{F8r[?Io8lj/u9|:C.=Cu=H^}K`0Au]e?m?jwHs.C5Y+}_M9^f.]' );
define( 'LOGGED_IN_SALT',   'Xe3O`.)g].do;bn6^T$YKMSk+nXho;JP/Qh^vPD:L?RBqAc2 ,T<A7ps]YGm@*&X' );
define( 'NONCE_SALT',       'q;E|2+ei~?76PRqy/U^}!xtB(v0eVWG T~BF@5BDXC6LAgjPwva5tKRrPS?Y**;.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
