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
define('AUTH_KEY',         '$`k@z@#R|BZ0if8Wyh=<n<r2s1ggT-|H-^s8jaLx)p0+L8gK NC9VpG0e#]-=:go');
define('SECURE_AUTH_KEY',  'kH%/?CF3NISsOPxlu|etzq`c>(O/]XXyNtk$9w8)f.+Lim.xHHPdB86|_HFZ~HQ)');
define('LOGGED_IN_KEY',    ';~jt%4inFBg6W~Co-/5iEL+yo5;,0`F|h(sCQdRL:B<k<_iV/hy4N,dKO!s7]gDc');
define('NONCE_KEY',        'GBm)D$ 5rqf)<Q2BIUij^M2DzUL5*]ip^LG,BU!r`B+C!>-Ys1|svM=[@(2H*@N+');
define('AUTH_SALT',        'S)|1+7MbSDLE*!qHIPe-s#yqx3-I^4}pmoG>VDj)*|IfEFdGcTNQ1 l$&6HiR.Qx');
define('SECURE_AUTH_SALT', ']f?ogapmXBojk)DZGMc5c/6{MdyQ1`Vybu{?B/OH2>#&k^73+.Pt+s<<5XB=os$u');
define('LOGGED_IN_SALT',   '6c2;/3o:#sdoZNA_zhyeUS^JYSN*n$?`>5-UT_di+T^z_y:=jg.pkK=pUR9&BzHr');
define('NONCE_SALT',       '0{;OJh^18-,;q,0}8-|RU5j#lr314+++DS{HI&[b-s:YzAh C+ VHS`@JrMc_N^#');

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
