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
define('DB_NAME', 'hambredegol');

/** MySQL database username */
define('DB_USER', 'hambredegol');

/** MySQL database password */
define('DB_PASSWORD', 'HambreDeGOL*&**&');

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
define('AUTH_KEY',         'Ey1/5L Gy8E1/s~>.R^Its70BZ?FMl9$-bQof27e-=V|TWVB*WrGeG.Zb(z?6Iwy');
define('SECURE_AUTH_KEY',  '+P8Nknr/!I]e@bCN68uvuQ-~-rHF+D&PQ4rF+ZUEg4F`I4U{VKho-eAjh^^?T=_*');
define('LOGGED_IN_KEY',    '}+`rx+E&B$XC7jFz}JZ@4s+8@MGv53L2/CD1=f@<1ozOoh:-LvLci.Zv#5-`nvA{');
define('NONCE_KEY',        '6j2SW|j/S5TX$@~|gBJFs~Y>!(NmHFIRiW1DV}tI{<O`4m_,C.`w]8% +Z0x6-E%');
define('AUTH_SALT',        '! w#zQALjU92]Kw@F:K,lw`kpf/>|$}jQ&0NIBDfM@--^KCvHX!NzP!a<_A@>1-+');
define('SECURE_AUTH_SALT', 'eo@6~,9Vg:8P-,Q$&ab9-b=g^~,{yz4+|r*g95$ *XQ|g`EO-r@NQ!Y7{x<3fi2_');
define('LOGGED_IN_SALT',   ',b}ng{5y<=3p6 *Hn2E4>[7x(FFWz/Ww60KQ_ShX!NrbllzG4;Q-vR.JJ?&Sr[5s');
define('NONCE_SALT',       '^]RB@~3@ME}$%am[rYWQe xqwHW-t34)mX6[x,q6?d4Q0AJ#xT5+Jbo~!cw|ch=X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hg_';

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

define('FS_METHOD','direct');
