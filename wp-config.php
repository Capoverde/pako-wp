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
define( 'AUTH_KEY',         'ca/`|Kup36F#sfb3?^u%!vC<l|T#?JT0HS1cUS**j(~w@w55Cp)h)6/,t(  {#0*' );
define( 'SECURE_AUTH_KEY',  '.t>[L_yI<#(pdOkJdI7!}V!tAOz[%2bA~Vl|$2[csbv:KNYkXS<1ENYVW$q X!qC' );
define( 'LOGGED_IN_KEY',    ';BL_?Y0H7_2;lN3-{tu+>WXQHV=K7m:Fs5Gxui-$HR3wHe?GQZ*F}c(}^.) ?SR`' );
define( 'NONCE_KEY',        '^]}m:e92a~#x3mR]Ma9zr/9Up[/xXlo-rVZ!|pn<K`za/ChX`N5&I<DvKY~/eX[v' );
define( 'AUTH_SALT',        '3^1/V,Y]gqIQTvo#=GN=w>..5@FGL?x&4pt:_{[.zceMb!A,fsMvk3%ZEpd3ia~5' );
define( 'SECURE_AUTH_SALT', 'lte0}>)O/wQ2 i>qD/IKS&7j]3JeKKnA.oJx$6WC{,f l)R+4#=4PMAhe5^{tFF<' );
define( 'LOGGED_IN_SALT',   '<NoF<tc_0f/v5vx3RXrIL+p8^_E,yi;R~!7#?U;Oo[$g1e!N+TI&FbR;ORKX=t*C' );
define( 'NONCE_SALT',       'g)!pm)-U2PZ^jF!4Be+;2P3QGHL`~9Qf#AhPMVZ]TZD_xp3r8&gR0@kT+o9:uWws' );

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