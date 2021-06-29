<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'youssef' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p(l!YY,C8B-P77m*guo8b(7cs&?>gd$/,)l]9_doe)`m~8~Cl]Kog^#[.>hQbk0n' );
define( 'SECURE_AUTH_KEY',  '6OIMjK0uEdFHsJt/skFxb,=}[9f4?&ni+]-*|Ag-600A@GrOJ8)%k9, S{8Mcm^6' );
define( 'LOGGED_IN_KEY',    '!HQTn?;$MZ#h>b-<%m@;$+u2/-#zaD#[l+!A%[pWvAKI~OvaQOrmw$C/gXQNYhA}' );
define( 'NONCE_KEY',        'Uvu4Jjcbk]xg3_i?A,L|Hgx68P,/4$_*HS#zNk)z-#}M1s;emo9#I|=rISr&F%>#' );
define( 'AUTH_SALT',        '}Qqt]x4q,^^zv4rTY//6[X{Tzo.gvh0{9&;&9.a99vZUnbZgg3W&/3*jv8,tu>{Z' );
define( 'SECURE_AUTH_SALT', 'B/u?rgYOoOJK@Z5JmmcwUc oLYJI= JEYWL{,b4GrcosnZ ECcd*Ld@Mw`X,FUei' );
define( 'LOGGED_IN_SALT',   '<6wmjaq~jLF`C>g6!.D*6+E`,pc!T+,g aQhxK!Jt//8G#iJI>9!VkdyTp,zFx%y' );
define( 'NONCE_SALT',       'qibo&$gn;!{EZ]K3]A$yoq8wAHgIWCYLqB)UQNL`4H[p7ld0>4<#2lwrx@y%~68U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
