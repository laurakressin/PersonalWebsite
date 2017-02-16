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
define('DB_NAME', 'laurakre_wp17');

/** MySQL database username */
define('DB_USER', 'laurakre_wp17');

/** MySQL database password */
define('DB_PASSWORD', '8AS15.mp6!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'uisz4vmrsvqibwlorkfpjostqhrz4egloyximf8gdtytkqthmiecovctmib3jrhp');
define('SECURE_AUTH_KEY',  'c5hsaudbjhxe2zp3o1vm9s16fdizvo8p1q38le0po9dsurzs8exfaajzeoxatxi9');
define('LOGGED_IN_KEY',    '3gvrggvzyivd6uqtu3tyvjc114qd3x9iurbjn2cye23uonjlxdpd2xttx16rkffi');
define('NONCE_KEY',        'ycb3xqj5v7e80lpxhl9xc33m9u33m0hjc3wzfhrzzhjll092husadpnqzxqxekay');
define('AUTH_SALT',        'z7eczlvyf59txnsi09i4gr3e27rjxbqde2ct6rgxk6gh4dohnju5xzjhtiqshdxe');
define('SECURE_AUTH_SALT', 'yrse7rqpuwoaxo1pfkdrtp3pofxijfskxdb2b2jwevsehrapvwddg0cjnhpb9zkr');
define('LOGGED_IN_SALT',   'joaywcut5t9kpf7qeeauk64qk0tqw2ebb6hajvbaxqnt1ahhgxdwlmct5t6exk8t');
define('NONCE_SALT',       'hm1nnrwimqknhbwwtiplb77plrr7r5jzh5kulvwubmomak0a2d2dqtrcru431ryb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpf1_';

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
