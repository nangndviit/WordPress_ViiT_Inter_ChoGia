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
define( 'DB_NAME', 'wordp_chogia' );

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
define( 'AUTH_KEY',         'j5%qpsQxZww7oY!J,RQ_cm|&6L<(,G6N>vO+R=/bq2=e_t5[b!wdl&~?zn-n,vNe' );
define( 'SECURE_AUTH_KEY',  '?l7#*2d(UQHAKu6]YGVY|gQRx1+<#C),&CV)a>omi{$B+k%i5DI1] yB@K::e<>H' );
define( 'LOGGED_IN_KEY',    '0h}!}K>1cUNW<52W[N|uAJ*hc+Q!xIaut^CNu#zW3dv @w<vPf,#EK$CDJ1{k:Rk' );
define( 'NONCE_KEY',        'FVt3k>&-LJoZp7^()E>-r|Pi9HN64J@sR5o~Z(V|)Ye9!ud-IJiiFt,PphqFui 7' );
define( 'AUTH_SALT',        '[58c=zf@o@cst79G<]V(U4(2zoV[g51H%5{k62Snmq-~%`d13XhD#-1+n7C#.{V2' );
define( 'SECURE_AUTH_SALT', 'I#~CBcoR)$%oqe<zS^nCcf:i9XF.N&5(xDKps#11(O`:aan53{z]dCdd]ex=cCET' );
define( 'LOGGED_IN_SALT',   'Ceo<d}|9irXIs<YL<JA2nH:rPc]#{,v+IocGH|NuN.P:~fUlKA3W$tsFu::/]2ej' );
define( 'NONCE_SALT',       '[-o ztVw;c7.i9[m20-@,T_X9wjXZF>v,@z$3Pg&)]Z5O$2qRjGtG,W)Q5Cf:%cb' );

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
