<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'phn' );

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
define( 'AUTH_KEY',         'ZB)tBs0VI)IUT&XQ#X?hKn/{+z*C*9cKEf;hl0soBf:KX#O;6`dOPn^!$o~2lGTY' );
define( 'SECURE_AUTH_KEY',  'l*>OZFA(,tA-f#{x-voP1)F>[,Q)IpwH~]j|%kERgKY^H+6YR%u@7E-d&-Le?Yl4' );
define( 'LOGGED_IN_KEY',    'c$(CA<<9U-)wJt$Ts-jt{dgl/7ZR2u%AvDZ}:4`Wj[lFI{XXdC=&P7G,eyogg6>x' );
define( 'NONCE_KEY',        'e4JEq-N6H?5%5}&@X>;8P^X5(2zE0Wt]W!UW=N!4|**qpvt,|t!PONo-Y;$WvuTQ' );
define( 'AUTH_SALT',        'd.Gp$)@e O]MV*~ltW$x/>|2}oxTGdg`U-_%sLTOUOb#JGc9+huu&jL)nn-)E=7f' );
define( 'SECURE_AUTH_SALT', '/{7z}1k;r|jHSi8DLx}pgUM`S`-XR!MGA{tK+dCT-Z$Q6K0Me:e`6S!F0P|E D2^' );
define( 'LOGGED_IN_SALT',   ' `:M,Q90oisMyJU237{-&<xD-`or?+1l2$Bg,|pwN)7kvjQ,.P|, `5R0AyGWo(p' );
define( 'NONCE_SALT',       'W]h2(S/MB|`tr2l2DHmGs*ws!S;G_B+2|D9gUHi!sA1.m(Uqvig-)|*P_xi]!j<(' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
