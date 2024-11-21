<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u603455847_fcUAG' );

/** Database username */
define( 'DB_USER', 'u603455847_pTwNA' );

/** Database password */
define( 'DB_PASSWORD', 'XMoHnJqoqM' );

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
define( 'AUTH_KEY',          '8&F/JmP8&]V=E&.IsONp`hbr`fPm+Y:7Oe~6ois~j#ZD_z=!N7h.^= [i4we4YJ_' );
define( 'SECURE_AUTH_KEY',   ']8oR6TnNXeNQq7EoYRc*SCnk!Mph8TM=h7E|?uxz?.h{>Xax,7!2%~W79g~@bl4=' );
define( 'LOGGED_IN_KEY',     'ZbLfFDqL<:gl}~^hM}c_H1Fwjfa&cqE8M@Aoo@^0 F[u*.yX-%baK+ReTL)v(d1@' );
define( 'NONCE_KEY',         '(Oba$s!&IZZ]4tJqiI{cmd,RD2v-iWD%HjIrqM8O%7:TkynbIa6AIOC6@t+t3JeD' );
define( 'AUTH_SALT',         '7VaubFmHu#&)./bAycK4eWoiiLO:uwp$-+EbL9QC;Ei0=BL&Cu3-bmT_AvvXz5MR' );
define( 'SECURE_AUTH_SALT',  'B|~7($&0G(qCGc<CnYV/;%{ AP=6(C.kA/:DPpQC}ki[T@M0*x[][vm?dpNhQgh,' );
define( 'LOGGED_IN_SALT',    'c-QsgyLa|`frb)jwm_zg0t}96wo!}Ywc;ev %EH}!FY}`|`%>Xc9yAm;s|4?=5?x' );
define( 'NONCE_SALT',        '>Q2_3GFOMH7y6_+a6q2`wX:Qyvff6$]nCyj9g8wj}]~7rM77iW-?},xt0CTH:E<M' );
define( 'WP_CACHE_KEY_SALT', 'TC[3e{#$=vR8(j@e%uN?RW.^fbB ]Zeyb,_ys5~+!K&cnh[+f.l=)g]rs]JlM2;3' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
