<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'Shop_3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'F0 3B7Wl7wYtKZr0OyEwy>~%-5[M8ptfId{cX0/62#+BYtlYV586EW(;XzxLV:4K' );
define( 'SECURE_AUTH_KEY',  '~o_6(9Mj+KHjO?D`>G,&:8z*j]f.We%RZQ@w0_(lH-Ghfk+Z>k$wrD8K!VM4~E+X' );
define( 'LOGGED_IN_KEY',    'R`VW&ilse6T;s9s,,[j[7{2/p *ktaSnBJ+VjaW}L;!93Bq6)hY^AF)b1WE+^#UB' );
define( 'NONCE_KEY',        'F]H,F_MGBZvwMa#r8$EC:|p<HyQ,#PI_(q232?$0=@Ca3yZAy.hNk0~=hdeLcoL1' );
define( 'AUTH_SALT',        'BsJp F$>*U1Fd-l4R(?eY;JYiE]xf?(W,>H5{(g)#UYH&v-1XJh14RWzxlwat=Ae' );
define( 'SECURE_AUTH_SALT', 'wTy2aFxtNtH_tJ8S| <]y$iy.@a1h`&5T1H[0Z_WV#HRJ7A:~e_f$^_;bZ@z}c6y' );
define( 'LOGGED_IN_SALT',   '3>1QUjrt}u?8n*$/t%{0Nm:y$bf{}GEEsBL]w3+`{%nX]~h(`6^,{QkA:Fc)BVag' );
define( 'NONCE_SALT',       'jQV_4.qc;%B{QA Q9J4k/d_w^m(]y0v>%D}i5aU,wcfl|o+<hHAq0m|JPth|KRoD' );

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
