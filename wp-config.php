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
define( 'DB_NAME', 'poorbuk-wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'jarimos' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sarah' );

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
define( 'AUTH_KEY',         'TkmY0UAf}X^<)iF<[afP.&A/&H!74.KfH=iLn:sooFiBzVNkh(tiZ9`ddBt}tfk_' );
define( 'SECURE_AUTH_KEY',  ':HWc|5M[cxw8P6dsV~q/=!;bH[%V7P:/_jvV Ufyomc^H0z&)vx~glTwN=Z3jIf*' );
define( 'LOGGED_IN_KEY',    '$,;d!. $xu~9B5?8X}oSs`L&&nM#j,M!P*N:RY.>`Fdz!V437yA|9R-0PJ3lamNf' );
define( 'NONCE_KEY',        '2nEL<O}O%@v),}MERRs|#0/>}MyfkJ& qqKx*1bH TkP513TH^iV(IX}FL|qIXzE' );
define( 'AUTH_SALT',        '1][{Q9{O7#<Jw]s=QJI2omG96l.5D>>HRuN54ds/I8{^++HfZ(%I_/h]2ThH/ujL' );
define( 'SECURE_AUTH_SALT', '3 =<n9XkQRAUM?,K#2|ts9^kA6uPPv-ipmv|2qZNq.5|>cABH,VG/nsk`-xWlaD8' );
define( 'LOGGED_IN_SALT',   'yg!5e6_;4ofG783Sj5Uf]UOfNlx1i@+Gz-oqRVQY26<~ct$-BB#VQYHUNflV3aYY' );
define( 'NONCE_SALT',       'MF:Hrm*Mfg5iW6fU.g7O~BYd^m}ygA#H6-7n7TFay8@rGj?:[?m;Q,[ci4lWbtx{' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
