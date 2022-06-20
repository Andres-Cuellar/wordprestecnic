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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:10064' );

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
define( 'AUTH_KEY',         'qk#C~ 2-=~d_6x)6PP9wQn,%ks.0JM![^KOQqt~qZ2koP<=f,)wkL~be+Wzq[6XN' );
define( 'SECURE_AUTH_KEY',  '_3kEGQ)f>sy%z]+,CoHtn%@@GUW=ZxJT!QEuzJN{uL=SXel%h)]Rhy+HeXiM=k.:' );
define( 'LOGGED_IN_KEY',    'V%y%BfM/M]j,>v~|pMk7k.H{+W{~tmTcdxpsQ[*Gl~~)/_fMO E#a@^&$XH4k8;d' );
define( 'NONCE_KEY',        '(e5)[b](,sEOoq0LG+ )cI(%|C03KARZcQ5^dFHfb8Ju1~(F-f-X4CUY6r;pH3/Y' );
define( 'AUTH_SALT',        'R-4htP8ta)*JV>aWBM$*qvDrB+sZ)jOja-|9Ii`eCbqoc@{Uk1tB|AP{5r%,|g}:' );
define( 'SECURE_AUTH_SALT', 'eE*!MFvXVvAgTyU56MA=j|sP(_vD*f(0MhOe[EGWIkD)<Gg<9?D3v@PI&~~MHE6<' );
define( 'LOGGED_IN_SALT',   '[&~;ByrG+1X={AlQJzETkE5EKr3DE{+T`,(`-!H^,#~a Jkb0:QQE{-VWh{t7-,c' );
define( 'NONCE_SALT',       '*KIlvZl=7|!Rnp/LQyX^+{a8-<g}&_j5(4?:nMpW n6LD(OfI+ jIL6)cwJ;+)Z9' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
