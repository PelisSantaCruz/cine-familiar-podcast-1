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
define( 'AUTH_KEY',         '5<{J~C^{e3oP*A1qTC^J(w7w!>y}!Ixv[+A#b.XXcb&K3NNTZVMyF2!07%<?4~Ot' );
define( 'SECURE_AUTH_KEY',  '#Lb7N}]Kg,lZ~Z4j?]z]S`:6z,@G`)m>k_O|I0{RaH~>70#0(E78OBvpdohWpxka' );
define( 'LOGGED_IN_KEY',    ',Oe=>F3P%E*R.OHJ(h9vjO%K5Ai}yhU8$.bolmIwHlO.gjUrgojxv?QFWiMt?LUP' );
define( 'NONCE_KEY',        '0iN.!ad0}3GP4}fp@i^YuDhm6);~S:JJ0RM4|77=KfW19v3hNux3X!zowER3H-r(' );
define( 'AUTH_SALT',        '.nyF-}s&h@3[Avj%*F&aFDI~vQ0&>Wa-Zct@$ZX6fH$}SqF(j-#re4V:{)Svu>VF' );
define( 'SECURE_AUTH_SALT', 'J5m!;)(L[bQ|N :oc*K1nD*Z6n)6-k{C:(vbfIHEbZkt>EczJuzd!GDm_N-$C>.r' );
define( 'LOGGED_IN_SALT',   '1A$ {B,tb?E<bAZ<C[3S(j=F>?7CUZHekMud|~FCnkV_}K)0s|)n=<M<dp1^g@?U' );
define( 'NONCE_SALT',       'Z&>zl$]JwhkQF!cg-(K3Bc/x2(JM;+qbQ_tG/^8OP5Qb}hLs[P,O2zXv#sm?fxU7' );

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
