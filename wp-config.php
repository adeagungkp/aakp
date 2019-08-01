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
define( 'AUTH_KEY',         '%]*tp3|x8Z/62) %jyI`n(?3#8um8-V`y4|aNm$?a<6sjs.fVSs[20G{x-%$tg*$' );
define( 'SECURE_AUTH_KEY',  '91-g!Pb[ZuX9S*sW&1{hQaCDEAm QC0Xtk1W7rQ*E?JXH~M,D/obN?:o?N]_Hht*' );
define( 'LOGGED_IN_KEY',    'Xv?tU ,}Kni8>|%}TOMpHrf#)go6@mYuzTuQ.`MYkR$WR&kLP~szQp(t_vIv3^3U' );
define( 'NONCE_KEY',        '@l7jITpXEi|`<17CFWI:7azI2E@!F:5of8NZM;q&B(GCYoVxA91a;~LT%k&zIeCX' );
define( 'AUTH_SALT',        '-4PK)[+z<pjN.^ZE(s8!!XNh,vg|$r--?vgJ:zdV64T)sURS=Se#esq8Zj_kMP$I' );
define( 'SECURE_AUTH_SALT', 'Tiv<B62hOVS7-P^axU<Jz0>%>n@~MJi?8?T|[N|dnT:{nC!J>oA:)t&04:$Sc|4X' );
define( 'LOGGED_IN_SALT',   '#z@$/g{o.R0h3DsG&P7P#Q=F[~9r3K$,<zla:]eJN-T+RS:I#SMK}*OpM~XMf$x ' );
define( 'NONCE_SALT',       '(gnB/IUQ*W#%&j0UVqn(]_}/zU8Go);^+[0(ThL7p;|EJU-WV<nnun;s?%qejFhF' );

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
