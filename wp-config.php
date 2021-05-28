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
define( 'AUTH_KEY',         '6(p)gE9Chj_@pq{JKYj&RzSNxcpGOz>a;XmHMIMO;nCX+ZhK2Hq#- |ZXn%03o6 ' );
define( 'SECURE_AUTH_KEY',  '`<Me $BWAc6>+50^c`z?Dw)JtlI}]P&{z(cHGYE{a_@3z9;gkzd 1kr; $0b[{P`' );
define( 'LOGGED_IN_KEY',    '<z%|Cl6ch@rqQ2KUZ}yAz+x`9x&TH!Io.FZbY4E[a8rPM|q[H9FzCsH52sS.r^.d' );
define( 'NONCE_KEY',        'h/b*VdjJ>(WL1-?W):GYc$7L(d21Q)th5hnVQ^5r8us`S05cQpL9/|pJ]B@=,GQE' );
define( 'AUTH_SALT',        ';uck>vhLI18dK>]Qa+`ISdMPT&>OFRO^bQO87[jN)Lw4/xn:]=W8?V$pH_sy8UBp' );
define( 'SECURE_AUTH_SALT', 'Pg0CC;JDg22g. 0zvDv]xVP[~POTOo+?v10s>c=wMKJmrLn|T?bx|QvWE QPEFX7' );
define( 'LOGGED_IN_SALT',   'xTO<*D`hJ|H(hwj{q0;R?[[{|oO&)8$rjiRSl08CDLw8.g$p+O^H1B.TVSme>y|a' );
define( 'NONCE_SALT',       '/-w iI}g>/$_K#]e5/P5GRgPafu^VPL0r8)6{Cko+hpYQbm3Ra<=a21[:p]L>3Ee' );

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
