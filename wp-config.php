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
define('DB_NAME', 'hdeg');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '_0JOGMlR,/jV(:GD?^i[Yev/mpTeVKc:=,LZ;aV;2+|TU|8)&XNN4Kfe;xHE&e/%');
define('SECURE_AUTH_KEY',  '@m yj7G6%V^r2?~^-!ZaAyGc!c%UgM^D8]k`J/!+xG0nFG%:GMshfjEK;_LjLT`+');
define('LOGGED_IN_KEY',    'lM: P(fl].XBcn 07zd}FUm4X|~%%,Xm$~Yq;FdO9Ra6QdG|>j*[^k7a po[W#mB');
define('NONCE_KEY',        '+/pnP6wCl1IGR%jctGVMLK-MN?3+6L*R+3f$xc1#uv-x9~@R;~[+w9r@a0u;1kbU');
define('AUTH_SALT',        'zE-Yiwy8@l]]Ezz4J!e66g{r&UAJDLY WHewPB&c{@k5~1lXJ*6~*7!kUrjM6s/$');
define('SECURE_AUTH_SALT', '-ss9+[v4}n,%ZJQ-A,KG+mo>6G1l=Xi$&[yxxh:j_gN6s/AY~.#5(9dpy_o,`@um');
define('LOGGED_IN_SALT',   'M4@|MM]Lp Kz#Y^<ZI_OU;9b3!]7?Vu{^z7CiB$xCOav!)X)%J$?)0Dy<NH%][EY');
define('NONCE_SALT',       '6tk.m !;V8{n,Ua*w1ep$!{i@`Ff/M]HK]JWJ}]h}r$UwvjM7K`Q|,X=l$IqZs2p');

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

define('FS_METHOD', 'direct');

