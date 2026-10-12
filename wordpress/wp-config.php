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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'InvinaSound' );

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
define( 'AUTH_KEY',         'HcMvl{3baS>FdH!f4P9GzCjnbQUuI7J_&1LMK?[fhp,-`Jh(+x`8vJ!HGBO!co~}' );
define( 'SECURE_AUTH_KEY',  'iTYY&`CUw=vf}m,)>96VO?f1c~>a$&_3+:zcOjkbP&qi*W2e$:b;&{~_r?Loyw<:' );
define( 'LOGGED_IN_KEY',    '<TmhG9YhHuNEoDc+WK,l$u){H2%`3WmX8OAFiCcARL;4b( hHFS1&clcn|BX*ql1' );
define( 'NONCE_KEY',        '@.:%lFDBE|I]eSj&Q[^7`z4@{k,k[]~5^E>6p`T{_m;X^3hwog-5{gx/j/s+rmuV' );
define( 'AUTH_SALT',        'qz{3pKNkI43+SGU t C#O5[@x*(!i%D9u3Nt-YR:.()NMt4Q.{^LNU]w.lp[cr2&' );
define( 'SECURE_AUTH_SALT', 'cxN#,[57+M-J]lkL_D#_*@zf5f.J3;v/+ePJrHk;H8JZEbI>#U_a?c`p^ut{zdn:' );
define( 'LOGGED_IN_SALT',   '$j87/k&[hMURH>N)B>rqSE7:^Lc^N}HuCC8<LayDM&!3npF>f;V,VH|RLZG ~`%3' );
define( 'NONCE_SALT',       'W=.| _~n|@vSXl%c`H^bH^ 4%Y2YZI;WVYVL~~14^6;j6>57%^/64#t#5|>NyWw/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
