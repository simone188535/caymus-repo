<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db177433_caymus');

/** MySQL database username */
define('DB_USER', '1clk_wp_EyduV3v');

/** MySQL database password */
define('DB_PASSWORD', 'r3psQpEW');

/** MySQL hostname */
define('DB_HOST', $_ENV{'DATABASE_SERVER'});

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Fz8Ipp5w kh6mOswf 3v5M8Opw cG5U4ng7 V6HdKb5r');
define('SECURE_AUTH_KEY', 'nzHsLJcx Uh4wtvom XtehnrRW GuzpReXm pjvE7fgn');
define('LOGGED_IN_KEY', 'R73iJrDb uZXmfSLV kfSBPOii E4Ruh5xp qVhHHBoe');
define('NONCE_KEY', 'QoUdGKFF PBBh6xLd Kusrnh7A rrFWUbyo YWqYPEfx');
define('AUTH_SALT', 'rXTbquxh JSCRDBGh oDgShem7 OSZ5WTPM TifH7Nf8');
define('SECURE_AUTH_SALT', 'mOWbVopQ Bv46byeB G2jrxTa3 ICMdkvRq xIWFsGBh');
define('LOGGED_IN_SALT', '4apRw5tS cK5QG3gf nOhlkr8k 4HHRdwet G38pgNPC');
define('NONCE_SALT', '7LxBZUSA VF7w8SHH CVvFeQuB qIBPypMK CAz66K61');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');