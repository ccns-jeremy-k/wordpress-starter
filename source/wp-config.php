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
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'db:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ',^+T|)|vD%Qj``g#-BOw`-ARHa03v2Ri~nVDP53G~7i8MT7BAeHylT:JR}$C5v[f' );
define( 'SECURE_AUTH_KEY',   'P!JW#5? 9~fx@SvP%hyF0[$%h>G28U!d-a5S^`^ddG;gS>P}Xt@Wji9n;tr3dw+<' );
define( 'LOGGED_IN_KEY',     'f}553yK)_U:6HEqySTa*E=xKl.0iS8-wpje(FoxguD/YJ3dcd.tUw=}u;[wVk,p3' );
define( 'NONCE_KEY',         'L%mmX*1lygecXG}:kC}oM$=@*U{hK1RV*KPtyWi+6_9q=UCn&XTg!Uw&lQf#1CMv' );
define( 'AUTH_SALT',         'Y|E,qm>fDU{fi4U4B#s; v,DUk4}iZNZ7u,g3zb5YHd5OGt!&LSwOcNBNzSwrX`.' );
define( 'SECURE_AUTH_SALT',  '[), v3oL(wM9a-Q-I2F32aIoK<wV;)PeZ-e`i8+Zo4G`l#0Uo/AW-/o;0n}.i@J4' );
define( 'LOGGED_IN_SALT',    '(yi;&%?ragPi>Y^lRlVoEFPQn=RD:N^P_,U,kjuXU<f.$:{eD8}POQPsE=;4n8N;' );
define( 'NONCE_SALT',        'rfE_^hv]Gc.bPOwcSUI=L`vOrOH#f)=YtQ=K-{8uB#<5ZaH|bG3+wFP!3t*{GC12' );
define( 'WP_CACHE_KEY_SALT', 'W^<<0N]s-=Le`##>KK,sYfA(G%LyG?5}T0|7^eSn]~GBTlLvtz`P(cBJnQ_2^JD0' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
