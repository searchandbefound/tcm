<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'tjkfcfwuzz');

/** MySQL database username */
define('DB_USER', 'tjkfcfwuzz');

/** MySQL database password */
define('DB_PASSWORD', 'JtVNz7bZr6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
require('wp-salt.php');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cd0827a8e7_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */

define('FS_METHOD','direct');

define('FS_CHMOD_DIR', (0775 & ~ umask()));
define('FS_CHMOD_FILE', (0664 & ~ umask()));
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define('AUTH_KEY', 'QruTXOS0MuG1Hv5duaEoa8QOeeKmcVWBew3ke2py');
define('SECURE_AUTH_KEY', 'WFYQBb0f7RSNf93E3QrHkgg4Lr2A13L84I8kmdjr');
define('LOGGED_IN_KEY', 'zkMlvWpjtup1qPyNwkiPhUIkVUUjPsVVbhivVnmQ');
define('NONCE_KEY', '2pevGXrwQBZCJzeW1ZRj4cErZcdlFdOwDkbiGjx7');
define('AUTH_SALT', 'L0NPJj253RnALPIq4QXY3pAmqbeTZRgHJwNnBKGf');
define('SECURE_AUTH_SALT', 'UNgeBUbvCSliiuAuRssow8N0m2JrrCWFqBs2uGZ3');
define('LOGGED_IN_SALT', 'yWAxXY8jF5WugOLnWaSmoH1ztBGHdJJlzqYPIj9D');
define('NONCE_SALT', 'PefiiYKAOZSkmouO8042Ml5UtMsaYL2z84E1uATB');
define('SP_REQUEST_URL', 'HTTPShttps://http://HTTP_HOST');
#define('WP_SITEURL', 'http://wordpress-38143-84563-235841.cloudwaysapps.com');
#define('WP_HOME', 'http://wordpress-38143-84563-235841.cloudwaysapps.com');
define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

