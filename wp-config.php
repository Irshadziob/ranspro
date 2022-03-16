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
define( 'DB_NAME', 'threads2_ransp' );

/** MySQL database username */
define( 'DB_USER', 'threads2_ransp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'igg}qKr~aQ=B' );

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
define( 'AUTH_KEY',         'teigbo2misbd5q1p3fsnus58gbylbzrhcxlbjzef8edrucae3wvcupsuihqxxjgy' );
define( 'SECURE_AUTH_KEY',  '53mmk5wzxjluctyi61afoz9utt1dtrnzcfrkr6pi4ypvy2fcby7vxfxaepfhigfh' );
define( 'LOGGED_IN_KEY',    'j0bsdkaogo2e8rmwvvs2q4llnsjapkiyan9sn7m6dorarbcteuwyk3ra5ptpa8lu' );
define( 'NONCE_KEY',        'y62amedzt6egyc2kdddtvfocwxczkiuiywwa3yzj5huj5g0c8j7srqnsun4rqxz7' );
define( 'AUTH_SALT',        'qsn6smzhln25g6ln8fsb0ojnvrzlas8t5u2dwso0ggiygjto42oqtrjknahy9lqv' );
define( 'SECURE_AUTH_SALT', 'uph0vmh4wyiowtanfttdot7xktbrzdv7b9rykwfwslde2olxnltbddozr8r0eqg4' );
define( 'LOGGED_IN_SALT',   'nijssou95csihjnmfdlexhuk1hcno7cwkdrfffk6wfwrgvpdneygnzqo8zhpscrw' );
define( 'NONCE_SALT',       '14j3on52yq9kfqojitznmgzzl2o3se96p6scjz9khx5ag8f29vxpzduhdukiewjy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdw_';

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
