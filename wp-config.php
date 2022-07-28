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
define( 'DB_NAME', 'kae');

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Lucas@123' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define('AUTH_KEY',         'A#d^wx.K+X%r{]|(N2f>-y;-,6)kH8ET}!O+bp2|eu3Y&,+ZV[c90L8MA+ W$Z7C');
define('SECURE_AUTH_KEY',  'Pz{z< S`XL_;3f+ 67k_qT!gf8uswhhgF>CG>N#e+PrR7+LOQ-.FV+|@WL$#)4hI');
define('LOGGED_IN_KEY',    '5 OA-9_5SwN@#dp5)Z&-+%+EGQTkTG_o[jo_Y!Dpe2@(EA2$`Q>N{,fxo@+{Ga1|');
define('NONCE_KEY',        '+k+u8!265T3_+_Cb+t9=U+NTT%rDh_S<Uzhm :M[Y$CmmMYS-$1736g}u4TuUVq-');
define('AUTH_SALT',        'v5s3u:u24n!UsL!EuvHf1,5%5d+-4O#EvOTf(O9V|(m{XC?-u+b{yY;MJb<M1t,V');
define('SECURE_AUTH_SALT', 'pl[p}5h9wQgJ)*_tSc#8;Ll4Hk#|xYAl^S5V(gU-r_cU]TI,E}$E&TUF~m)C{0z$');
define('LOGGED_IN_SALT',   'zevAF-)dF{R R[mKY2-o $!)q}?|;;>o3DD+f+%yU:n^moO_L;RZVmS7^(Y0K.!%');
define('NONCE_SALT',       ':(1 Jjsh1es1N,_-;<=;=DiE{)wW0?)N+ADp.2!Ot3pP-Wv#;-];iRMzMTvS-g/#');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '22jun_';

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

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
