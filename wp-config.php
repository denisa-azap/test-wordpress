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
define('DB_NAME', 'test-wordpress');

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
define('AUTH_KEY',         'S,|E&bl]++X%8c8u2~=We~J<BcOizck{2%Vm4(t=_%aAQ}SlK.:IxV9DE}GN39r9');
define('SECURE_AUTH_KEY',  '1+&Vf)AM7W/QDj8C+NL=DS0 ?Um9R:spc@22 -G.sIBNXSwGQEZ}` Y(&cC;9(#5');
define('LOGGED_IN_KEY',    'x{uz_K7o[dLrnO:,O(0ItJRq&sLD^0h0r+B`*g9UwQeiVj}L/WYKKGQ$].6YDk$d');
define('NONCE_KEY',        '*FQ6Ff{VB.vR?b~{cES;!wHn|/C/pR`XL_4Mg&n>/SsVWXD4iqJr{WIf2|j91<TJ');
define('AUTH_SALT',        'd`Ba52&G>@*!D(]OP%rli)Oi4=kgBid!)BB;/xS?aC_j@`.i&IO`j02wRx,a)r;L');
define('SECURE_AUTH_SALT', '5)~xGb0DD=J6||2l8LQdNQG9rqIOs5:G,5ZT%^dVj^adQ`r3[W_8VPoSbHG/eaP!');
define('LOGGED_IN_SALT',   'R<nOh{OG)UPc4e9N6]DB$jJWX{`^lb}TGq#}org9V$5q~x=.@q_a~lOH8<s k2zr');
define('NONCE_SALT',       '+m/rbIspNC7v-HEiha-c)%$#z)QGS*+#oW}+snoWV}uTzQiLg44.?rqp!w1?m@C,');

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
