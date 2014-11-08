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
define('DB_NAME', 'ec');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'nU+--5jXl8K{:)XWBZlet0+=8c+lfgh~3zXx+5ko+i6=Zp6qf$XLTDfycY1->2zz');
define('SECURE_AUTH_KEY',  '6}G4d?6QE+oEeE~0}_JH!9M03<Nu cYF:-IfG5&8gtFMO-?R<14$1~rF3_@19{[_');
define('LOGGED_IN_KEY',    'Pmxaq:Zt?E~.]!f4h`wJc^U:n8g%#,!oY^jiI=XDw)jRF{(<|H%^+d>p%+$C#m^)');
define('NONCE_KEY',        'Cr6h(XR4d+$$hf?]A9K}D: GpJ+eE@3av;xfY#38lhzC)/Ag:1sh3wuOyn0WX>vl');
define('AUTH_SALT',        'n.`4^dPrYtRiy)r[yIFBZ`&3|1W9.67o6,4fRTdz0r);<WaOW(//S1,W>2Jyo$l%');
define('SECURE_AUTH_SALT', 'DN5^}80:jR6zshQG2w>x=QUVgVXrV=fy6d]165Ls;gm| rtictmC1iXq]bu-%.8C');
define('LOGGED_IN_SALT',   '%MvO +]$di=er=B&x&cO9 `0^jAu=^kkqv8@3h$?BQn=tq%niIVmVRt,lsc7e6Eh');
define('NONCE_SALT',       'A3mSCp39l]vIq7|-P#8~6 67(aZGB>QBNrwQej0iil3?z;Uc|+|esXn2%+l<6H ?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
