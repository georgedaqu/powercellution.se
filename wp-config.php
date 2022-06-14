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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'powercell' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Qz$iF0QEA3heOq|4?pkLfQv [bjaQ@|L8/;KDSH`0kw;E5.?rI>$/M^e$%y^qLw#' );
define( 'SECURE_AUTH_KEY',  '(7&,^S3k?BCzyaFz$!-mvZ|G?,bBMQ4U(Hb})LB}!7+;*~oAc*8!Za{qwHoWRzZc' );
define( 'LOGGED_IN_KEY',    ']w+vn7NIxl^PJ)aD3g<nre`Z,sh*!?BSD6CT8V-?|vz:HWZP{J}6J9rg :PuI@?_' );
define( 'NONCE_KEY',        '@Lc)PLB~tvd:-]r!TZ:IV{Bo~fIo&>+NH3NogX>1VIJ/%3Q[;<+]<=s0*qkD6RRx' );
define( 'AUTH_SALT',        'X7AOgn()ohJSd|QOC)%}Bjd:t4-1Ft}]iChr/$Q5Y3u]?t; cJl{KjknA|)tyZ}#' );
define( 'SECURE_AUTH_SALT', 'z#WG6+G&d4T%L#.dQN1uCex3^ p=}LXa!TtG4{>yVVJ{!gbKN`R_McNZVl_4k5yI' );
define( 'LOGGED_IN_SALT',   '1nB}~BhToc!*qx #aMgy25FB2z?KVyd-~&S#oW?lB9 `kY2a-?_qD:G`.$j&=,Nj' );
define( 'NONCE_SALT',       ')b&@Q8IU,D!p/%;LGW<#G!${&V(ZgeX62c,FfcTiGl1Rr^TO1osV,tAB(du~l57.' );

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
