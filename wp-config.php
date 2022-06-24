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
define( 'DB_NAME', 'wp_app_1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Password@123' );

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
define( 'AUTH_KEY',         '!hkKY#|z7*`<*>]BFt70:lNn9~6wH,@~Ae? qOxhttRoQ>s),8#Esr;*`{gc6!{&' );
define( 'SECURE_AUTH_KEY',  'f.7kRcXV)!uMcbx|FT)>40FDnS^MG<*_zEitF;5uIS4_-$&CC.7g+ys+SN|_*E[{' );
define( 'LOGGED_IN_KEY',    'X5iS0 wDM/U9^vQ>rF$DW&>Ug3YKsYZ}|Mi!W=zMIr:7&M*.V<DIb~8VS -u#+8o' );
define( 'NONCE_KEY',        'Zh}ZF/R[3|Az&V]aaW1|2x-,;`,Qh1M4=Llbo:f5YKL94KdOpWy{YLi_caoq}VW ' );
define( 'AUTH_SALT',        '-u8hh{{L~&sALjWT8e7ob1##X>@3Fj_{6S*B#ad ]%;![0uKfwZ:JPm2;zV^C(1_' );
define( 'SECURE_AUTH_SALT', 'fml_}yTB}yl^i!hdKcCj!Q)N3XDi#T.NxAhYU]IC9+2K<ozkj[KX#7{_&o0T3i{6' );
define( 'LOGGED_IN_SALT',   'k{y|1:ehbFPc|m,Ac}/sX5N$_#]84YA3flPnltRg/6YEi@ [$jc-.AG L< v0Yg7' );
define( 'NONCE_SALT',       'gXdIj2^I_-:rUo7w3t:VzxGo@Bme6f+ZykHWH/Lr_TcsOxr|rGn)NtK]a7cLu`?{' );

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
