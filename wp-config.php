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
define( 'DB_NAME', 'rough kapi' );

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
define( 'AUTH_KEY',         'Q$2Hr)#Y_nU-?5#&Z<qp)#:ihG.,{)-u#JWIWtOkG($R:AG~HjbMy9uT .wPHHL$' );
define( 'SECURE_AUTH_KEY',  'cJz6Xf>>h6])s*fe}eImxgfWh,T=W%z6?)_*<^P*H/2^w2+#x6^V89T{}qV7 -((' );
define( 'LOGGED_IN_KEY',    'BzG73:t.Dk9wpWeYNa(9.,_$xMT.,&3ZC/=ILP+E-!Z7VHwaCk0;<2:*N]GfM;mc' );
define( 'NONCE_KEY',        's=2!DaFJM.(%6U9>!Tc-s,bnnO4Hc>}a3P@ZA9}TA=.7;{$jf< f)39P]|o{j7zl' );
define( 'AUTH_SALT',        'K5@U/qE1Y?HZK?)HwL9Y`bA7^uS=orF2K.GK+e$pClxSvClZiVwcl1`!yP<BV^jj' );
define( 'SECURE_AUTH_SALT', '4~ZF;KWV_FVPIuM(~8&OH@vcEA<%Bz)*kld!b?y.U!=nrT,NKzcuvJE+y.vNP&JY' );
define( 'LOGGED_IN_SALT',   '-t1EepRjYEv&U^MVYx`iiYCswV@=YQJw%UW)=hF2m$6P06tmrHJt0}@US]+dP_b&' );
define( 'NONCE_SALT',       'o/csrabh#:|5,&ZtWta#kR(7_lvTvkXJ]#[aB!7b-;O]Ug3RW4~4qv`9I*^m40%|' );

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
