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
define( 'DB_NAME', 'wpp' );

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
define( 'AUTH_KEY',         ':Uo9SH0z;@Z|D?!SK+ML *?$tCI5oCV<jP,7)pov5Jywj<hk9<|2T_}=u:5]19V@' );
define( 'SECURE_AUTH_KEY',  '8bDc974cEonVXRV(),tMRH]vz(%K n|wovPv==ZeezZ_TPwW2j#9q/T)Kv^QxJ==' );
define( 'LOGGED_IN_KEY',    '`Q$54zk?!un6Xt(j+#=(@ou}`/g|W:YAFr L)( ~jx7AzhSU),&G!s?AQXk#.-&i' );
define( 'NONCE_KEY',        'BwbaT9SuKX Na+(Z$##cB]}GhmdWjMW`,eccsY#(0z,JIL~Y{N=ry=4<EeeRL&y:' );
define( 'AUTH_SALT',        'y$qJPTeCqiW4P/)Nvzsx47/DFFAA=<gset:QIJ&zFKh=`<@/!.rrC5Pn,}#GE4Ao' );
define( 'SECURE_AUTH_SALT', '.*q&2d)]hW-UWxJ7JbSfw!^m:mLugbMtAyJ>0C-5?e})q) e<R1Z5,|7296<bI!M' );
define( 'LOGGED_IN_SALT',   ';sUcHJjKrY3i~Cp.ud(Au@[`M(J9Vk:w*=|!.01wJYO5AUGGc&=m,EV]nNvK3Qt,' );
define( 'NONCE_SALT',       '[qQ~EcHsjP_FeBKkGhLd{[%)R$(*TVsE]^>C8:xSg.O#%W~CsBVnvNmeeU`ZoQNm' );

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
