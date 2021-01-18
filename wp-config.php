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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressjpkk' );

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
define( 'AUTH_KEY',         '^InI)ReLx}qZl;G!Epv83]2a3BJVM%63>8c57(c:uHPvS0/ZgDSmmNpI9IvzP/`9' );
define( 'SECURE_AUTH_KEY',  '@/ZzL0H#50Q|4bcBH;*stT/KI2sjLi^2j6=X@R%=0;,y+C}dKj0}]&pv]4f<LmW0' );
define( 'LOGGED_IN_KEY',    'TI8|F!i1L]IC,GV]f2j2E?s7h!LBh_g]nFg`[t##kPBX0qyT^[}Ha*<Zu&Ubp82m' );
define( 'NONCE_KEY',        '7^EtT_;w2+f+DS4TzFJF*3</qlZj%@?i3nY<]5ho;qC2M[<fBZqJk[ExI8S*/AUB' );
define( 'AUTH_SALT',        '~2UrVLqVfXy+11tywJ2^E7Pv*9<.0ZS w3 K+6qCHVu~f_V!jS7^<=,ry^TeybQg' );
define( 'SECURE_AUTH_SALT', 'dGSE.e)>@_Ce_TAR,*5^h~0Ri5;p)fC<K=<@5q+W}t9;_~_6V}O}gBUG@xFMP*(D' );
define( 'LOGGED_IN_SALT',   'j`ZPgICiHXXpjaM_CNMSm)$3J7J?--Nv5fGppFnpj95tikxvha#,:gB2-2>sH<!o' );
define( 'NONCE_SALT',       '#:?CR|t1$LHe`V6J!|uCspD>E1]=r{VYtX;^NPQS{23ubmEi&ls^#3~b|=SC2E)6' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
