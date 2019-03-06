 <?php

// define('WP_MEMORY_LIMIT', 64M);

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
define('DB_NAME', 'wp1');

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
define('AUTH_KEY',         'S@2V%4s/QLFRE2Y,(*Gw7:%.GEI2(Y55(P[uJ }PL2NS_KP{hkB8jd&PzfxE%|H4');
define('SECURE_AUTH_KEY',  '0p!_fCHK@1l<?C;w$f@af[2`4+zK f5C`D69HTf9XjLr38~5CA_!c:2%Sy)q6$/g');
define('LOGGED_IN_KEY',    'X-,Dg?,QKt?|?jlX7)R *2#BrenG)v/`HZ$Hb*I3fqF^:SrchMKw#j*QjWWYr`ZP');
define('NONCE_KEY',        'J30Ulo?q+nz48_7sx$)/F5IAca=.LX|0E6K(!o)x?KLuz^KYXk6Z=X|]MK]E[F2,');
define('AUTH_SALT',        'FG:>nZsr9-Atvkng>=>qtw4(d-gv-@d8k|]Z5P)k`6<I*ml!3pxh?faQHrXGcEv[');
define('SECURE_AUTH_SALT', '2IEWdhUnL.G/x|b@]T%o[_Y=cI*4gMISHGOD]70KqkL9C2J[t@+`FTY:ZWT^kJ(g');
define('LOGGED_IN_SALT',   '`T@r^vme3QG]W34CAb/c]<vw=Ap^Lhf>yn[pBc9WXY7!@cpm 5,oV6?E30zg?P:+');
define('NONCE_SALT',       'quehP6kN)|ls(r@Ba9&sfX~/700i=7Xb.Rc[mfliUuTbdDf (!nZfMjPuEr;nHd:');

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

// define('WP_ALLOW_REPAIR', true);

