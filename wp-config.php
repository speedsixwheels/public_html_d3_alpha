<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

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
define( 'DB_NAME', 'd3ass_wpd3' );

/** Database username */
define( 'DB_USER', 'd3ass_wpd3' );

/** Database password */
define( 'DB_PASSWORD', '6{MslAI$(L80' );

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
define( 'AUTH_KEY',         '/p^UTM/l<M2PuUYS7s|3Mz)=Z#F@h/X`j%On:H0`iX..{OPxi{Jp4R!#TEJAD:y2' );
define( 'SECURE_AUTH_KEY',  'd5hfN_{v<T y EJS#=<-k$+6c!7+W+&RFBI&73LF_VN3uv7wc(P2&%QnXW%tk2Jp' );
define( 'LOGGED_IN_KEY',    'jTh$x6V/y/7$S5 M@R@ZHLk,Qho7/&NN]5:rfTSFt3UTp0{@z,?)r@H )|9#YRhn' );
define( 'NONCE_KEY',        'EQ2~QB@0Kp]n.!}g+B[Vo:y]`ooM4/pUMQMpzuxFD5D!9+&dr+}%o|CY]rmKC5=7' );
define( 'AUTH_SALT',        '[eKF+qZZ#61Tzi*c;S8AR_p>R7Fr#u $_BXF751;RXfC.(66L3TB}|ZavR ABKv3' );
define( 'SECURE_AUTH_SALT', 'G95nh!xYrLaIi5`^GNBoAgm-(SlC@,NT3{s:!qdxKFLXX@t[6.a_;=QFlbs48l~;' );
define( 'LOGGED_IN_SALT',   'C}kL`U!:8{p)h*zvb&<Q#%H4d.VH,7.!McPzPRoKn=-Ork%5?_<)g[0Zza&wSh,b' );
define( 'NONCE_SALT',       '/S@,Uq*<?p5rB -!U<SagWbS3R[_.mr|rENBuydn]Au{)}RO0gR|3&7eE_$g0>7d' );

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


define('WP_MEMORY_LIMIT', '128M');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
