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
define('DB_NAME', 'theme');

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
define('AUTH_KEY',         'k)hOdz)r*5-8fQ+n;0c-]4>=}3Iq^*I#[I).Pwaxd@mbpaCK*<weq,+R]z|Moc.s');
define('SECURE_AUTH_KEY',  '2C*Ax|b}[tA{v6zx;;<-@.p,nT}X+}UTX|-qVO}ka%S_f]k4ar+m^8},k&4gTEG+');
define('LOGGED_IN_KEY',    'zXoTGChA`hr-!_QrPuNMO@d9{g3o@%rl:j/W#K-h^.P[*j-E4rqf)E^86~3K4R-w');
define('NONCE_KEY',        '~TJuX2%A`H2r6_+P7A-wG2w+Eni.Qy91jxKv%A/ll-_D4MB:+[{>_9lzxclk7qcY');
define('AUTH_SALT',        ';6FRP7k$~R]d;bsL^F}UT9<bUe=APV@bahK[r~%vmJ|0FK??-JV2Ld/gWa&`nXtA');
define('SECURE_AUTH_SALT', '{>h4-!R+,1qUj-y90<o//C@qy9|fq}1th|$EB u&EMe9`+nnw}>bl98/c-V@q0*o');
define('LOGGED_IN_SALT',   '[w:nNA)fD?_k!-yt,O-3qc?I>?+|36jD,.VJ|ajbtZ|)uX:p0Hq@t;IVFLDa;12{');
define('NONCE_SALT',       'Oq&^!S&Qbs|l^G!!}_vr4~;VX|)^0|*P_PXHkN,|2.OA$bJpFw33Fbk1%dZ%1X.+');

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
