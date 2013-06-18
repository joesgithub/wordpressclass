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
define('DB_NAME', 'jp_wordpressclass');

/** MySQL database username */
define('DB_USER', 'wordpressjoe');

/** MySQL database password */
define('DB_PASSWORD', 'Sn0wf0xes!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         's,b_r~[0wQY-6vB-tTPv>9kg5 bstyv9?=):sLW?7_>nq50dh}]RQZLn`eKpaT=V');
define('SECURE_AUTH_KEY',  ']K(%Raq<n){w}P6NZ&4Y$:ki;gzUE[i4^*qlINbvN5y{lO[SUCiwj9|5HcV|)vk1');
define('LOGGED_IN_KEY',    'pfi; VMeNf]yU-iyE&=6:^h`oA_Q*m P-;&UfJnG(M]9VBS/7_d3BN_V!li@EG}:');
define('NONCE_KEY',        'PmS5dfdY>tiR/xYoCWt2JNLnrmqobgENLDA_b</M<Ll1miT?>&Wy:q94rul5$r,]');
define('AUTH_SALT',        'ne8[-O1[V*f$I-GNE5uI 8Dw|4){[w|i@5Z=i-Fd?07zfL/k;JWgtVT7G+2D|^je');
define('SECURE_AUTH_SALT', 'xyQ+ UUysX84il0pMIDDcA]-X{XN=9.BIjz3jvyrU.JRE8#),meOj*5@E)@G-3Kn');
define('LOGGED_IN_SALT',   'I7HhNaD)&NiAsJ$^-3L+(,~{UZ4]@<] TUXP1?6N6W6Ooa %0OI.c%_XsoWY:#^M');
define('NONCE_SALT',       '|W8kbjB>9io;L,&v^De?tR:p(A~>,+8[C T2#D8#=d~M#6%XYk*0vciS8z:FFsT7');

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
