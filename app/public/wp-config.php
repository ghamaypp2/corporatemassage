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
define('AUTH_KEY',         'Lqzc9ewUq+7XE6ry2+PIO2x+rHJ3ltRUVHse7FqoqoNvxWv79wqUeosjm4cHqgedj6z6+u7rSDjQlACCkgfnJg==');
define('SECURE_AUTH_KEY',  'ZRrBFEWy2+DW14VH2tdpzxK+xEnuYw6+HDa6NdcokpselGy2qvknsv+rSNknRI/fjrY2otFMo8jDcF4rxQCOcQ==');
define('LOGGED_IN_KEY',    'REyZTvnWhriMkQvF88F3qNOSRKdiNg2GPJm19lC9md5X6wMSF4Vi/NkXHcJb3z9kJPZK+ke6WgXGcIYmyb3LVg==');
define('NONCE_KEY',        'AEI25rg+v94Lnd3f5y8guCRpHgavKJTjR8npnSo8Y5vvdW8b94FESk73inew2BDRhxyu05d1N1eXNqYdLqSkrQ==');
define('AUTH_SALT',        'kZz+cMv6pvPJyaupT+GGLrlTAae4PhLLq5QNgh1U6E6w0G3wtIEGxBVEpC0SRNsYWFLIxfPFsmwjMYuhtysHCQ==');
define('SECURE_AUTH_SALT', 'kt+f8UEHgnxw1ubbuBWR2YQQ/+UMKE1pUb+VALbDgIAmzv0WxqBo1fYnVcWdLTUeGUKK57e8H2iFjo+rvMkr/Q==');
define('LOGGED_IN_SALT',   'WkHu7sEuZwc4J4S1n6mt9GxHrfSgBNw9BhksATcLL/yDFW9xtWsQGT6Glityh2TzT/BDh59DxqVSzwr95ifhlA==');
define('NONCE_SALT',       'LKbT62udTdszASXwozJWehihe4FrESeFoHo+0/6yRMI4V45LXItX2bSo/SXVBcB71rR9CYiFQhzzSCvQyo3hfw==');

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
