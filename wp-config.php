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
define( 'DB_NAME', 'senior' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',         '^Q3]lM7o@wGtJE8VA2BGDQQqQPK@cqQ}${,$bU(g`EZ!(}dHLin2#6>ZVfV>^D61' );
define( 'SECURE_AUTH_KEY',  'RZDBXQ?PtLLH3:d7V@5IHXw=J&lRCo:3!mNtZQ|$%(G)rjS(G@QROR*w~YuDn`hV' );
define( 'LOGGED_IN_KEY',    'K4_?&&W6rs7^%A5qYfs}7BP&F4CGw.{Os8q!&Ld^8qtp%T$]jARI/<8j;O@@[Ltd' );
define( 'NONCE_KEY',        ';YmHw9yspTC ELPa29kPZ{y9buhA}4RPJAh2<7i%S&~HtCrwh:|2e`DuFMD*d39M' );
define( 'AUTH_SALT',        'k,<_57n}&!_.e*qC,R<T<X#_[]l[W#_0;L6#.l)9Vwkt=IL>/Z]9c.yhlq`:s4G]' );
define( 'SECURE_AUTH_SALT', 'yRNG<KsNTYSx=;g{4wWXP7pPvdY]jz5EY?D6;raK4%Zd5`e+Knxqpq,~3g,EYw3q' );
define( 'LOGGED_IN_SALT',   'o 7k+0X^a @a2l~q%l}{JmqWIss=ZNfDD1eFk(0hvb*wCB5s#iCd#G4W%tnR}gxh' );
define( 'NONCE_SALT',       '%UP}td7ma]$3QP9YLv!q}h$Asaa`bJFa/Y~|Ja,XnxP 3m~sJVaRuBe-|Y1rq5rl' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
