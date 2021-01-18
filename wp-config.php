<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'demo3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';@n<A*Dpt>?C;N<_@]Ct`Fe 128rPK#aK7Sr@:k)?FAIH@1%-R&wzvXZ#9J}I]?C' );
define( 'SECURE_AUTH_KEY',  '4[A`R<8empPW<vV|l,6e(IPPr`86_T6SI^Z(VtTOf^jtV5gyy}2_wmN ?B<*^^,O' );
define( 'LOGGED_IN_KEY',    '/STwn`+orAo([GPH;lQxHbm(]!*H3$H{>FkY[~N9dPFrG1D`g5ZUD(mGfa4Pan3-' );
define( 'NONCE_KEY',        '<+{I#!p<p7S#R3T9AP`S/0m5Raw>~`m-n?-wpC][NU) .tCSmm<i=Hd>DMwSdk7_' );
define( 'AUTH_SALT',        '~LQde2EI9cw]?]2-u,t8|3rr+HU7D@Y8V3FssK`;6a*+V$cAd8XCh=+GTgNLCe9?' );
define( 'SECURE_AUTH_SALT', 'k#AvMmDorvvs%(@L-/PnD9Rze29MNN0ee1MB,i25Qtf}9$hDiB}~[6YC!AXoOZ[e' );
define( 'LOGGED_IN_SALT',   '7T%&!LsFNTeC)&w*l)Cq0kivf64N<(2-touT/|&M:gES9)T2vaZJB*2*jY&{yZQV' );
define( 'NONCE_SALT',       'f{r+t7TnWC34#~oeBJ.:~rMIzqcJ_ .BB*qX?DFvI0,D~K:}wBA<0<J7OyOTo`m`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD', 'direct');