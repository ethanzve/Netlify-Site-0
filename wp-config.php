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
define( 'DB_NAME', 'Netlify-Site-0' );

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
define( 'AUTH_KEY',         'HIP9$*`}B$jHVquS`cJ?tFt5Sdn(A; m/IPtCC9;al%1(&qpuG[6(gz]HyrlKnbV' );
define( 'SECURE_AUTH_KEY',  '/4DKpL_s2q/rR0wt|h#`!(#<(PSr7 jSUT{eSz^O8nEyA7+2W`vb,3uQ5jah*J-/' );
define( 'LOGGED_IN_KEY',    '=_owW_!0X}}JP,xFpWvenG+ayRPN7S|6&0xWjLmH2h)$U}Z6VszlAaaPNmGN4GGR' );
define( 'NONCE_KEY',        '^UDDb{*$vC3.(-5nwHv0B(0gIP~(axD3#=sUUH,ifY^ENS p{yS64,xpI~rJ>t^v' );
define( 'AUTH_SALT',        'k  Jtanbxj;L)r)!f#61`~Hh1A.{OeW[cWr($~.<>rqFM?~DbDPjmC:O| U2M^u[' );
define( 'SECURE_AUTH_SALT', 'n`OXt2/?`mV&AVGeJ&e&Db5P^t]gt/8x;nkbT6(k3%.l:2*M17{is/g|nE{li%hO' );
define( 'LOGGED_IN_SALT',   'pFwD^&,h8FLWE6-FwZ--]]Mx1#3GDzG1NiT,HFE*p mn^6g0ft]Cgaqh<}*8+l0r' );
define( 'NONCE_SALT',       'kSbI_,[t|HPH=8reDU7q8d: 9#C/;@Fxlp&CFP{]0V6Ax`Wj7Ee^v*AqPvn(ad$f' );

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
