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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X%uj*f33~4OQ,NO[~nK0%;g5wPA:_J@%X=kH2~g+5T{t7GqVP m85FIU^bU8>^0D');
define('SECURE_AUTH_KEY',  ':W#Z0:6Ee} 4}7Wbp{.My^vq=ec>#D:+sTdM:Plvd[+c?~3.d;:1tF8kjwJ(37:H');
define('LOGGED_IN_KEY',    'GAq&=-2`G)0d!,TgAh1$!2u2:1kh~u;3LVP3&.]Yp[c>Z0UX]&K;/ZiQYCRC2[4j');
define('NONCE_KEY',        'u]>2{7hv9dZ~p.VX<fK&5E3;J5Iyfn]3GY{i37 8<I8Ev]SaqnUTP@21Iv&q<hT.');
define('AUTH_SALT',        '.I]<%uilX.lmnjZ89?MTm$$er#EJU]5AoQrG~vJQ,/!C#+sQik%Pu Z$r4!K?!PL');
define('SECURE_AUTH_SALT', '-gqfO9}e4(~*!c.IjdTpI}0rnj`+@x22zvZ?F Mq%)vGdr~1PXXEXokWrHUmibVM');
define('LOGGED_IN_SALT',   'y_mK!>i&![F>eV!JC8b>9e!E]{js(`BX>*`(MJ^SQ=S,7FpXlaqlF%!VA5A%-W)j');
define('NONCE_SALT',       'Y0pig[tGcZX# rz>a!i#<Fft,UwTM;3X>E;Y,i%Da4#ErXj%CIRz>kn:R8k|ZQrQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
