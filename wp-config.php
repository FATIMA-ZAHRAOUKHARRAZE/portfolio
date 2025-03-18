<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define( 'DB_NAME', 'if0_35114577_537' );

/** MySQL database username */
define( 'DB_USER', '35114577_1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S8p]ZV.60S' );

/** MySQL hostname */
define( 'DB_HOST', 'sql204.byetcluster.com' );

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
define( 'AUTH_KEY',         'q8cpdidsu6kxbhvdwyrsdreoa9mfp5mxhzohgkas7jfc5he6yb3cyslc3din2u7b' );
define( 'SECURE_AUTH_KEY',  'wxynkkclre7rhoximn9gzqrhmopse9mv9tlfwpifyyjuu0wgus7qdr1jxhv2gm4x' );
define( 'LOGGED_IN_KEY',    '4yfkneoekppn1jfbrtnvi0kpf7anl4if2zsz0lom5dsrr2ggyss6nqkegmcb2lw6' );
define( 'NONCE_KEY',        '6rzgtj93ssxlpse3rv2vocghrpvpw1tvy3afzqyca5tsycgsw3ohzroerf6iyokx' );
define( 'AUTH_SALT',        'w900b8dq9xg0tmqusltjruxqec38yvsdq4zunp4dtervnzcjuxikrnq6ndwp2dxl' );
define( 'SECURE_AUTH_SALT', 'nlfg1vlzqfk3e8ttp0x7yyxnbhhoz5dtbnu7pvs8cjl52qc2fmhnlhwgigptmrwd' );
define( 'LOGGED_IN_SALT',   'cwde86lqi8jd631kerbdclohnxgpqvru6p7vtz4vfrd0uc7tavjlowo0l1cwssij' );
define( 'NONCE_SALT',       'ppcxkpcaxerpw97hiemcfrxzhzxhsmdl91q9lwrb2xfpusdgwy0rrqmwoxdroab2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpni_';

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

define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
