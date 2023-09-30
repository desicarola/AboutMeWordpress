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
define('AUTH_KEY',         'RlqJiWy27AwgDQzTjPGSwcwWtptu8fTHzuey4UZkAHqUhYQ8sSwXAwybZJR31nKMfNGy+mc0sJ3wq+e9GDgQzQ==');
define('SECURE_AUTH_KEY',  'V9aWX+ErMbWXrHSDyZDQEFNSewk2gw52ZdWoNrDIqt+9EXgvz+46ksSsRjDNZzL1uSPQdaaz2zqsRnXMTeHnIw==');
define('LOGGED_IN_KEY',    'CZFb9NR86HaCgw8zQOP4gpeMzF5WknNkFfuGLGGTOb//cpH9shEM2laWiGu+fYe8w/hOCtwA3m+7SYl1pR1NRA==');
define('NONCE_KEY',        '75G5WCQDaiPG4tgUAsaoCJn/PhiJKOIXDCbM8TFAv7ufzbkI8K0Lcq0Xt934Fq32Hb+tg0dYB4bvLY2qnEn9Og==');
define('AUTH_SALT',        'OcVTjHGO7kqxKLpWbxJ2esW31NRjE+nYSK/1xdteOSZ+bacp707uscxen5yfJ2DW6VNwftVZ7/XsY99yxBkGmA==');
define('SECURE_AUTH_SALT', 'C5Nuved7lYSvrt6n6PhVYPfIkg9sl9gkrpIE6NpJ1aTTt+yu7XbSyw+UGtYihVBMvCrh9zb7poxWF6tBmx86MQ==');
define('LOGGED_IN_SALT',   'BFZXdfnzmF5o0PWNReVpdeN2pl00BzfSCTSW2VutS2HELM/xUEg4tmA3r4Ndb/IGm5rYiDtgdAFfd2YflT5yVQ==');
define('NONCE_SALT',       'rKWM3QCQt1AP4da4kCexxhJjzACUH+jUhAfuOP7dX3Mq+o9z4eR9/wJM6irNEQ//43pHxRXrs1cK15oln5WZDw==');

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
