<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
 die("Your heroku DATABASE_URL does not appear to be correctly specified.");
}
#define('DB_NAME', 'heroku_a4aa703c472d0f8');

/** MySQL database username */
#define('DB_USER', 'bad9202f2c783e');

/** MySQL database password */
#define('DB_PASSWORD', '85089543');

/** MySQL hostname */
#define('DB_HOST', 'us-cdbr-east.cleardb.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'qL=V6Bj:;>jZ|a3FW*d^/+CKw?FN6j}S4-4x_@>fJZiy4/8Q=JSERF7V/c%9_tAw');
define('SECURE_AUTH_KEY',  '$F;=&MzjUK|rpzfd1}MB9AP_*:VqkKpX&NH+E9<^{3gzX-+|PihL8UMiW*xBb$+~');
define('LOGGED_IN_KEY',    'u?t*t;1v/#vHB;|:)V)$z=rp!nvs/|b.+RY6:dQ?z{,P~%S[kI4C42X($iKdEP:0');
define('NONCE_KEY',        ']J{;7jgTeZk*Mg4Z|vQ@[z()3E^%_)0Rs1uf*C #MRjVJnS1%k[%83+XYzMiTdS?');
define('AUTH_SALT',        '7f-K[=[X3=<Xs_G&FT<1D3@iGpc9[c<ll-a BO1TSVBW=$9 ~sV@`|R-,A6=Td)K');
define('SECURE_AUTH_SALT', 'y**uKlWtn9h<c[_ g4@zbh]FdaE7RYnk++H$0+}|KU7]+[CZ4dj+rELFngi{ahP~');
define('LOGGED_IN_SALT',   'h8C[$uUm4q>+U#TcHj4CP!@L_!LHhX=D_IcS>JPfm[Wqa=NG+kdcKL,$Z6X{jg-W');
define('NONCE_SALT',       '$|)av5m[F3L.8w>q;8B`GVcOoT0+-bxw s:50ks1WASuFQytZ`<|vI4_@*b-AacC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
