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
define( 'DB_NAME', 'aakp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jZ%OEy`|M2owaA~b4QOAleCsE:02|K/+ba VN9607=d_,3FZb~tNvJCzRF+U0}zR' );
define( 'SECURE_AUTH_KEY',  'i9$~^&eOucX<gh^+/lQEn}U(ie=7&!N>}aTP$VO%;NO0Yg.y>=>[X|p~_E|]7(p3' );
define( 'LOGGED_IN_KEY',    '3dcF!ObMl+{SmR%Pc;/i#2Y-|ijSo+dM}M.te&LyOi;}lrSMZ+BVGSh>QAw@xV#$' );
define( 'NONCE_KEY',        'NpC7NFk:xr3xhP_{Xjq&MODM)<]U9/GU8CX0A,EKn<pdLow|WI0niVunh7rqZu+H' );
define( 'AUTH_SALT',        ',qOovU1kKt7Zv<:k+|cNK!l<FPq!(R7Re3gF,?6OKLI.+kbd:rnD?[v*5^7UPptp' );
define( 'SECURE_AUTH_SALT', 'qkqWQ<s3T.|ZGs6[`l/qV}72_xn1$n%sb,fEI.))>wMxxB5Bm^>0_?r{GW&Ch[-X' );
define( 'LOGGED_IN_SALT',   '7*F.ZiVjm&9)DyvI8?O[1k>!;(~`6-%%~vchzGZ<vZ ]q7}>Ks|bgymgI`gQ4.E7' );
define( 'NONCE_SALT',       'm[5i9]uqI}>asN(!7%8xgm#)iyCi@:lX`~Rfqr-EAGa}Z_T>W[[vQI-J<)UYnhJ#' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
