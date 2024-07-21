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
define( 'DB_NAME', 'loptop' );

/** Database username */
define( 'DB_USER', 'hop1' );

/** Database password */
define( 'DB_PASSWORD', 'Hop@160672' );

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
define( 'AUTH_KEY',         '%h3mK{DazD?]W/TnpwOP0iT@LUORgz%<uNYCcz$O[Hz-^<}G1? fWJ5(pZa<AsD,' );
define( 'SECURE_AUTH_KEY',  '<x@ZA8:XJVKQw;E>H;$`O!/k N]m@XV;y:(X)A>yAlPM%~i1fLufLE!c:IMYo`CQ' );
define( 'LOGGED_IN_KEY',    'B`287Ytom7[Yhl`t|7l[bp1)o%ycSm8}_Wd=5e[$@/gu}V;Rm1(ULp*GLO3,]+!@' );
define( 'NONCE_KEY',        '<RqNf/H6A#D30b@G3Gts1qX[Cb4cR|RkmqBZUO5w^I9u%_{5cS$^D,g,r~],gn0E' );
define( 'AUTH_SALT',        '=bzNut:A&^Blgz1wl$&Er67gF_H4Lji/o^Ed-6m^W}_@CIX18C5`8 4R=J1d`<(y' );
define( 'SECURE_AUTH_SALT', 'z3PJv<8^z9H#+SXE.0e.ab/!4OD#s3,,{{J!e,Gmi[F%beEi*N1($a;u38(GkA?.' );
define( 'LOGGED_IN_SALT',   '?qzyHc^=-xSg6YdxGh:47CGK*>1HuQgOV&E$aD!m!/IEX|+:6]LIl%%Lup$q.2xf' );
define( 'NONCE_SALT',       '33LCwf%3^1)#I?Az6Q!^x,$rIq&%p<|(/hp}a xl4<4(QGCGX^&/o8@p }lMkdA3' );

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
