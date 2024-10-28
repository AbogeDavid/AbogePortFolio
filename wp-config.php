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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'C%1s_i{}6q?ke]{&XUZ-rSPDd/}$!Z=2^Z<n&I]sGlL_A*-}qe$*H9~,{xzQd,P3' );
define( 'SECURE_AUTH_KEY',   '7/#*>h|$!H,m}|SS9seN=AM~7PXPhlN6a>J%*1UDvU6j+fT<(#b@Hm>{*GcqOi?)' );
define( 'LOGGED_IN_KEY',     'b4X2=.|HN#IH96fG*N6G=9|0+c*p.:?{Q4B&:toY%x80&fy]gBDTotNAP?{:zR4(' );
define( 'NONCE_KEY',         'zXK=RD8&gortSk@?pwz4t<12(4n&[N$?U)VW0w5fTO7QI-xXL=*LZvk0899f$Ev,' );
define( 'AUTH_SALT',         'iES>V!&CGN{J008Q*?!?6I4~VMDvR}85[_j JubOHF88./kM[-SLXw3{A Mc&^oo' );
define( 'SECURE_AUTH_SALT',  'H/7m.>>zwq.+kM M~/8K]H!PN`w_4<C8fP*O}*v|KS nkDByDq>WzDEYtq~^|s5.' );
define( 'LOGGED_IN_SALT',    'n;(t3%b<<C<4N4(N{lw!h@r?YM!BZ(=PTqT#Kv# ,5ioni;bCE?n;0X6 xp3&X$a' );
define( 'NONCE_SALT',        '3(d`I9lQTJlN[U,kS1&wOq X4`npx_`SR9:_pSK4;^2h< !91vcm2ABJnvs,5$EV' );
define( 'WP_CACHE_KEY_SALT', 'zKSlu.bC&]U?Y2c*6K$hu- 8[]WbQ7?DmG[W+b+EOhBiUBB7tPB&_/Sm3D^Ek[vX' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
