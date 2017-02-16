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
define('DB_NAME', 'laurakre_lkblog');

/** MySQL database username */
define('DB_USER', 'laurakre_lkblog');

/** MySQL database password */
define('DB_PASSWORD', 'brdegorg92*');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'lkblog_');

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
define('AUTH_KEY',         'vrdxjkloicnwqslhtth1f1gbatr0femvevzkasons10emmsgdfud8dbexhuvi2cb');
define('SECURE_AUTH_KEY',  'sydezcugtwrlmx9clrjrbhuj2q6eaecjbpjhd8d2ksnt69m5npr3jbmdlyektsyo');
define('LOGGED_IN_KEY',    'zp2xdunzhyv0zjcr30439az1wovu9whnlyaxnzfganjonriojxk0y1berxuz9ytl');
define('NONCE_KEY',        'mb00qboujej2ni0ztuxpputhzskl2sgwsankzma7mognearq3appaadf3yjikt2k');
define('AUTH_SALT',        'ikwkbeat2kpamueramlam6npcux8lvvw9l3x4jf1ddnaalrs6147ilc2ecs1dzdp');
define('SECURE_AUTH_SALT', 'ns6wjfkjhi3wmo0ztobzjvta8e4zvolkz24u3kbokvu9qnfl54tajdt4med43zeo');
define('LOGGED_IN_SALT',   'lm2qqelfbnfwjqyzargymo6aprbfyyo0f9kp0zpazwxrvadzne9twezugjlvvp3b');
define('NONCE_SALT',       'pblelnq7qbqkospfsvyb9gze1rzhgooxhthr6w98y0xyq2qdcnezrsnvz4j5xdsq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpeg_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
