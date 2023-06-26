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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'yF3zViqP/+vv0ywJj8RLd4vY45BpFOt/SYwk4WEXUqIgm+Q2LshjXNKAVWLVg7veikM2TMrUWNxfWuG8Um+z+w==');
define('SECURE_AUTH_KEY',  '8yzDeTPyGdQEfwq1+yhD7AKMbywFaBZQGn9O2QICLbZQeF30Po7glqjYjD5IWGZhkuKPwTkVHemqGswZpu8pcA==');
define('LOGGED_IN_KEY',    '1nVActrDECqGdxpVIM6lpnt1AXkCtW3t/xqCBATDel5FcxCfueD1w15++6NbhGyk+aVm8ugJu92JJIztAtTO6Q==');
define('NONCE_KEY',        'yMcW8aQbtATQWGsapyOMONqk3aziaCWUEuFpr3l+YluFbc/xkD/FHFH1pHJbBeC4qh6gtoIjM19j4sCCSfwXHg==');
define('AUTH_SALT',        'juWBLAxYfn2gngW1IyP3uacsU5PEUpSPmxzFxPwO3p1abOTpYAKkCIBPFgfr7E1a28tUe7Si4k46K+h6J5ZIxg==');
define('SECURE_AUTH_SALT', 'ZXgk6NDzaUP4Z5lJJlSZEKF5ZLR26pRxzQ5sNh++0+6FVL0mcHwRQWIosD/809hX3gG+sXC6f5mOLINSa+QoMw==');
define('LOGGED_IN_SALT',   'bzVAWS634B7CY6oHX2gJ759VEIUqId26W3XCogGkXBWSR3TlsKZ/MyNE86SFyNoc668fgaAFCQMrYwtYnV/7Ug==');
define('NONCE_SALT',       'TEtdta2KtNvS8j6zIq2IJw+jpP15P1Y29iMZmaJeUNGnifqibrcde8TxQqo0X0oWagMlhWyyPhAO6EXBEqUiVw==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
