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
define( 'DB_NAME', 'original-theme' );

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
define( 'AUTH_KEY',         'oZoQ41YMMiWWVZZN>xZKLOOL1=wqa-qzJW&/TqIxC}(-@_I>qY$wj6&zTp]?e4m[' );
define( 'SECURE_AUTH_KEY',  'XjABimXFF7`*9OHZ*CwOtmX1nUi]T?.%AB9<m+VtHJh9zLiZ98E.Aut1Ihta:@{|' );
define( 'LOGGED_IN_KEY',    'NOd*/Y`f!]{yLDYDz5v@C`n(OvgOe9F#8uT)AV/si)kRUqOK3Wob^^$P@VtZ dCX' );
define( 'NONCE_KEY',        '^yf6Y0eW%QWr_=bgzwE5>t;*+~2!yIiI4*o?1|o}SD.GNS*b|y$WoO3)a2j@Mp!#' );
define( 'AUTH_SALT',        '<,/b0]8!8>9Oa,HhIrk7POhJJ.k)_,*pDAV*~LqNY1:pDfrx2fAlDp4v=lrqod)z' );
define( 'SECURE_AUTH_SALT', 'PSX%/&CM,-?dJ-CLEa8,l16NIfnY.na9QnfSS:[A44(Glm>tnoe3m1-%sb.!b-Z;' );
define( 'LOGGED_IN_SALT',   'pcm3TS*.sL2:F9[yI 8N{NAUIDl@=O[w}plLnCRSyU46N7v8k-uhNi&?X],cO3QV' );
define( 'NONCE_SALT',       '(fO?u;-;^yxA_,`4A$S4f-*Y``W,DyzEYV8clv9pqW2n[Nfe3&@{C+/jWW$hiO9*' );

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
