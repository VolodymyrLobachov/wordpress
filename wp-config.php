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
define( 'DB_NAME', 'wp-admin' );

/** Database username */
define( 'DB_USER', 'wp-admin' );

/** Database password */
define( 'DB_PASSWORD', 'eH/NCjuc1BpOXjKN' );

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
define( 'AUTH_KEY',         'ZU~fe&E}+p/Q1_W|9VcJEkpo6&<#E{7Z~|xQJDga~y&VX,s~y[iLJ$r{8wCOA;+P' );
define( 'SECURE_AUTH_KEY',  'm3^>*/Gg3&PlyCv#s{kXAg)R430z[kl>s~>wla3#o<u9W(|Qy,<,ES*NhS+)X{F^' );
define( 'LOGGED_IN_KEY',    '~)Uqu-2>6UKvj( N<dg]oU/rU2n81zY`.akC9,.PA%ExU${56[49^8y&(S/?Wagy' );
define( 'NONCE_KEY',        'CSe.NVSejO3sEK[$OG8jG#kHxDAeaRG_sfp9R;yemZ](:14f>b6s$<STrud2Ou%A' );
define( 'AUTH_SALT',        '9LHZ*a)*=zP*1M!)ja@X~eTHUNoWMD+*MS84xDEc`nYd75dJdi3|FjpnE%l*jbUA' );
define( 'SECURE_AUTH_SALT', '{1s?feGUx[qsKF%b7#rJTB]<oyxs]go[1Vc&21 L]W27Kq!>*g5TTkM2Z<0qy<J!' );
define( 'LOGGED_IN_SALT',   '2}._G]@wm@#o3:Bfgm.5RScXtW7*Q3-ti7 bRq,R<#J^04RLiG!%(c|!X_[>MP?#' );
define( 'NONCE_SALT',       '@NU18?<RDCXVeSE/jjV$DEd%rTPkg%D3jWih-zoR7yG~3:u,.n+*3_G%nfZq2EVV' );

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
