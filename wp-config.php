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
define('DB_NAME', 'pixsens_db3');

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
define('AUTH_KEY',         'M:E%9k+e$w(XtXsLhtMy,*qjBZ$OZ(eK:+>fy#Rj|>v#.r.`N24uwu.Tg~p5Da5v');
define('SECURE_AUTH_KEY',  'uGgs{q(Gzp2EW6:,<;+mxH^!1HbAi&G-+ l|v[Q-%Db%`7PZ/5JZ+Pa5;S|B@Jrd');
define('LOGGED_IN_KEY',    'bE+/P8B!*guj=t1Vw,NM t87]F*-f=p|Eo(w.1Rpe}X9g&B<X[EQ^2p?@|?,36.`');
define('NONCE_KEY',        'o,GYRN,^nQM|> N>QT.Q7{VI;]S3EgA|H+-rdjL&h[*;tU?$.7Erawg-*4/wJtk/');
define('AUTH_SALT',        '4]mh|NHL8/|,Gl>94yQQK.ro>x!S)xzitkoKUCUI!T^$g=]&,.[?6C+`SUCZ<Tm)');
define('SECURE_AUTH_SALT', '/3hxt1+ty_XdP(>8k_8+!Z+}uF_kb<r_xVNw_u,,@v~3>QF]P8;;{Pc)y8{s<ozN');
define('LOGGED_IN_SALT',   'gwfj/&11qm}I-AH-St~N+k<;m1O23P<U9>0M-=Dr*.sjJjQ{pfpBaoQr3<-?Xx.=');
define('NONCE_SALT',       '*d;L?(@x(V[M$<8pCfqWqJhRw3n!Ns!`lJ}v0K5y9i 6v+b*(+q ~gSR @(SlA 2');

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
