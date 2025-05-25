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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'opdzknmy_WPFLD');

/** Database username */
define('DB_USER', 'opdzknmy_WPFLD');

/** Database password */
define('DB_PASSWORD', 'qUredjcX5x1&})@wy');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '6cde7eae061fb33606ef9315d68af21fa30c796a89a285630934b288b73ffbd3');
define('SECURE_AUTH_KEY', 'f43567bdd3eb8624388c88cc4242c95300f00fa7cd8be0f3032feb0363bedacf');
define('LOGGED_IN_KEY', 'df9bf9722ac0bf2432cdbfabef358027da26d81678145e75ce7deff6c04258a2');
define('NONCE_KEY', '65b2f248902999c01ed170a2557e220f44eb59a152ff874af0b283ba150be16d');
define('AUTH_SALT', 'adf5d7644106721ce7a556e3b9869348f5f7b10a5af8e722885c5b23fd49ece9');
define('SECURE_AUTH_SALT', '5472de884eb6c92ce915c07f0bd2613ce3b2d37947505ffa7f2a32b684548668');
define('LOGGED_IN_SALT', '4ec0cdad4cf0f48c2936c6eeab830a4031e387595d66d2b06a92bf078693c00a');
define('NONCE_SALT', '6b68a282e591d65d49077b4a3693ee2e0b3f39bfdd2a957e8b4deda3c023fea2');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'uRc_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
