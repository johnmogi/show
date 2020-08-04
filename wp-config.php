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
define( 'DB_NAME', 'show' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'TRsh(t[lR*h_0Xk0y1yV%LGV{W=29ny}2XDc^e;W-xMtPnU3D-YC lhO7]#Y<^ 6' );
define( 'SECURE_AUTH_KEY',  '$`lSH1ci}^q>Vf@8=o``li)}vu!5{;wVEh#IlcW<;LF(XuMb3_<QGa)c H-RP$Pf' );
define( 'LOGGED_IN_KEY',    '1~-KUVQDs[>eI3YV82,m6@0I~k#$NM6sVw~GNwIPwp<Uloy$|X{}rDm-`E`/S@2e' );
define( 'NONCE_KEY',        'W70y)vMV)Q`YKBIHn#V5Sn40HJ5q)_[)sS1G]?_2y>iEBi][H6RaPq9|s) x(vGP' );
define( 'AUTH_SALT',        'qjpC0kIeeRd<1eCRG_]d*G-F_aCH/JCW~[{yfff4(XIrB-tOat;4}*qM5z`wxocd' );
define( 'SECURE_AUTH_SALT', '$227#ew5?4wNYd*1uEH)oGgpn-,*m%eLfOuOhNbZ1-3u#5?Bl4[ONzhqpZ(U@<ok' );
define( 'LOGGED_IN_SALT',   '/cj*-&x2A2_n*-:`;zM?<PXBTVq*l;Z<DTQY9:!33:Xa3a9?F[?*(ScRQB(3&u:|' );
define( 'NONCE_SALT',       't,wdg~:x.&;w!Z[;WQ^MS$bV.du]|##lU]RqH;I=9r~~iX7|U/0_a(>~~xa48B~Q' );

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
