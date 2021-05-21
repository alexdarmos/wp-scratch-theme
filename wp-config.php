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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'username' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ':):Gx_~?jaI#+:VC!)2~]G-F;=jwz0|Rp,)uHKG/y@@hm2NtA yhU/qhkPE@59T2' );
define( 'SECURE_AUTH_KEY',  'e.yuf?tea_]HpGVUe! h(ireRU)6]/(,0co58(I^<x6qso?<t8q-UY3m0dlHcQ8R' );
define( 'LOGGED_IN_KEY',    't@o4>`7]kF<)Gda$wTbH^6R8#=8GbcOrv_6|1i:m278(UuXEs8l)(dOF;5pVMe(.' );
define( 'NONCE_KEY',        '#*[&b=np^fnYr;ic!Sn(R@U%_Pu3^sKCT-S^K9F#(mYL}eTM~9A#}FDEGBrL6pI,' );
define( 'AUTH_SALT',        'S;$F?.>88c).l~@4JiC9%>ssLMXBd7$V OOpg?>9ba7 vy8<GAFWp):.*Nxe8saX' );
define( 'SECURE_AUTH_SALT', '=ZpYKxS&THDR-s}NUcY]j>%MB4<DQ(ZKLq&C_iQbg 3nLscf0V=d8!Kf1,z+:dk#' );
define( 'LOGGED_IN_SALT',   '.mxa1=D4?-AV40/5^I*>z^fb_-Sy?3S.v6N}t1B@62B>!lsjnSAbvDN6:.gZ/6Bs' );
define( 'NONCE_SALT',       'dM;/(;#p#/NXsqDyILqWt?Nasn&Re ybjBs}(MSS7!Y[B?wQg<Z~X;-S+)(Uc+ e' );

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
