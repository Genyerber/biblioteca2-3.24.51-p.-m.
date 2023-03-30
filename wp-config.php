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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'biblioteca2' );

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
define( 'AUTH_KEY',         'xl.FB+&&F5]fdM_Sl3Go7:Q%Q*M9P2O|3 `i31]P?ga*TGy+JQz;JmESNT-3&EcG' );
define( 'SECURE_AUTH_KEY',  'Acx9gnay(!%_o0!2b >Q]ZrmIy2Ab(hU/JD+KcrBFT:y.RYj/i:kKaCXw=yj([8^' );
define( 'LOGGED_IN_KEY',    '$#/aa7g*[7[/M{gyJ}BDNA1SO]H3dvmj||U_~X*F]U9s,9tRnNw+`w*69O0P5@o>' );
define( 'NONCE_KEY',        'OG2FL?j+Q u7}qrK%[zuKlZtu)TTGA8{/@0TH:XN2aEM#}y!3Y@yc0pW1sH-s9?j' );
define( 'AUTH_SALT',        'M1q~Pp+)lIl/_OB+Fbyi$3=#//tCOszD?c(B@.F0h%+Y,Ha;:~T`Z<tq=*HMQ~vr' );
define( 'SECURE_AUTH_SALT', 'R HuFS6*nVm&H{-2l[i0P F-]?mYGvtZH>|f2bM!EP3eQ+NP6{evGrW Ko!sE;0S' );
define( 'LOGGED_IN_SALT',   '<]|+hVT_&x:S/Y-A1Qh5*lV1$7A!8;?cg+g:4+wS)`bleM6sq}dJ>|,H%6DOxW>N' );
define( 'NONCE_SALT',       ']*fVT*#W5D<dJ%xxECpuE2uYK|]vC-,kj#yoz:&bsh?2 ;rvT5Zf#%K0jTX3gE@=' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
