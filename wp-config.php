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
define( 'DB_NAME', 'toystore_ecommerce' );

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
define( 'AUTH_KEY',         '5jd2oHQo702Jn_7sai{CHm5&0o)k8m`UOu_]jZGSL&}Mc,QyTZVmvU*@[qf6*~:#' );
define( 'SECURE_AUTH_KEY',  'J|a6Yrr;K+H`Fx N^%;hjnm,4*uOPfo#|xz07k_PGnmTQwU~wL/&Ox?UZBD2767T' );
define( 'LOGGED_IN_KEY',    'C7x|TJFfMxLml6213C8*LFr~5e*Cnm1>G7~uv:IR(1gwdYdqzt$W6.~+pRS*bZ}4' );
define( 'NONCE_KEY',        '~Gs~v mPWqanjJ+VKNTk:zanhs+AF!z?A9#iaJcjnR{QCX~`KIs9?,rc:re[LYs7' );
define( 'AUTH_SALT',        'reX6[pr~wgEQZ=UNpST)`c3!ID+Rj2o!U<sXBGmvg3mJNZvg{Zq5_RXc0i&SkJlP' );
define( 'SECURE_AUTH_SALT', '>v?BQ@K.hdM=:#}XDFk!h{nhQw2IEt$yx+cWghc*G>}N@<o-U=)vK)i~ |& Au;q' );
define( 'LOGGED_IN_SALT',   'DYIgrNG#hVazi)=%eZ=r.uuBC6]()t$cJ1_bj6@O`[O3fz@YZcAZ|,EJA:#=Qp#t' );
define( 'NONCE_SALT',       'O|^NNrqrPE# E{2EktY+xN24D1 qfXgdy[R8,<+w7tom:O6m,FNg`?49(1.zf{q.' );

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
