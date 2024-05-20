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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/dh_2w5etv/adaptiv-inc.com/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'adaptivesolutions');

/** MySQL database username */
define('DB_USER', 'adaptivsolutions');

/** MySQL database password */
define('DB_PASSWORD', 'as@2023!');

/** MySQL hostname */
define('DB_HOST', 'mysql.adaptiv-inc.com');

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
define('AUTH_KEY',         '_qTBlO!f4/&/0WfZK!_amk`!B"^Og*8E~I8vN9m8a@U`O^K:k:(Nfc/uArHDM@92');
define('SECURE_AUTH_KEY',  'AO~)G42s)DlspSJ+TP:Wwf_P42rYLDVto9#EZX4zeszp@UT@8*u`nJ/ietpF2$rU');
define('LOGGED_IN_KEY',    'LYdjH!tJ9~+Hdn_D8T`B~8wHQ`@*ufX9RNGR7S^H6nUrNeOiw080BTGs+Ph:aI@^');
define('NONCE_KEY',        '(ETh:/2G|Axna3^^"hv$nLh*RYpG|!G9Z412EsXb#2$%j%3XI*"G2sJ16Xq*9$nm');
define('AUTH_SALT',        '6v`m?ZLw/E9l$cP(H;ZmQr_Sz29tvfUu+LFz_8waC5gRQO*g2*?"GK63_+cSjM#D');
define('SECURE_AUTH_SALT', 'D*3MAwSfY@uACP@LSr0^XOBm&RbN(scr*H@olmyvz2qHhQ?Lh)x&f9(?5wxiGD~9');
define('LOGGED_IN_SALT',   'j8&A;LWSx/UHH|"&(+3S9xn"oN^|v4_V8"n2hw3cg+7GqpP&2sHP|`iBa93h7n~7');
define('NONCE_SALT',       'E3/?Ku+Uw:H0^m(8G6ZT@@f_P!jc7we9Cku%+Tc/v9Uoz1knpOlVzj8eptgw8$tj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_6i7u7y_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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
define( 'WP_AUTO_UPDATE_CORE', false );

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (isset($_SERVER['HTTP_HOST']) && preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
        define('JETPACK_STAGING_MODE', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );