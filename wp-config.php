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
define( 'DB_NAME', 'wp_scout' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'shrestha' );

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
define( 'AUTH_KEY',         '3>q(7=`SO9Pe72zpl$aiR7V]JEb5#)T]i!~^Jvw#Khh3w:sWSWir`Jh4RVLd.-k9' );
define( 'SECURE_AUTH_KEY',  'UrGn?KvK]lbA^Qfg<GB-=K8tp|,.][=%L:y$Su FIWO_8#,kMhGbWR|6I:@(Tr8@' );
define( 'LOGGED_IN_KEY',    'axi^fa_P^i.1!uRP#EC,K%Wskt}U_b@_K1eW^{;`)c<xVD,[qKm1M&^;c5g,t0O%' );
define( 'NONCE_KEY',        'ATLT[|)|i-wSOK0+}&$- OZ9[x0 sa%}MG4GWPR?!HtjC!)N.{%E!.QR)s1sAZ,G' );
define( 'AUTH_SALT',        'j|8^uo8x$m<_P-pUN!K2j~:v:)U,M|R:v<E+yT79dFSaXY=~rU1gHaw*Xc2py*=*' );
define( 'SECURE_AUTH_SALT', 'Sn`nJ*}J[ k!!e#T?D3+5BAerVv/GhPD5mAd6-@x-}25V.+f3~h86*WeoB$F3..;' );
define( 'LOGGED_IN_SALT',   'PpfD+`Catccy1d[%(6ez(kWS~9,>6-k)Vvxt1Mg5:hr3q0BO3b1uNbVXgY&0IC2~' );
define( 'NONCE_SALT',       '*HPbZ1/)s<EKB0R/GC,5q;hx}eq/_vw^=B[tsJLNl[d{)hWhv[ MGy+S3a,3Q=P&' );

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
