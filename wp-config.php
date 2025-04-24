<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'coreen');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');


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
define('AUTH_KEY',         ')`L7;bX/|h#HfRY@7u*ZqEHO4;P2.Xi`[PT?E93*j[GUxy< ?Rz|02P6d31NJ.wa');
define('SECURE_AUTH_KEY',  '{Yd;,qT.!G LgKJBh0-rNL_3t@[(6:Dr$0]Hm40Q+op]xa=_%p [8 ^~kn-.PaK:');
define('LOGGED_IN_KEY',    'Cz[,Fq|aom&4$`z`3sSNP!b)JCr^/lPmV(~dvtqkN[zIvBF-ort$h<~m?W*(u>HX');
define('NONCE_KEY',        'Z3KW33*AE?U[%z(,}w#Owk_VB>@?``lMdO3cnZ^QDMiqq& s+p O~E(ubeH}UHo@');
define('AUTH_SALT',        'jnqws9+InXH(/E%A5nyo$L:E;OLt)S]G1yle|H7gr@x(e #66z#a}|DXq(09h`k+');
define('SECURE_AUTH_SALT', 'n:b={lrc$]?8fv!pBBG<N&LL+&c#x/Se$jl[/K6LGB1>p[kk0H1()wHS$eSDZ[ef');
define('LOGGED_IN_SALT',   '/u!^p<_0G0d{?jx>L#.?fl9}8ROx}`PQ.!gIcxwsaJww~|.8TG8S,_d6s,<:E(|b');
define('NONCE_SALT',       '{xF!mMlbTuKTqr!oEsINoOs9fh3?fv99T%CM<)1-Gt/uD:lV;;|7lqAcG%%eYY({');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
