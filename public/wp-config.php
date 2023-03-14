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
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'db' );

/** Database password */
define( 'DB_PASSWORD', 'db' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'Zl:*g$q|_-M1{0-+Ia^|H_$Se,IMy2s4[rDXD?oaq/ yvF]s|wvx=2tX`j&]23,9' );
define( 'SECURE_AUTH_KEY',  '~eh4C!VenC$u+S,$I*MUb!yN,-WE@>m&*5fR3a:r:;7R-uGPeU/I5+^0vJV1,,f0' );
define( 'LOGGED_IN_KEY',    '%de{qwvtt/pK>);;;3(/4A&q/rPWIPOsB?I8lOl8x,}H0PdLHxPqEq{#I^2nWeyS' );
define( 'NONCE_KEY',        'HPhl256B,aWKUvOglQ;l3W!m|h1u294?%DS-v3G[[xnf?Y~5ck*T?xV:lh,u$*=~' );
define( 'AUTH_SALT',        'Z,A.Cq`%>#RDDD`G%~t#Vsi(Qo#<<O2#KvHm^gA.qY~C2q.?gMt<2J+e`G^a|:k~' );
define( 'SECURE_AUTH_SALT', 'A1-aR(ZEJc^XdbX<n;|jLZn=I&QNhCfRysQHJHY1}&TI7_K!k;C2f=J;k}&wBWl#' );
define( 'LOGGED_IN_SALT',   'Dm||aS]?zWZ0B{5p{w,ks_Eo)FEf0Sz6Pz sZ Y>YL<$Q/B3R/4zxZP}qtuwPAKU' );
define( 'NONCE_SALT',       '@p*LQT`nbXa>:=?XeEHO#&={!tc2Y3f671lUo~ugZ.v<DQ5E$DvsKLu6GQx&IGc7' );

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
