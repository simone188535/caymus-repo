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
define('DB_NAME', 'caymus');

/** MySQL database username */
define('DB_USER', 'caymus');

/** MySQL database password */
define('DB_PASSWORD', 'N0pa$$4u');

/** MySQL hostname */
define('DB_HOST', 'mysql-g19a.mysqldbserver.com');

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
define('AUTH_KEY',         '8(7J;vIS Nb&TCkn{N8m_cMuFsBxNGbH4= a?:EgHp^O|!k|{C8]5*oB1FfgV-Ym');
define('SECURE_AUTH_KEY',  '~N[g-J)|p+^YrB3/J|P;@Ol3/OJC1)+ R^9`nIH Md?Io$Z+2cG1`Q+og[HViR:F');
define('LOGGED_IN_KEY',    '+m+.sz>[d-yU%ecVv]-]uF^}g4sTB/9-2DF@=O98WF`+}tareivSeH1I_klRnj-3');
define('NONCE_KEY',        'OU ;MQ].all.VpAXK2zD.rF6Jj-m15yS$%*(GsK51GBr%Zo ,IEMKI@As,7l<VWN');
define('AUTH_SALT',        'EAUBxKhj<2c4yg:/zAB|hkR/{pql<~W)Z*C8j{xe=k(CenL8%l4}J/R_e@O{|N{V');
define('SECURE_AUTH_SALT', '-:]draOywrM;G8r-ak8~)t5IOe%)U[+u2a?$|Dq$v24tA+Q;8YZX9{[ W<Rb)95P');
define('LOGGED_IN_SALT',   '!FM$Znx7.^^T~hEE2%cf/o_Ahr=UVT+!)4KS-6?3[SfK-:WK.Iml+Gav0Zi!Rp?n');
define('NONCE_SALT',       'rItf#m7D&My%X[DL+5YK+8$P(;:?|QmL/hA=B9@L>7U!u85a&P+6(:)9^vJ7hSZ/');

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
