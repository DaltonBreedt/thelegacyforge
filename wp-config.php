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
define( 'AUTH_KEY',         '?6gvPeL[^l)urI-C};4/V|A:x#xk /j>|c$GXrLfb%wYU! 6_0_f[JrF[YjI8;pc' );
define( 'SECURE_AUTH_KEY',  'xs,:&OYr0{q$NK?vD6@]L7W @XTmlfD.oI6PwFb^`9>-.%KCu@;+eY&]SjUqjMG(' );
define( 'LOGGED_IN_KEY',    '<N8r>/WSO2k T5256j:Ti,2Zc%cYKDQ&puw&W+QR;T|G2ZEwj:)=rUWId&HuNfy;' );
define( 'NONCE_KEY',        '?m&Y460oO/LKa?-UYHd/`pkPNT+3Q-bBYk;htpuxE@Dzo&({;HOw84!29Z%]Nu(N' );
define( 'AUTH_SALT',        'R6G.5#ka7)K?MZxy*z ;X^+4%:5lsa3!a{MV(Xts}s$X_N,ME OV~H]#=v0lDSJ7' );
define( 'SECURE_AUTH_SALT', ')*I7Tb8CNkc!(+*1JS8tVm<}:3I!ohv+f}Sfyo{BA7wN)DFe<HgiotD;qbTRHqB&' );
define( 'LOGGED_IN_SALT',   'K}5gs5LUnb*[glxqTDh*mKO?a`Z<9ErAdu>G>uV!/x5P2Y)?ij}U {9CLE192a8P' );
define( 'NONCE_SALT',       '_6IIR0y/Y6p=hf9?u$SAFRC99#n6yFTB$PM(Y`d/t0s}HCU$.57c5JB/[A-k!uzv' );

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
