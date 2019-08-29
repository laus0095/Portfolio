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
define( 'DB_NAME', 'strangerview_dk' );

/** MySQL database username */
define( 'DB_USER', 'strangerview_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HQ7qSSsZHtcmy3nGn3RVA3i4' );

/** MySQL hostname */
define( 'DB_HOST', 'strangerview.dk.mysql.service.one.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'FXnCWV3R9S3knq0k5md-Z0KMO4rWEJ4dvwHEO_YBYLg=' );
define( 'SECURE_AUTH_KEY',  'd3q3qRnuBLdZtEQAjOvARIj9NEKh1UNX2N8LE73IXmk=' );
define( 'LOGGED_IN_KEY',    'Zs-ii_Mf5jA35CbAyu-Ru66N27GAtU_-nQuuqTM2gqU=' );
define( 'NONCE_KEY',        'WF-zN8cP3ClE0Zuj3wetuhNzUuE6LkhwEyIdoCR6Zz4=' );
define( 'AUTH_SALT',        'tUychNqd1VurpDycs0hAcwlObNl7k_ahQ3Cdj_Vxt7Q=' );
define( 'SECURE_AUTH_SALT', '6yzPWX75tggctvg_lwNV6M5hunaNT-JPPiQ7gf5TMsc=' );
define( 'LOGGED_IN_SALT',   'ZlzWDKDbvP9qDFdT3JJcGk7xC4VjaVzQRajB0BBfqfA=' );
define( 'NONCE_SALT',       'DAzkoBln4-SRWmavA96xCd7Z7IztNW8qJWsaFBHKqy4=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'www_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define( 'WPLANG', 'da_DK' );

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

/**
 * Prevent file editing from WP admin.
 * Just set to false if you want to edit templates and plugins from WP admin.
 */
define('DISALLOW_FILE_EDIT', true);

/**
 * API for One.com wordpress themes and plugins
 */
define('ONECOM_WP_ADDONS_API', 'https://wpapi.one.com');

/** 
 * Client IP for One.com logs
 */
if (getenv('HTTP_CLIENT_IP')){$_SERVER['ONECOM_CLIENT_IP'] = @getenv('HTTP_CLIENT_IP');}
else if(getenv('REMOTE_ADDR')){$_SERVER['ONECOM_CLIENT_IP'] = @getenv('REMOTE_ADDR');}
else{$_SERVER['ONECOM_CLIENT_IP']='0.0.0.0';}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
