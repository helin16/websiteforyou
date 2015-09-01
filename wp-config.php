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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'helin16');

/** MySQL database password */
define('DB_PASSWORD', 'i1008323');

/** MySQL hostname */
define('DB_HOST', 'wordpress.ckhuf3oqhprr.ap-southeast-2.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'waF:.JUGF@?oi_XsqEjnTjL+X;fsXMz:O-XHa%48y>bI2wW,j2>I|`:=DuR+_XPo');
define('SECURE_AUTH_KEY',  '~HAV$R=F@u1#YWfpVsj.o{,.GMrjBLfD0ECq(99_}Pdq$J-im|*cH(j:{;g{B#<(');
define('LOGGED_IN_KEY',    'x!B+:!uKjrrHSQ;@90Q)kqNIFCq>]8sbxYw#m@Zx>A  k>]86ZmG|8IsOc1B+QVZ');
define('NONCE_KEY',        'eygFmhxL9;iSMnb98Z-M0-#!c`TiHC@78<}(_,)QS}u8>Sy1sE-h8DL*k}H]+t&g');
define('AUTH_SALT',        ' w$@yUsEDTgWX(m.%VhHLY:O%SD?Hh~&-Ma:>_YhEy`579nvO9~I`v:<kVUV#@^S');
define('SECURE_AUTH_SALT', '}7VnDqnrYlk?TxX]L$rH_}i!JkDX6yjNJLUU`DE-1sY@W~Vlxw%p~[Jjff5VosQ ');
define('LOGGED_IN_SALT',   '9USI~V{N2. !ix~M|o3AB*_}U~<Q8*X!<)Q9EW]6Hnoz#,-g<GdQ#2*S|@wm&0aR');
define('NONCE_SALT',       ':qJAM*4h>7|^S[U>9D!m*k%xM),@q!Ct|] :LCr<kpi`RfO2@ 96ARaH,g+(b7f^');

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

