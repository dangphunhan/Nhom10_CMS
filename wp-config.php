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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|QG.#yU,jFtZJq)d]-wAm9Hx08}0I~r1jr01rk5= j5FCv;=:1LLne|{],.)G}8]' );
define( 'SECURE_AUTH_KEY',  'dINTwqQ!72y,iWSq&Yy!*,O..@|%DV]1<`3|htZzafI>>~G/1XSAJ~@_]|_(_[pk' );
define( 'LOGGED_IN_KEY',    'BHHR+1k{?ne{#1IB)N}[x4t> ,w#e?DeL+5y:0K&?%kFS{+}fYAy$n2s5byywga+' );
define( 'NONCE_KEY',        '45?-xTB[:nSr9b[L+AU5J$MReIvIlu0|lL-izm=~0RhfFs|4s|+[HtCd8r}5Ds%S' );
define( 'AUTH_SALT',        'pG;L}Lyj}_SGlr;KY|8jCWleccN=Bb^rhUM$$3P[`*OrC>|uxNHD1&s!i<XGQp/4' );
define( 'SECURE_AUTH_SALT', 'R$o}Q&$cBF.UuoON~v&huJh0{ob#3Jtb29P<^0U?;w7Y7)([[|D:Qgvnz`c@l-P#' );
define( 'LOGGED_IN_SALT',   'jlhJ1e2h-QI]>5|u0S(: `<pz_3cMLIX3(Q<XfvO0d`r:-.PFH0^8<J?`)Y<h(Li' );
define( 'NONCE_SALT',       'qR0m4upSwxx#^9)x+=ZDm4m6N&KWHTh%[V?#/{81BR#sd2-lfh.]Fe0BsBO7!j9w' );

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
define('WP_MEMORY_LIMIT', '128M');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';