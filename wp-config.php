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
define( 'DB_NAME', 'thelegacyforge' );

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
define( 'AUTH_KEY',         '71=g,ha*Jw;~k%KoC)x~tzy)cDpFC~1F!&0Ic}]orBr8NDzi65)j_`X5^Y&Zqm2]' );
define( 'SECURE_AUTH_KEY',  '/3{ J6OjWr,%h%ZX>)huWiCirom?$]XVaHtCX$&37kq<aE;+.v$L8IM`2q]VMlw@' );
define( 'LOGGED_IN_KEY',    '867|Ci&C?,K(le(Qr&!?<}4qIf1!sWM9pwtuHNRzQfSUs!i=y>b|PTwp6|Vri.Sw' );
define( 'NONCE_KEY',        ':fGlBWKsJfxYgm@n*_/9%:FO#L2ZF>xFzG~MI>g[6 r]^me<3inp<+nieEcF,8Q/' );
define( 'AUTH_SALT',        'z.2b.u+Go?[Eq.i^B+LRz7{F/GiY:``MG<p8&i9U1y=8Y:_3?:_V`C&fsO4wmj#7' );
define( 'SECURE_AUTH_SALT', 'mJ+_QLmeNdblM#:nNy#-;gzW)cEYvG@g&)TUP$^f$rCj}`uoE9 -$SnD,nWbkv W' );
define( 'LOGGED_IN_SALT',   ')3Sy?PA>9kkcH9_f7$kTvn<q?7JqJ1v0XJKL4:%.HMiPC#[Ok_3:?ct^BK4I&#Oe' );
define( 'NONCE_SALT',       'rlViw03UZ}aL6Yk||}<h:!>u?@4Ce.lPrZ.tx})lz2B4!MdF4QB.T@IzKdp{lvGf' );

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
