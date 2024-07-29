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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'starbucks' );

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
define( 'AUTH_KEY',         'zA~3FLp[)[4dw1*WcEg:(Wsr9FvfKYJeUAk&NN0T#Yhpi<wU!8rE1m0yH]]< &(|' );
define( 'SECURE_AUTH_KEY',  '@&fe$/$6]=+]2{E]qQ8rRfK,ncP{!8OmM ^#fZktj&<`_L{;:2g{7w1Y1q=hPFw[' );
define( 'LOGGED_IN_KEY',    '/.J.U.-hVx%@zi a[K{t:2Gxf)m9sC8imucU1U6=pUvHm&W>Z&CA.}exjn3%),x0' );
define( 'NONCE_KEY',        '&6:oKl~/tL~1Fsp}ua`(f3FHM5-=3**S{xp7ndd2vW^]zYX~6I0:VuQ8*uT{|;|O' );
define( 'AUTH_SALT',        'U#HO{S{+n1ImezTe#jR;gG#XCD/C!s$F$?]9WqoNK:gG!4*P7Aw?mll_#<M8+<^#' );
define( 'SECURE_AUTH_SALT', '7FAT%[b9C89!zfH1u8{=8}HUn4>;J|+^_j]n;Fj:>&1MZT<_3iua._E,Mng=*0XP' );
define( 'LOGGED_IN_SALT',   'Z;3G+=H)=}RW<]XRdNU15u]X`UR3R]twT.ha,BNIQ!|@k@SgGISp>nH<B6F)3#{<' );
define( 'NONCE_SALT',       ']E+/%RzoBGXxV8XeDdSqDBM7wVUbnR6*9@ej5*nZ!SU^(^>_u=-1Ob4;O[^`#tyE' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
