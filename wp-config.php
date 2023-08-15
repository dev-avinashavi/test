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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'u t?%xW+0rB-DC%0&.S*?I:!6umq+,)&9,.bZGSi1v|]xMvR)7[EUGu~6wC/AXh#' );
define( 'SECURE_AUTH_KEY',  'zpKr2WZ &yE;*N@9-R[#MZMift`dJOVxh0o?G!x:wcjDsMI7rF]%<WO3ch9{PQ:7' );
define( 'LOGGED_IN_KEY',    'W<<rGyb{;$}=>KSLVY$kPIMiv2&o/&5{jrjBSE~C_7Sn0{lXC&gq)b<4J~:lr#z?' );
define( 'NONCE_KEY',        'vjKV-$vW1ng*IA_F0gX~qP(JcNas!2r(8K$s$DQ<4h~/^hfYIlGFOq)3N[+w+[%D' );
define( 'AUTH_SALT',        'hs]Vt:s})CMeiX;g(5`}gIB#Z 5iPP0N_rHwNu&kEdn6{CbqeVZjshBhB}xPH@XS' );
define( 'SECURE_AUTH_SALT', '[b96_xf<a3Sz75*Lb+N-DR`9u8X@2gQK[^~e[uhlDJuYecVSkr7DWyi<r_BN<%z<' );
define( 'LOGGED_IN_SALT',   'RGqe%DdX~dhqSXs%.y=]+ae3^od&#.OKM,.g7{b~aJh!,h>os=[V0N4b)=~mNp<#' );
define( 'NONCE_SALT',       '0_%&b8L;6u#}`1o]X_/5+6rO@[s!Dv:9~owrpxXsU=*vZ*DC~|J>IvX2KvX3x`+?' );

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
