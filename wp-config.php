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
define( 'DB_NAME', 'wp_fintech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'RwYwxE|)[(h.Z$-ib@tWBY#a~8Th;r?JpkpCdp:IavTPXNx[T~t(U?NE2Rb,r>Q;' );
define( 'SECURE_AUTH_KEY',  'a66zi$q.+$*vs~`T:c&-oa%( Dq#Qy|7(Sl3 hocHi;kMv(&sieO]=Zo-Ih,8i=5' );
define( 'LOGGED_IN_KEY',    'Pbc}0N.QT-Enq+4O|qxWsWD5i_G078<#h36x<`73gf;5%|NQ^?{{869-x=S7fLER' );
define( 'NONCE_KEY',        '49OB)3QA.uS(f6pF9AHK#y;qMk3tMjC;mWfZmaW:dy~)<$u`p-0,]wo5Vhh~Ka&/' );
define( 'AUTH_SALT',        'gB#=Z]/NV/=%EH6-K(JDzkBW$S)yFqX2 5 /`/Zw1+s9{fb6F42iR817xD[E]/6O' );
define( 'SECURE_AUTH_SALT', 'MTUyuk;1OA{o6+v0z2AHMyT ,9NJnq`;qR&vVH1XLBokmP3atrP}JP*0Z`vu8l6`' );
define( 'LOGGED_IN_SALT',   'L*,;cM hx}qR$ >G|C?*wp%UQL`8YKZSbS9{y[];r]36wC1t$BOc:7&(^#fONRB{' );
define( 'NONCE_SALT',       ' Vy_;;ljP*s,|gUKj[[0K3sD`<q1{YOfM.1`h$[F6fIt]Iv]Lb_Qn1uVi$*<k#Tj' );

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
