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
define( 'AUTH_KEY',          'O!(*LD=;Pl>8@G?t7ltw&zqsfPeqmteo.t1R)+WA+:qzs#S^OC>xzK9N,%G<.ESn' );
define( 'SECURE_AUTH_KEY',   'g-8g:8`^~+f]$8Q[4nn46<k7?N,b2*>^jbr^PLogrMAbR<C>BpVbMB5wqQ`<KdA#' );
define( 'LOGGED_IN_KEY',     '0e%Fps4B=*Nw*S?~d_6XI4nR!21GxM/:i/1gr[LtbH;AJ,-&Lm{+:jMg#si+qLfz' );
define( 'NONCE_KEY',         'gyC9YfknsdIftT4;j1IuO2$0L`{*ZG_nwph-?+gYxFd4|:Pt~JJzpm:0,j2A&/+&' );
define( 'AUTH_SALT',         'Q.bGe>Z7nS;9gon1]YODRWrt%tqHQ %;b-59}.FDkZ2A80nat=jgzfKR~B0CdcD&' );
define( 'SECURE_AUTH_SALT',  'g,GL<bI$-*WXeN_+-Y%FQ,DuLMfzdLcN]n~L-SsYp86uk:dn?0a/MIXN)%xz1?nL' );
define( 'LOGGED_IN_SALT',    'JH35f,J/Y>=!+]3)&7;Tujb#;_YkJcZMFGs55-W{Z=pyT#IIC3{!hjZz+JARi[<Z' );
define( 'NONCE_SALT',        'rrA}K>Zw5I^/B[)C^.?Yn ~9>1<ncgNdU>[Kc/bvf(2-gI_)O3D/QF++.:4UT_#b' );
define( 'WP_CACHE_KEY_SALT', 'H//#?%?7th!ODmj;Z}A]e)_=EMBVg.+*J}OPw0L&4{%|aPg8?yqK2nYD%NQ_;xR&' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
