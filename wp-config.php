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
define('DB_NAME', 'no_limit');

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
define('AUTH_KEY',         'Kj{`aYZSU(G|GKf5X^hS}nV@kR[sUc.We6Z0AaMpC|.P,iO/H9%ywH7OYGZdPH%S');
define('SECURE_AUTH_KEY',  'Z5B<zohuqY-gVTyd:9%V`puGtHwQ9TK@[St[v|;v]{]:mC3bha|;.zY&;0WZ^aO4');
define('LOGGED_IN_KEY',    'F5o.%`vyM+oFF4HPbK@WOY76)lg*du`<b%YW7nOQ,c;+]^UI6z7Fqs3IDb0iOID6');
define('NONCE_KEY',        '+CEUl:W3mx)#&Apry!k$!N{t-8L@X-49cJ8+If/KE~mP2S#Eg7:(PjxWD[C[Or=,');
define('AUTH_SALT',        'Vo]NN0?v$m60A|PGcjhcOnaz/l0i-eh0jGk$<BL+-Bpp/K22d7b#zN(vqc2u~WC=');
define('SECURE_AUTH_SALT', '0)l2A&=-U!)J3Cumu;lddT)LeC=gQ)(rJi+Mc^V9~eAS!*]72$aoMrJiqC9-L^w(');
define('LOGGED_IN_SALT',   'XEnkg,_BEM,AjfV(ZaT+-CEw*~U@lgqn}0Z]>H4O!C!0@hBW`.-86Y67}~KVcS.a');
define('NONCE_SALT',       'Z;IFSun5J,i79]3K4|qcP)Qmt1bh2koT1wWu(H<UPp)tbEa/)ygS|?$h=ns@Y&5~');

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
