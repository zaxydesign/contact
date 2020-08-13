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
define( 'DB_NAME', 'contact_db' );

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
define( 'AUTH_KEY',         'FVqJJnO(}/v/;,F}=J],fD:9k{b?k|@c+~MF?0|/=g_ysS>,tcf%C?)i0[fPgU:g' );
define( 'SECURE_AUTH_KEY',  'uAmFv<C{Nc= >|K|w,!`rP;r3.W @hZ{EA5raKt]IeK?j{4]ret2)-6]6b$a}!m`' );
define( 'LOGGED_IN_KEY',    '~$7]B1q7{520:,7aP2t^Lj>P&(jcb,2YtRpKKR3Rgr{<zmi}i6q9D`Vb[Y-:WQK8' );
define( 'NONCE_KEY',        'LB5g}b`gmeMqITYQrKKFd5a<t5[9)w=De`;a9a>q2KR(VEf is8;7y*.X7ywoZ=C' );
define( 'AUTH_SALT',        '6:3lY9@qsqNITatos!|~uwMvfo4)NYbSi.Ucu0; ,OYbP6tpI8wTX!@H9|,<wnY$' );
define( 'SECURE_AUTH_SALT', '+7ORsFZ`.b,tXI^^/krr29,zPW==<caZ9&HM#oq?gH%#2sjC/r>EIC7Nd}FeX{P_' );
define( 'LOGGED_IN_SALT',   'VUEXEveNQ]]u!Qdi#kv#FxlXEx>:pTn6|Zm`Umt(9FmL{-T`?N.astLdX3yTsZ9{' );
define( 'NONCE_SALT',       'T*{@O4Tzr)r],Q^`(yNIm^52E=)Bg9TqGqz#?3t?;|9yd _3V>MiErr:(?k3@deg' );

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
