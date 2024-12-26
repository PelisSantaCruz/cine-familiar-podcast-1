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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'publi_1' );

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
define( 'AUTH_KEY',         'KE}B1-OK@26%dP%N+^=9dZ1A7] AvSmHLc+$q8{&X)XI6Pm:zJv7JmGzF47xL*PD' );
define( 'SECURE_AUTH_KEY',  'N_Gv@V(Whh6B.}cn^^V*Pa:4xnrqs*QTpA{vA]? 8>%Yu!&NELGQ,qNw%J>Sp7]f' );
define( 'LOGGED_IN_KEY',    'uF]I>Iov2%/1[2.Ft7=;r?nIy7Yjhx3d&oUb=^6W/%$y.;(-)Nh$rDOKa_~{]D$ ' );
define( 'NONCE_KEY',        '%-VgV5lpXkVuc@I;~Z`~L3fBAa>NYX^QG(VD+bQ3A>=`v=b%nJmZR*1rYMfY rAZ' );
define( 'AUTH_SALT',        'R$YcSy A`Vuf tw3v2N=fCwGg+GjM(K2EZ`%Q[5py>)nR HPl,oVm(j6::i1e#fv' );
define( 'SECURE_AUTH_SALT', 'aJ$)`Zhlmd?i#`%0h35glfs3l2>H(>|2se,9KCPC6>k~<tf7VuO(&+vC<$#2OSXY' );
define( 'LOGGED_IN_SALT',   'r:9,1z88v[dy(d&=ZS{ga^1(N=@=h#s4=`kyOz. {*-iU`fO)U[^<:Me|;}~`yXz' );
define( 'NONCE_SALT',       'Rem:gEX`pKV.!nl_w/0+rG1#z{sSRgvzl]F6r#8~D?//`Gtn)dq;yYV=h;in%SJ,' );

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
