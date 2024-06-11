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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'recettes' );

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
define( 'AUTH_KEY',         'As5l0^^@qoGUyhS(J#[?|#f[gIU26+zD?ARn[ GTxMsNvsv@:&CNvE$HD@tHe*Ol' );
define( 'SECURE_AUTH_KEY',  'J:13:d4cOYrDo%5tT)FT,(@%{:d*$h^e]n)_Za;X]#+%,BWHU|U^QfeRzT Rp[gN' );
define( 'LOGGED_IN_KEY',    'vvmD%gp8+ZKp3v?>v@c8O*/Jb6@`%~u~yLd2}Wio~aj!PN%h{6N-%n~fz#;#!{h%' );
define( 'NONCE_KEY',        '}|Ln^dxv%2jmHlA1|B,~hf,rf0O1`4uc$T}y<X -m&DM;F8}*u LnNDgMneq9|je' );
define( 'AUTH_SALT',        '(]MrP3f3ZgYO=;h23t0;%A^4_]n}UtQ4u^<dmc7)TU#?*~ILyuHqA(VW?!i08Rdx' );
define( 'SECURE_AUTH_SALT', 'O@`@g4MGp$%@aWTh>QU5Z+!c/~B3jefl;e~qI^6VBqoDS8qMD#~%fARb]HpFx;5:' );
define( 'LOGGED_IN_SALT',   '+NLOk7T&SUs&XV`op>qiX~aVqUxn4u V886 xrVY=99:{4lpp=nEzM@cr^cnbiF8' );
define( 'NONCE_SALT',       '[7bpcXIK;3~2*N[&%32^s(.St[SO4dk2KC$y_D99rB@j YZAp:O-fu&/wOw@DCmn' );

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
