<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'standalone');

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
define('AUTH_KEY',         'i/7}F@t:(q+C*2VIrFr[(we8XG>sq@|lMqtOqsdO<8s?-Q=dJ-dbH+:5W-I1* kO');
define('SECURE_AUTH_KEY',  '-1>[d&,,Geou(<eqkV;tnK|-J-,-R|kQ?*skr9A>uC~00r(7-vu-0@.K/;5|ZE/c');
define('LOGGED_IN_KEY',    'pJ?b%.x- :nj@Ef!k)*S|=nK-+|Yb/.c%G7v|;`Hf+:TOJCIyj0jOan_~-%6Ja_%');
define('NONCE_KEY',        '4H_N^AL0DFJ3j:i8dA>-2bxwpZ+ieBfS60@PL9i#yiTqI3,<uVO@boZ+N,~|-hYu');
define('AUTH_SALT',        '8_;GN]*|Lop|<M|7G#`G+H~:yH[onfU!?1(a6#o3&&o_%=MTt|[gi_ihhXxoLYk[');
define('SECURE_AUTH_SALT', 'sjyqk#6f-B4z|/}e~P<C+13rP};2b|z*LRBIJM:r5B&Y1>ghr]*e8EvvL~hO);G?');
define('LOGGED_IN_SALT',   'K`rt)Q#-Cml+iFZ1,3Y&~#2YX|6[0g*1Yl;&5lh>mO0}P CNos8F#89)l~P%*Hk>');
define('NONCE_SALT',       '>;J~_^|Sk|q`2R={IT+u#U[^r]Fz|zZ5NLZJOh3CLl&[|1l-NpS]H7mm)^^``moJ');

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
