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
define('DB_NAME', 'webonmaster');

/** MySQL database username */
define('DB_USER', 'webonmaster');

/** MySQL database password */
define('DB_PASSWORD', 'kavi1981');

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
define('AUTH_KEY',         'x[X=>W((K+rCmpau+|_zD)~g<2 b}hQ#frl];gxr9OO}xOj{M$d2xdW:yG1 SE0Q');
define('SECURE_AUTH_KEY',  'bDPh~1Nn|m_}^pi!FuL:`LB6m;&4t_H_?.viGP:c1/(CyLe#wN4Wq9597]%RC(9h');
define('LOGGED_IN_KEY',    ',wUZUpTDCBZy{0[jlf.({&esLa<?)/G$.YG4NSTui5cwn_{Q5d|1wNc<3f.03?i#');
define('NONCE_KEY',        '%>SE4a?9`@4NX[;l5r!9<DI!K_)wg^tV9ef}8$U4 0L&L(cK3bD(M;=`pT+hfmag');
define('AUTH_SALT',        'cKFOjBM|LW!3k _9rFlN,XZj0bsw^BqYcrOB9Y`2*qMIvBOKhu}GJxZ4lMl!eU?j');
define('SECURE_AUTH_SALT', 'X{3H0Kz;MV(,3SD#CBZb{_TpU6wI?H/{Mg]C|~#S#]q$@_1li6<c %boMV0=n)Fi');
define('LOGGED_IN_SALT',   'dSJ&U)BwCPmE%Gr)-%spnvG2B:5vA Q^EBxJ&,luzTk/1lQ4[37O%(:_lh7K_-1l');
define('NONCE_SALT',       '`f_He]s{ek.OL1BbP%Z6Ec:$iVFgml>^f<dnIJXQ@ yU@*2bwo3rWNDLd-kS_P{t');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
