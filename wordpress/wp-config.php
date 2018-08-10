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
define('DB_NAME', 'yuliu_site');

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
define('AUTH_KEY',         '0j$O1hokj+N.Q]tpRULUfdIPeg-}&/7^>Xvqy[^JUYg%Pge<0$ <LTfG}}u(hrsp');
define('SECURE_AUTH_KEY',  'ZvV*k%f$ZW9CNgQ8sk%52PIKU}Ug]l1^(42)jXKIsJVq~ZtVR`|`<az)bCFJQtEg');
define('LOGGED_IN_KEY',    'L4F/aJECGC LwQsxo~H6Dn+UCTRa[I|j8ipwuYQF[QvfKDj.l^erH/rc}t*ZxE]Y');
define('NONCE_KEY',        '/(?`{xExB|}nNst,eGcX#HMTiwND-[~#!8(!9B;ix2.4s`u:U[=+3a`s/NpV$v@z');
define('AUTH_SALT',        'qtz8]_mZoeQD{ozxP(#2(#zHTL@G$pH1g!ko?VcqR*{fJHu/h^|`BP?.4c[f_lan');
define('SECURE_AUTH_SALT', 'U6!_lZ^`{&Ebj$~psZ}V0nbPcpNggRR7`kE=s9rcnDhwlUl@|F-,jh1j_)%]))- ');
define('LOGGED_IN_SALT',   's_r,!.nF@(8TyxNuQEvv$j0Iei!abauF_C6cTeLT}6wbh@kW$a2;]4A1eQyQOJ$0');
define('NONCE_SALT',       ',ebq+hHUgpmmq-?ABxB(IxG@ht+M$, 6}hHD[r0T,i~pr)$|@@$+LX<t]3G5lz ^');

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
