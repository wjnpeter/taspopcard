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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cards' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

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
define( 'AUTH_KEY',         '>&Rg;ytTT=OwzUTE:arIU`&Bp nMEx{5bh2:2b*Zs(iB]O4BT&*n:scqZ+NAE(Ol' );
define( 'SECURE_AUTH_KEY',  'DYJuq$dPjpZOIo.^L3_Y}&xUc|^si)l:w.NZzX$DG-gkZ%{Zfd4G`@d-]0Ch8SOu' );
define( 'LOGGED_IN_KEY',    'K }c>qE,O<Q-[oAP9Ok8mIc)463QtM,^#RSEKP/31MYd^%9eT)1as|Dt7cP=jHo+' );
define( 'NONCE_KEY',        'xLL2e7-@IY#m](osxn~TRGgHOS~At9[y#!O7YOOMc@ }@~mer4}mF]Hx,bM@nL=J' );
define( 'AUTH_SALT',        '/F99%l@Pw5+z,q<,Q-?}7<{sf3l/Gkx{.&|cy_SRn<J{=S#Euy-;P0>_t#(xoZe,' );
define( 'SECURE_AUTH_SALT', 'km=bce}r5~+Y=#oE<E2~opdX2KcN)J(*wP/iOJsH*VVTKfgsk@2t9ZGsdY!.h{z*' );
define( 'LOGGED_IN_SALT',   ';m][F~1,sn|f#BLOeQ%&Ru6olVWR!1aA?awW>*m)^<?;1Z0>$l!I/-zza2?;MZ_}' );
define( 'NONCE_SALT',       '-|mW#8c/-6exD#UPNy<vn6WCmXCImd}WQmae>>@7M^qE2Vbn/aJ?IdF1eIAN?wAs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
