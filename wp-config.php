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
define( 'DB_NAME', 'Buro' );

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
define( 'AUTH_KEY',         'A]wX7@iMBjXH3fqo&|U-4HD^H;2_E,9>uIDViX)CRb@d&[X/tbb,K/izx~AZPUvV' );
define( 'SECURE_AUTH_KEY',  'qTmfdoaLy5ZD Q(oq#^ipk%8^g1%P)+0nk]AuFM&XT/au(bCKYe:E85~#O38^$F$' );
define( 'LOGGED_IN_KEY',    'Thq|3YEiTG!@)bdp)Cy0 _9II=U<65Ia2rB0>U1J`@e3WgNl328,qs_Sw0%L<LY$' );
define( 'NONCE_KEY',        'yRcRXm+]w:BmgO=Stx(~yPC!3}f!l#eyKA1|YpWhEx%PyR&Y2pEt/3X]?ES5k;9S' );
define( 'AUTH_SALT',        'TV_w#PsG+]Xwj_wXC]8*IU9L%H5R(`Cm@Ls8@L,v!l7/GM}6iWOx/8Ga|,+@wn*4' );
define( 'SECURE_AUTH_SALT', '#u`.<k#lSyesX7Cf.5KGDe|0&fGWNuk6,[(b%d-cKaTpx$hYhPA`-u61`98GaMG!' );
define( 'LOGGED_IN_SALT',   'DM(TbW<?.G+.g[Fe:WA?f(9;tAmgZq2ft2rv5`njpqr!T&ALNP2Yr8w:T*6g5-2z' );
define( 'NONCE_SALT',       'F|f/B2B:$vE++RF-[gR1au&ti(I%%Z<C@do%R[m}`^wn(wa !8ed.CI.,#jX3GJZ' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
