<?php
/**
 * The base configuration for WordPresssfgsfddsg

 * and fill in the values.sdfgsfddssdfgsfgsdfgdsfg
 *sfsdfgssdfgsfgsdsdfsfgsfsfdgsdfsdfsfdsfdsdfgds
 * This file contains the following configurations:sfgsdfgsdgfsdgf
 *sdfgswfgsfg
 * * Database settingssfsfdsgsfgsdfdgsdgs
 * * Secret keyssdfgsfds
 * * Database table prefixdsfgsgsf
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hg5fbc32_wp651' );

/** Database username */
define( 'DB_USER', 'hg5fbc32_wp651' );

/** Database password */
define( 'DB_PASSWORD', 'gSZzp58!7]' );

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
define( 'AUTH_KEY',         's7a6rjyhgdc2mifoll1dg7bbokflnqcjelczjz8ypq3d8h4n2lai4h6gi4yfh5qk' );
define( 'SECURE_AUTH_KEY',  'aejcirov9czqgmgbrqtaeyxxccntbwpzxd7du6gvrdiumkina7vcijlmzrszn4qm' );
define( 'LOGGED_IN_KEY',    '9vzzy9iou39basie1zbwuulremyqosod74y9bpdmxkbyduzobwisch9vn6ur2pwj' );
define( 'NONCE_KEY',        'nkvge9dqhwmilpwcg29d86pmblsh5qijlrn1bgdvocebayzbyucqz333gvaw4a72' );
define( 'AUTH_SALT',        'zauwvqz4mlcueevg9ow9whssqdogc5vlvbrmxpsny9mzdihiptzuri9stmhbspps' );
define( 'SECURE_AUTH_SALT', 'ilyofnyvbobutr9umimgicwqanm6yxotsqaxjioervxerxn9zxly30956kecyv7n' );
define( 'LOGGED_IN_SALT',   'rtjsaxqtsdy5ggmhwjy0wbmnlrxkrrcgcsd3onvf9ixbxwtoozksrwo320jkcrrb' );
define( 'NONCE_SALT',       'c5q6epxxq99oe3l8wynacvlsqb1o5atkrp4j1iwkoj74rvf4vuh2hxi9gvj9gimk' );

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
$table_prefix = 'wpjb_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'www.guidroid.com.br' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
