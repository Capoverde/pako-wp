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
define( 'DB_NAME', 'pako_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
// define( 'AUTH_KEY',         'put your unique phrase here' );
// define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
// define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
// define( 'NONCE_KEY',        'put your unique phrase here' );
// define( 'AUTH_SALT',        'put your unique phrase here' );
// define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
// define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
// define( 'NONCE_SALT',       'put your unique phrase here' );

define('AUTH_KEY',         'kn}1/H/]-_.$|:tj*+~hL.u?j$kX%VQ-_N|S<~|m+(~ds:@K%-n.[twky p)$EZ$');
define('SECURE_AUTH_KEY',  'fk/bf?6o[x:)CTYgFPk+VzB_(;X<fKn#U46)#ZMo/daindOjsM-$2i.:p7x$C0s[');
define('LOGGED_IN_KEY',    's)vF[eT!FQAc@=St[+%(sAj+Q^Lz6,qkZ1 =-!Fy@Y4i--aTT2*zT|-/Oc6yQ.Hc');
define('NONCE_KEY',        '$ BW7rN9Elq[:Y-d)/0C,Hu|2Rb9E,`RB[LA3,T7fSr_X}%+FzO7nMv_$YXth@YG');
define('AUTH_SALT',        '@,>cRiAf)ek3GNW)-U%Z^#dFZJ3(b3Jj=IuQESE]xG0azS?Kac<P<;]BXEG,E{Bo');
define('SECURE_AUTH_SALT', 'vf~#:%`_FT)vFYS2b%(-zWvFenKmj@1I-K)jcQvK[v5-I4+_~L%S7|e6?5TZR?+<');
define('LOGGED_IN_SALT',   'qoNv]#R-^xzHi?!kT;Ro9Y%k$hSYWElIKW(|+hO9bGhi.V~8mvwK- ?-`>i164Cq');
define('NONCE_SALT',       'ga2G_oLy)2+b5u|B#1a=Gn.EqR3sI$fe4klHb+8cSE|9:Vm=pgjGf--vHsGsi`;9');

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