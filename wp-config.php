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
define('DB_NAME', 'marvel');

/** MySQL database username */
define('DB_USER', 'marvel');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '{P[FbZ-~?GjT7`M}NSGNARKN:?Y46}X9nZ^i*L~M2.o6H>/Z+3u9J9E&)K5~38,{');
define('SECURE_AUTH_KEY',  '*oKnR_~L57VW`cnKAwT*th@{|?9}oTolKdRK0ZZGf]a$z)94 >[AS&I/!}XLa=l(');
define('LOGGED_IN_KEY',    '_RY|*UX8JZwp^u.TbPNCl$aFz4T6}ngj-`LI?jRxW4M[0;Y>/XE0;iq{j1C_@kv_');
define('NONCE_KEY',        't$MV{1nCIf=OcUay=-q5r0A}H+,l}]L9]fBMm$9n,A]P+ggOCW}<dWd/*|5=1o#F');
define('AUTH_SALT',        'xpU4 pN.Gyin4BY%Wx~Rxc: OzP(b@;}+rM| 43b5_cx7q*5if,Js6!}c{ML698x');
define('SECURE_AUTH_SALT', '3Zv+@/`X=1U<Vgt#[wXEiJ`GnP+1B1d*?vBTe^eHI1- ]Zi=JpnH%YV6nVW5:z7w');
define('LOGGED_IN_SALT',   'xY,hN}UC:=h43?I(oQ*I(ucLA_1hb 3%,aF4S,{zHERy->lysF =aHGNUvw7STW{');
define('NONCE_SALT',       'c<t[p9!JNMfI+u2qsmg;QD.#r32!R~]9bQ6(LB@hs_iKuZ=N1WwMz#eE-dGvkmKT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mv_';

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
