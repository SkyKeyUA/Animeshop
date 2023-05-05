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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'otrendco_skykey477' );

/** Database username */
define( 'DB_USER', 'otrendco_skykey477' );

/** Database password */
define( 'DB_PASSWORD', 'Qazxcdews477' );

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
define( 'AUTH_KEY',         '*QQp^=0?SmrX>=-HTPqiEO/iODGwZsc>LQhTl3Z8WfyG>Sq8~m-iXaY>Wm}f0#z&' );
define( 'SECURE_AUTH_KEY',  '!XB@&^XB#ZQpP`Kd ]g]}htO*P.z![NRG(f!1waXcJbyB&$O?w;_dfl62A<qBt@a' );
define( 'LOGGED_IN_KEY',    'xxF^9WNl1]zhrYTDyWEEYJh:aEF}~;i;EJ;yHdCamM*_cBx=>f#vNk+nc;~in&cv' );
define( 'NONCE_KEY',        'FyxUd}}8DQUR<)KP9ZhfhWy>`U.JWR+bm.pRRECd?zT1l=Ym[i|3KL-!$o2x]G.Q' );
define( 'AUTH_SALT',        '(j#jV?3S*Bk|Zvm8r1%2Hj,mAN+#Cpgu.Zzs}Nmk]@gNk80`-B} Oh0vyV1GeR9e' );
define( 'SECURE_AUTH_SALT', 'Tt$i_i:9}wQ5z^u(ke])_2J<<D}fA3iVc1{L d6F]SMID kUXb8UWTHo:+f$X7p0' );
define( 'LOGGED_IN_SALT',   '2}8.VzP3vgSp9R: 9;QqVi}C@NAn4TJAtHNFA0~z&KyQWRw0Qo3^!iI2Z/,tjlVy' );
define( 'NONCE_SALT',       'pyQ*e+<sxh@K#><z-/5A+49c{r(,`>?v%rV[#f(Cz`P#$+p->~vHy{^@%%ScG0[o' );

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
