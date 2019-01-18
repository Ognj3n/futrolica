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
define('DB_NAME', 'futrolica');

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
define('AUTH_KEY',         'T9UEOe sr!O)+qm5RHY_4JTcO<+o]qoi)61HN&%+:FNw%{u2LE:<L)8s+x44P 6e');
define('SECURE_AUTH_KEY',  '@GD~g^)+t{N.X]^xP6jy^nQ+@T<buYO1Hz{FvSRpQ.$WqP2[~e:|8OW`F(EKe/r:');
define('LOGGED_IN_KEY',    'o6tJ2Zq0=hL1G4m$uYw8#mh~aG&xErecTXCWZ?+?)I]lz6+O*]cA -3A/k7v_.4M');
define('NONCE_KEY',        '&kFh<[+vig)-5@M7kh^LdF4 Id=gFK19mD*tifRPZp.3MIeU_!00N[A<iclmlM};');
define('AUTH_SALT',        'sq|+dhxv{V/:X-jOP(+q&~l;<dD=Oka:<#}e3>+-Z2bst4i=Cl8R7PEF(!7D^<y`');
define('SECURE_AUTH_SALT', '0g~foaR$=ov+0XX#*>w75QH72: $`Ik)Vd.+z,sdN<l5D_![$|QvLS<dRAOF4igU');
define('LOGGED_IN_SALT',   'D%HNP0O.HN}4pJ~E-6USE{H2bgy2*w=xV=cVUV_*J_xSr(lCvr!0HqH@&A]hZl>G');
define('NONCE_SALT',       'F v+3tGo?$kxQ.WJDVo+E}gFI F,.u+g= ;qUmALj~O#9+QJ,a-G@ky*ZwCkO-JN');

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
