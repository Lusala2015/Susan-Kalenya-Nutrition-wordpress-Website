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
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NtaoqMuAZfhpxStYnIZum+MPdCrQu5m0sUPLrvjZ/5/SzxPWksD8exluVY0bF5tRxXxsillbK4Ngt3UwCg3uiQ==');
define('SECURE_AUTH_KEY',  '/XaPKtlPzCRZb7RIF6eOzECfVKXTHW3bqzq3zuZuYtXZT+Gg7IxFwjX9eSirCTB/aiuzW32JaEqnLiXSvHcbXQ==');
define('LOGGED_IN_KEY',    'k3nw7kED/0KdtpLaGwUGR0lo/L5FUxqWH1X/wn8lvov8UngN+P3hFBBABqGfJzkB+h7xqbD32/DuR/ITRm6GBg==');
define('NONCE_KEY',        '5vfRcLDaJRJnwOxIQOmEnEtJNJqQJAQ6ZdlRKtW1fbi1ThdkTvNYdsrz6GmIDVvCHgSXoMObOXI7CQtpvDadjQ==');
define('AUTH_SALT',        'uZVMUkyeL3qWLkVZnmGJj0M4ls5Ga/PYG1VZBdlIooAuzB84ncv0ORjQ6vNkNzgrl3YasIXZNBQQt8pFCcjL4Q==');
define('SECURE_AUTH_SALT', 'FGwR9kJHgt6mG6ObwgvlUKqngQDDlqgLfWPwzO0QkL/2hdqOgq1DBGgw+PPKn+LigcUVJ2+1Ny5rOHHsOYn1hQ==');
define('LOGGED_IN_SALT',   '7R7hZaHUvBPbyrkuGqmHeqNX79LNqwumK8nCSmVctqthYU+p4O7TJl7+mzoKrv9xZaj/MSMHgta/X3uSl1YhaQ==');
define('NONCE_SALT',       'zjZ92Zq6C+6NN2vcecWJKrWS/MQExNwLao3mMkTJjEIra3DX4TXd3JpVBnt2jQmhRbH3bi6K4YrmtFNd0ndkjg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
