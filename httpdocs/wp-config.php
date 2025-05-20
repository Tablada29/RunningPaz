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
define( 'DB_NAME', 'wp_8i2dm' );

/** Database username */
define( 'DB_USER', 'wp_kzyly' );

/** Database password */
define( 'DB_PASSWORD', '*Z%mBEvtmyR069@I' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'F+CJO;Qy5~SU46##NN1L9lk+3I2RL4Dtd+vW;(s#94KfOV!8|+)cxb7L;Mf:UBO6');
define('SECURE_AUTH_KEY', '[9O55q2&OJu+8Y@|3/*zqb8FAR5~!%+e18JQE8c!tO86W]u!5iW05~|xm;C2[E)x');
define('LOGGED_IN_KEY', '6wu93321PGp3;w%n2yC6;#GX9b[z:C:1CN*0tr9gB97K3ZId&G4W52F[4:6IjW_5');
define('NONCE_KEY', '~*921kI~G03E%TTo]-)W+X@lKt5gR8po24qJ/9!W4nn+@8wG]99_k26vXIp3([Vm');
define('AUTH_SALT', '#XUCG!M00d]8zjgBIN@(Y*R!19122rKz(0%394rE:JZC2)6[%K75V-|x@i6O4z89');
define('SECURE_AUTH_SALT', 'dpt0/]L:0Tz7H@nG7T_m;BM4&45n|Q3bu6HC3K5a6l20))/zS7W49z9B!)km|dw6');
define('LOGGED_IN_SALT', '7HtjXFr6*(/U5ez1Jd)7:&2V9jdnx:3q29):--!)Kl&OdmBpl()1Q:vC/R6[EW95');
define('NONCE_SALT', '![7#j+r0q71swz(s50r_wPi71WMCIP*[UV*75)BCf#Er2+-Tpx6I%uF3BWh/)tC3');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'TYSiF_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
