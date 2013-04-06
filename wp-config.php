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
$url = parse_url(getenv('CLEARDB_DATABASE_URL'));

define('DB_HOST', $url['host']);
define('DB_USER', $url['user']);
define('DB_PASSWORD', $url['pass']);
define('DB_NAME', substr($url['path'], 1));
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
define('AUTH_KEY',         '^v<:7sI1E#z^XrR-J6Rr~{:Z/V$n5HKlX! DNduksKUqg$UK)]X_U-3n%w{hFQX<');
define('SECURE_AUTH_KEY',  '8|D/RvB=HIj9r?Y+@t!o$In:;6 qJA=,0(5p.$_?39>QbFGHm,%Z`5Stt.05u132');
define('LOGGED_IN_KEY',    '|aXeL9~^$d0Me`l.9r50vd2Qw]s9dkE/d*n~ik<0z,{ScWpp#U+z;aFn.?P)f-:>');
define('NONCE_KEY',        '+rYDkCcMB8eAz+ib<GI`b-bE|6-@cqxHFFHB2;P0ee]Md<R1J. +BhE5cO|Z]F h');
define('AUTH_SALT',        'fhKpcixgyLwAAPS#cj+Q^s6Aq++DNh2%gyH!o>t+EH~C9k]bE]{[&`mi2sEco!65');
define('SECURE_AUTH_SALT', 'I|>o{l3S8!FQaW3,W]fH,Q`+au.Dbgr|3V.M] Y}tun,#dh8E }rE.<m~I+H+&Pw');
define('LOGGED_IN_SALT',   ',Z3|t9[DqIx]Q8fR|{m}-6N.ryUI0dd!y6^{3tp@0$-U+M_+0-P0^y`X`g+!(|EM');
define('NONCE_SALT',       'eb?xyRq~up^rkzllZV|B^SB-/8*nZBf50-ms<nk*hmsi.s@xS{l1/0-M/^?udre?');

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
