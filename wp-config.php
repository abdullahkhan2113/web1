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
define( 'DB_NAME', 'khanistore' );

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
define( 'AUTH_KEY',         'HiZmW0olIGa_$.L(dW[a4]xl9OYKN8BxSs}#0p_Sc>Tzn Y@q(}KqP~9;l^5|jrb' );
define( 'SECURE_AUTH_KEY',  'k[`VRXgf$a5`Z,0odCUo0UyI88Bq6/,/*3D-AKsw /2duHGl/t-F~|(JIaT%K$|Z' );
define( 'LOGGED_IN_KEY',    'mEa(R@O02EJ5)7;$~*dXb:TMUg*C.3U3[Y +><S.1AAK+0QhfQmP?Ge=xR=QlDn[' );
define( 'NONCE_KEY',        '>Es.C18D(pqkJ[@`%<:Z)sHr;yUpJx3sU*N?}RvaV:4kaAIr=+a9Y>?>Y4pr[(#f' );
define( 'AUTH_SALT',        '8FTeO+Z@eyM6L4c*${@$X0y70[PxL wb %D4X9&vJX@o3k.3;WTP>lg.*=y}T&b)' );
define( 'SECURE_AUTH_SALT', '/vf:}bx-7UFmyGvRl-pua%{(zu&l*7%U?%w53,#9i}+RGwFCuk||F?NG(T;LFVS@' );
define( 'LOGGED_IN_SALT',   'pT#K9 z?J?hpopU2_J/NyXh^hX+M;`FXYG11}B<EXJ*p~-d mo:L!>kL` W&BLoT' );
define( 'NONCE_SALT',       'r%u!iaQvr<VO?{(<md?M?[KB&DzcLo5~i?DSnjk~PZbDxHjAVV--f5~}m;W`Kqnh' );

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
