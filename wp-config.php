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
define( 'DB_NAME', 'diantikbanausen_wp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'kC$GDJ$gR,pmk`zZ=GDDjUP$D+*u>tFz.C-hA+E<4w%H#*55b:GW%/>hCf_]<hvL' );
define( 'SECURE_AUTH_KEY',  '*5>,y>~L[u{%!>2)k~Kr[~{a(v=?xr+.T(c29CF/A&5bPgoT[===`L$+aCh/0Bpf' );
define( 'LOGGED_IN_KEY',    'u6sw[cW7KtStBP!4$C}/bzOgKGw;topWBw@>j@1|Jbajb?HSbJ30S5%N{Di!MPS[' );
define( 'NONCE_KEY',        'hPoJE_:JzqZIt>Seprc+D8M5K}zICdFV8:@n!,mfmtjfa+8_lB(+R(bV|X^$PT(U' );
define( 'AUTH_SALT',        '_(MdH2hd)0<8Bh#eTWi4,2`|OKgjSA0nddjv|F`X._:v>7]r%B`OC%yq&&;j|)bv' );
define( 'SECURE_AUTH_SALT', 'dmygs-H5s*J@kOe*d+M8HcDfz6#k^_$/W=qQlnSKg)jNjnC%;<HLnYx?U_Q`zab0' );
define( 'LOGGED_IN_SALT',   'Ma^Rxm%woV%RNU]]$W=Aan(5=7C@_ bl EMr.EDo>dRZK#;U^PC:(u0rM^Ij_B-&' );
define( 'NONCE_SALT',       'u1,_bDvX 4)+y1JwMl1P%3OaOY8EQSFt$~ii]FM<WerAs}YT.5f7#qgP`Zr{C/*p' );

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
