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
define( 'DB_NAME', 'FindHouse' );

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
define( 'AUTH_KEY',         'I}g9K9z}&+Tu)>*]djfl1R~o26l~t1[M-AJnGx2*ua~.T(aY{w<IL3~VXH^R, q8' );
define( 'SECURE_AUTH_KEY',  '@]:Y=$`rkc% FOt2[<qD.*E?twChW5Nt&f3#F?$14:|v_:5!5,F|l|#w}B^uzOHq' );
define( 'LOGGED_IN_KEY',    '-B+j-qq,ivn[Tq%On5q:oY+n-[~&hJEC0>S6y-_,Ug`!8]h1ynO *R0k],^q#pQl' );
define( 'NONCE_KEY',        'ubdy$!bs~6]fHln1MgW9mc9^Y.71SXHxA)&<Y:X4$:u]$: r!P~*bqsthbas-^^R' );
define( 'AUTH_SALT',        ':=:[CwI<w<Ho0W>CvZj0PGO!G!Cz1lMu5qEZ9K=d*NDA/(/EPSkaQ?@8E&pdwMUZ' );
define( 'SECURE_AUTH_SALT', '|2`?!G$XVwDQ[S|n7@PDl%v[ULox/rO|mdfX%gZe}@sTvm*rHa[uZN0o5XR{}o)b' );
define( 'LOGGED_IN_SALT',   '}&ClVx~%~R8;n60<fV,.vie)01_p{.Ma=P|]RxkZKM1X$jgM^c^XeUIg}>&7WV.T' );
define( 'NONCE_SALT',       'dha5*U2^ BNw(t?]d8`62<8: Yx$#EX}AAScz1?FyO0}$Dnf#9j/WQ-aD%4hxwJ?' );

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
