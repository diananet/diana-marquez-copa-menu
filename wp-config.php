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
define( 'DB_NAME', 'diana_menu' );

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
define( 'AUTH_KEY',         'Qt@Y@9@P<SS(u>eg/IHS!FV$iGE`g9Tey-jq[0wl8$?@z,%|gz)YKNt5jDs3lZ~{' );
define( 'SECURE_AUTH_KEY',  'JpmH]/`(zxy15GJ0B,C!!xXyj#|B$qxC{vc*l=4<MJd,3nxOI1EuM79xHk:k~p|:' );
define( 'LOGGED_IN_KEY',    '_%EzFhMlB>nN1d-Hv!BD,F~SFf@Nd;cZU_36J<n<hDfliM~8Oz|{R%&>Q|FR:YnZ' );
define( 'NONCE_KEY',        '&-p5#WBhVRdb$.^F;3uij}gfkNN}:#:f$;<U8>Yrw*$bIMKL|~1N 71^<nKNHJGh' );
define( 'AUTH_SALT',        'abqSb*xHBB%^.w}?G>C9[g6n|XpD/k=qq5/pmx&q} #!U+1J]zn31(EZOXiI3Una' );
define( 'SECURE_AUTH_SALT', 'f>faw&1#u.6Uf@P:M#AnsMqZ8aEzq=8kIe-*:;=>/n7V[|bU0*mKZA|97^^W)4J^' );
define( 'LOGGED_IN_SALT',   'ZrD4FUBr4]0SnnNEe;$1]Msr%s*w2P(B<L*F:3YwX}GXf <+kzogGzx5wIrie7s>' );
define( 'NONCE_SALT',       'V*<&(#fhZNF/aPIJ#>4i}Wk;1S q3a+?k<[A;:eFrBbxBw_C}lZ89PKG/!|y&GOj' );

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
