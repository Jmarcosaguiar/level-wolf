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
define( 'AUTH_KEY',          'p]*M5BDFy}HH2z|yj J&y3c)O@M$}YnxE?[E:AL7AG}Z=I,_<3!WUE7^5*k %AVn' );
define( 'SECURE_AUTH_KEY',   ' aY+jW,5gu*/R~zW0F}P1N}MF]esfB$|RI04h0YX1{Av>>-z2gZPC?8>0+,JAS$i' );
define( 'LOGGED_IN_KEY',     'u8=)p #9s>yd(d>P)9.Yt[<D[+oZ8HiGUafV+^LM?WG6AS2YVh>Ge|3Ss2,Q1<+@' );
define( 'NONCE_KEY',         'X4dfHgQo}ZDA`,93ffUFX/Z=/Iet`n#S:/(%)Z0*:$8NS5TL&x (=1NzvwOjous ' );
define( 'AUTH_SALT',         '>fp+s`JJ~Oz/DgBO[B9&>RB,V`gh(`~n?-w3+||/)p=$_=E19:JTVQd!>b$12ju<' );
define( 'SECURE_AUTH_SALT',  ' kK}38vtQrJ_1Y8^ aED3AA&=W38_Mk~-|c_0- H4p3i#8f>8JWgrtA -42PwKs<' );
define( 'LOGGED_IN_SALT',    'floA{td:wKp^v1C9Q`{<5o2dD ~=tXP&-Sjo.}pU*eBm+(Yqq^N;d=x,4<?*a#|&' );
define( 'NONCE_SALT',        ':#Nwr8&dKv: 7kv)M2AZj@0NG7{j?%)6[12k^dTJq~SzBktX@uI^Bm(xs!,SG|:-' );
define( 'WP_CACHE_KEY_SALT', 'y]GEG(5S;@LKshS8)0UWf(2nLsiQ| !l0v9Jb+4uz<<[#t@pG/8=ev2v#Sm>i]~t' );


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
