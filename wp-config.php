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
switch ($_SERVER['SERVER_NAME']) {

  case "local.organic-living.com":
    define( 'DB_NAME',     'organic-living' );
    define( 'WP_SITEURL',  'http://local.organic-living.com' );
    define( 'WP_HOME', 'http://local.organic-living.com' );
    define( 'DB_USER',     'root' );
    define( 'DB_PASSWORD', 'root' );
    define( 'DB_HOST',     'localhost' );

  case "organic-living.nowwhat.hk":
    define( 'DB_NAME',     'nowwhat_organic' );
    define( 'WP_SITEURL',  'http://organic-living.nowwhat.hk' );
    define( 'WP_HOME', 'http://organic-living.nowwhat.hk' );
    define( 'DB_USER',     'nowwhat' );
    define( 'DB_PASSWORD', '20273214' );
    define( 'DB_HOST',     'localhost' );
}

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
define('AUTH_KEY',         '$P&%G-C%t^X|$tea$$~f+<;z{:;7M82<hFY2srpUTk6ah7@)K<|;rphxcZU?0&fU');
define('SECURE_AUTH_KEY',  ']h)1FMF4`_z+JQmjYh#CHrK>q6}SA|]`I$@2Qs{W:Ne00#4Ur0(:|YHt~$525)W+');
define('LOGGED_IN_KEY',    '^SKk()oW.R:-Na+5#l`1B-U{ !#t8h$6c_`xQ&N`rLjFnHcKsK2|?C `8--3E&^`');
define('NONCE_KEY',        'SoPk>kVE}31oja!bQr.mQ#BgOsOl nd,HuRRW6^$I,_rii 1M3iPKeM3X[Pn(Q^/');
define('AUTH_SALT',        'eKW{g#E0-9g=|TreGe@L-Vvy[/<UPeT$qy6 B{Ua(9tx9yn-z1E=zVHXZfL{DJzr');
define('SECURE_AUTH_SALT', 'GL[4IoC*R{ b(rSw>7JxkN$~cT+pTa8tumg$-L<|?o+;iPTYR:]0g@^3F}|`FTyw');
define('LOGGED_IN_SALT',   'oJg<2):- ZVD-u2sVfngHW).A>r6~FE|RxT1juoZM+eLRv8M+L9Emi{n:gJ{8*)O');
define('NONCE_SALT',       '()X(^WGR(:309OG0Fk@auILZtJ^G# zM Tg9xQnG(x{S%4e-b4..I#lX-E|s-ud(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'organic_';

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
define ('WPLANG', 'zh_TW');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
