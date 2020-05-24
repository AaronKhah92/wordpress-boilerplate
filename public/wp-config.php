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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'scotchbox');

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
define('AUTH_KEY', 'Ql%Qw<SR%1QY|-cJ(XuJ+6h8+HW+||kbdX>ay<E?bLth{:QA7BrZ:+}=<8&,& Is');
define('SECURE_AUTH_KEY', '2Q+m?paPI{S@2pALEp|Ehr_0Iw !Am~e>X8)8# CK*(HH9a[0Z-,qP9, ~tAJq.}');
define('LOGGED_IN_KEY', 'hd+5,3shT(]{cR.+43*f++@aA}-Rou*s{%!2l$}$i+cGA 1/l-+2ViE<1^ Oz_?`');
define('NONCE_KEY', '-s(q&-UMEH|EmtS]V&+y2 P}l*|q_U!0jA$)BHCTc?;>d:vcXAh-US]ozy!ot)Vv');
define('AUTH_SALT', 'Lb.gQ;j/wbE])_T%EFvpY9r*#-wfGHW:R5Rp8of>uAK%MfONK)${-,iI5/*XEo<F');
define('SECURE_AUTH_SALT', 'j;lYjW%F8d~TQ3w>yHK?v3-#e|V_Qk6I#}AfC?,0+h<;Cu5+x*vLWVf;$T8vW3;U');
define('LOGGED_IN_SALT', 'qci~LlPjSlU{KwfylaKC`!{m[8^(IcaX/8VibM<J([4>MsCM6:|68Br&]~oyxt[-');
define('NONCE_SALT', ';#CDC+%+NIIps=!hQ3_~k:4+K|a|Lik)zo_M@Q*g:-crqp5ol94S-k+?PVDN@]#x');


/**#@-*/

/**
 * WordPress Database Table prefix.
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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
