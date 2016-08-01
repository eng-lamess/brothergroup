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
define('DB_NAME', 'brothergroup');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'JHHUUGxvW!i%wtvv rMh+).BG_V-%#szxUw0f^k*!O`!Gv}(tj(n8;DvpPQR6SMe');
define('SECURE_AUTH_KEY',  '5)SP4tX|V!<IT--nf{#^y4[5(`qu&O2U.Y;ZJ/2U-6H&3hz8D?>`0XnOHLps#_40');
define('LOGGED_IN_KEY',    'K)^2QBPIk5&d`nK+&:zS4NC{#)DCH3_-&/j&]:/uM0EE]|f)2?wq[>a*>9%SFXs!');
define('NONCE_KEY',        'OO$6:@=Zna4uiE<=PW&xN#wJAcQW?LQq>kdMstGDiJuASM48$tqHgULn>Nnb<b%D');
define('AUTH_SALT',        'n2AX;{Z-(x+m7rDNuCRV3Y )`CUSn+DyBiAXtfE6PWHff!Jf+?{]A/=OJpO6CX3]');
define('SECURE_AUTH_SALT', 'w5hm-ybFcmsH8_b.OHqmVTbelHcR?05I925Og~,:>.&Xj[K$CNSHhiZjoyD~%%bx');
define('LOGGED_IN_SALT',   '|MEiBa@$P5=E[P!6Yb,~IAaoz@4H8p!`4eZ_GUJO7Eh+%Vi^BX_e&?k:g#y!$PEI');
define('NONCE_SALT',       'fxc9VFvd*DJ}[TACKbzGl3J[>qO5K|g+*3/pOA!Zu{D%X5qw{_dlLkk7zUSz8kzd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
