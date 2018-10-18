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
define('DB_NAME', 'datyra');

/** MySQL database username */
define('DB_USER', 'datyra');

/** MySQL database password */
define('DB_PASSWORD', 'datyra');

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
define('AUTH_KEY',         'Elwz3#~<vYu&|-Z1Qt-UR3j2D79@Co6?Bl? .%NA. lCI:jLc+~3$ktpI^V?P_($');
define('SECURE_AUTH_KEY',  't1etmHQV+i8R%XX^yJ=68ZgN*`Y+@$91GY<<oLTRE.CNGB8KU>><|r7vH_.#E^O~');
define('LOGGED_IN_KEY',    't.Xuv1N^S6m!t`5 :MM~jScH<4mEA]FO%xs|{-P(d=,M1U7l6pmhPps~87ok8=%M');
define('NONCE_KEY',        'cIG]z9y>dKav,DS~fKj4pV2w|0^0vdh@)]{F->L<<9A3.a[0snLX-WiNF%Y4}b*?');
define('AUTH_SALT',        'B(+O,/]<FtJ/M3l;]]$HTGqD}wvbfow>`Dt#nQQvwn:^:mlN`nZv9hr)BuMaOG$=');
define('SECURE_AUTH_SALT', 'bcc_*O)gP{Umf]$$?%RW~uTw(u}$ _m-sVRb@[=$H~-8=A(/;s$s}A_G<u`Jg`!m');
define('LOGGED_IN_SALT',   'z?dhn{W _HWYZm4BCx4L@t |%=KRAqSIy +tfR(4$bxQLX1!dAGU&@Yl:@@i=L[L');
define('NONCE_SALT',       'GSO,y!^;Jhl&;Tf0Qk?3%MC=|r7SiW8<C;;@w rJ0$MYBs|!f;:lyFl +?p~f.0S');

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
