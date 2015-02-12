<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
/** Enable debug mode*/
//define('WP_DEBUG', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wcl_sql');

/** MySQL database username */
define('DB_USER', 'wcl');

/** MySQL database password */
define('DB_PASSWORD', 'unreal45ln');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'OF<llXi6l0SnZrS:zO?^+*oVVt+uO4AB <0z5Di@X;g}uk*s# p`L8u-p}Q)cT?j');
define('SECURE_AUTH_KEY',  'JinKkgYfi%yMdP5%ZV9{.jQ+?7|+[p8ETKyL1g6KtA<Gdvyk$8:a;/+$rSEsllN,');
define('LOGGED_IN_KEY',    'X$n<w^ XpY7RDxQ}nLg6PzWJ>q%/H1u0=<!g.&@F+z=BuCIk&g<t g$J,^l^N`9e');
define('NONCE_KEY',        '9 K!H;*ZpIA_f?h9$7i-m+{!eUVzQ3r[8R}l_EN/wIF6np/uDPbfxrFo-r40j2D@');
define('AUTH_SALT',        'r4 -=`cfK`vRbx|7yG*z+}>^Rd}5`oVE+|$m2@qB~o1U%pH{Xm^7nGZY4(K]0G6s');
define('SECURE_AUTH_SALT', 'n!}_V%dV j+04+|OTtKgP3Ss}eZ1lPY8eYKtM4-ZZXwV6KU}4{%G|unUP-6g<wnx');
define('LOGGED_IN_SALT',   'jDPppy){SM71N-e~ubr:_SBtA*i}ciD)vx[q(ii[iJC;q37`ixN4o@K|r{W,z @i');
define('NONCE_SALT',       'lV`08v|!HW6B4A|(xy<W!lJ0!9yX)bG=2{. ELj<L$-f%s&-Z,u,A1U+qQ~=Ptnr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'db_';

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
