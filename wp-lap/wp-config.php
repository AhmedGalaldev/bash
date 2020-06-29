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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'ahmed' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         ')`jhPFss@y_[X=jV:r`gVBWu0@No@P:R/YDpEoOJ>:yc VM0US*;xZfM?V1D&SEL' );
define( 'SECURE_AUTH_KEY',  'nW XV[AdDzI]Vx0PX5XXNo+z--ppJgjGZG05jjkrd_Ws o=!1wSd:)p]B3J=nKek' );
define( 'LOGGED_IN_KEY',    'IPK6:dPW;!N:@-Wkj0Mxy!=hdwDwCs?k5vLX=vZnV?CB,lj2c0Mz6/-j)s5O!b0z' );
define( 'NONCE_KEY',        '.qQJ,pUo4&!0IW;4A[5X=.FCf!=CN,1jPt L{}S!B*:+ wYm}_Ib:B<t,!ylzekP' );
define( 'AUTH_SALT',        '3a1JyU08guXbt?xM)c6+TH=PvITC8CC3l44)c7Ia=e{]Nl8P)0 M[pOvlEVzMjlc' );
define( 'SECURE_AUTH_SALT', ' e;p4lz5_/6HP}En~C6a^YTap{O~GrTBYo-YJ0W[gESG.bkrU^-7LiX80m_kAVZ>' );
define( 'LOGGED_IN_SALT',   'uTk_9}=Jv(SsL: *3~r*0sV>q(QEkvF;9O*+0`ED3Q,*&,U&E=AaP[v/Q- _r3Kn' );
define( 'NONCE_SALT',       '!zj![R[jKITXsYx.#)f*mO^cwoL(}tbH|3tfpS-S6?y|~.E^>V#W0^=KV/f*u|EJ' );

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
