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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'f)i^x-/Fv.L@ALc4*qffz5:U+N{N&qA8a7 Le:Os^zZRX7@WsCpQk?hO0wFP8wxG' );
define( 'SECURE_AUTH_KEY',  'G8Sy3^S?QKc5!guklmFtQ(PCVPgMRo6*x,<AC%jTg AeFZxn,MS_FKe-]Anyb>(_' );
define( 'LOGGED_IN_KEY',    'x-2*VD}zL!fVT_QpjfNvNXY 6U(lj=#dD3?3<:B|wF=S?XH)v9Zsz98Q{][[Cx41' );
define( 'NONCE_KEY',        'B9C##Y1WXFsIvp0fbde3 %oHZ47 Qo;}TWVg1gye|P0Z1+({]sMk&ry6Q/#FhhCp' );
define( 'AUTH_SALT',        'py*Hu5mPCAstj<_wS$FZe:h{p5<F;AB,]B|34+A+ll!mH,(8>WmX::3`qKw6y!7d' );
define( 'SECURE_AUTH_SALT', '@PuLPP^M)4WiRaUpx}*6|[`6)l50Qn);N=SX[A}OfGaDJe$:&59gyzteD1++P>Lx' );
define( 'LOGGED_IN_SALT',   'ziocF;M0hw~&R_5P^-wW|W{NhUt7/i6tVJ#>,_lX=NlR.[5ipwX!CI^!5fJdz;&?' );
define( 'NONCE_SALT',       ' |Fy,@rr!^YeXs>x]L8gydmiC$O-g,KaCgEwF;W4gE(C@_1nD>y6FO &Zxy]u~+k' );

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
