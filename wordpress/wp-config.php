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
define('AUTH_KEY',         'CX(# 4q6C$d.<ajzxo4?(@Q4L%Ecu!3C{lvK3]d+aV?DYxHgfGvK^f7`B[YefRw^');
define('SECURE_AUTH_KEY',  '>R2[;yC4Bh+/q[Wn0yyBcHiP.kwx bM*Sm[[}[-3D^g#zT6cZ_e;[yL+;PH;(Lh<');
define('LOGGED_IN_KEY',    'al5-qjqcGy]Q89KRc>[JS)!|3iK;&t.8.g=o]qHzx.SaGL[ZwHsadm[<uY])5@g$');
define('NONCE_KEY',        '{Kg5|t2$x?LpR qo<L?J fYm`VuQ8gePYD|q*xL:pU0zX<%KC5Kzx/7[/pYydaG@');
define('AUTH_SALT',        'sV=dq_$R{?B?U](OeCai/L>uxoIZ+#u1wy<KPF %A2r>CGzH9 ZW{ou%YjChz`$H');
define('SECURE_AUTH_SALT', '3tXs?Ym=Cx<3e,k[SS$eoVU8kFr4&-L].Fv)-h_5H6HXH2t+/%JB^VyO,z%3=SQO');
define('LOGGED_IN_SALT',   ']K_U/3E!~@+Xx%flI3T+^aJ}t96 i_PjuY^)&4Le-.*-JC?Wjq? @8@ZxU6QR9#B');
define('NONCE_SALT',       '8Z@Yg*b[Pqf9,XsY8NwD_eb|Hoe}79aIn= /rGKgik8;Lotk7L(I[c&T)j nZ~5*');

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
