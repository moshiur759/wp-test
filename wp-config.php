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
define( 'DB_NAME', 'tripzo_travels' );

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
define( 'AUTH_KEY',         '_oV=DnxM5y/&.pHb%H3u-*4^+-D7|7As$II98fn,H Q=JN]p/tGDKXX7+N?SegU3' );
define( 'SECURE_AUTH_KEY',  ':$rz~rr6P9vk{+o/ck%+,&4lk]CX5ckZIg_rfjFB<05Z! +hQ<{Qo#knrNnuR%#/' );
define( 'LOGGED_IN_KEY',    'VS42oD& .K;`+Bv-Fv0 1ya_.9Z;t:*2ot;bdVWJ@TXk54jn]a[*NYf76hx(Cdz[' );
define( 'NONCE_KEY',        '])k(&}Wi(/e<j,a)RJ(SqlnyraygYbz;^>&32;^dVa=zvJUt2ol}pVp( 7cnZ(LL' );
define( 'AUTH_SALT',        '_:3;FI9u(%K.o{@p?&UID?PN<uKHLp%PM,6s%_ccfD,BC8%cT3f7__h<GG>&8:[=' );
define( 'SECURE_AUTH_SALT', 'bUE)Z858,|Ui(/!!S@^syfiEF>@19>tjBWVG)}&?#p*ZmT<{I_#n4}BbXK.Xc a0' );
define( 'LOGGED_IN_SALT',   'fIc %Gje~6@RvQ0!{Tn+<fcanh1if54EiR!tK*Qx([J34m(A 9Hx`E;OnNucw5:p' );
define( 'NONCE_SALT',       '-+WxxRN}_F5`#O($~@R#?jvucndPFqbiM50kocl`M#Lnnig1MU4`rirRyB~y?80=' );

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
