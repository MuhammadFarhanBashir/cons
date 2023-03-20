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
define( 'DB_NAME', 'cons' );

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
define( 'AUTH_KEY',         'N64FCU5N7!mn4]z[J;z/p;kQIdBqCt+=FLTH]n^d`Q:(}z1XdR7R*CeEc}sCInb{' );
define( 'SECURE_AUTH_KEY',  '?#Iei}{1hCO~}5;Xk{Hd7}k$!Lgg/R FG/=^L~1moQj8}`3Du;*uKe-. V$~f7Ku' );
define( 'LOGGED_IN_KEY',    'u0yn%|j<Q1DxBLB&6gpb)JLAP(8(*w1XQ+S #MihriaavH1@&$dd_|w{jy@p(f~C' );
define( 'NONCE_KEY',        '?/]LKsQK8F.zCSmu`{#TSYF[!h%wP9QiKt[lEZ?_=w<Nk[[v_-!,Y%%f@`p]%@=h' );
define( 'AUTH_SALT',        'aSz2.5*pziugm>_2nx]qlDy^n[zOlc`=?|(I<Ef/?8f37SMG=CaW1<5W~eA!;rvB' );
define( 'SECURE_AUTH_SALT', 'ih1|N@}D;tgZ)SC$wn8IbI0yH%x1wv2|I-3Ls96GqI1q{CjY|0;YZ@_nd}1%WS#L' );
define( 'LOGGED_IN_SALT',   'Y?Go SNcV8xH{/c74LxOSCsl/~%afw3E<A%Z=DW 1[tn{)|jw_HA)u&#GbI46Y27' );
define( 'NONCE_SALT',       'm_]-(-R#<z%5.i89b9oovf?V382QZuPoXa9]bHyosh~j)>3r<No|BP[hY*?y?5iY' );

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
