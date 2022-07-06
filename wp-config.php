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
define( 'DB_NAME', 'test_wordpress' );

/** Database username */
define( 'DB_USER', 'phpmyadmin' );

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
define( 'AUTH_KEY',         ',:141R>gI,?:JJ/pcDJ8e b`n, ivjG{JRjKi|uY`mcGz1|f#|Kh VbLBlggnqbW' );
define( 'SECURE_AUTH_KEY',  'ki=]8H.<4 1(AN$f3V5eXjN*zT%Z,:aH~Z[sV%w<NUm7| bP^APq}T>L)u1B6uc8' );
define( 'LOGGED_IN_KEY',    '>0_KHP|WI|aCNwEnMkMr<&n_.UaCb(p3I^ussYkx+syR2cN#GY,V@qK2378@T<2/' );
define( 'NONCE_KEY',        'yo0zU`5D6}UWrC}y8BE XC+10Us*/,Vv|R->>TZ;X{s6|)1s{Xa^OWr*e7@C[4ii' );
define( 'AUTH_SALT',        'g=v[=+{0H3nodj *23W95S:*g6n0}O !-gSB;Eh~}b9$>0|vS}R?wfYptDw)?7m>' );
define( 'SECURE_AUTH_SALT', '^Q%Ov-:)+FktiEAS[O3!Rn_!os(!mP-6kA/SqM[sfxJJK9; %}6&^;qoZ..qtAmP' );
define( 'LOGGED_IN_SALT',   '4t+tcJy%I[o8UQ=a)#Nivg!^AH:c.<g #vR(sf<XcuDQ8ph}cw~pK&T@z$Hb2@%n' );
define( 'NONCE_SALT',       'pp7bx]g*i;?L}}1DI(T:EART,sfBJxYl>K:p%w]8Iq[IcNiPh`U][xg6m@@[G<:_' );

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
