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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'fa{jW`<wf3,vh>r)sK=%]8W==zn4IQ(H*4J*WUm|k+.RY$thEFj>?,n|@Jg_x@;o');
define('SECURE_AUTH_KEY',  'f>&;L|;t2;=]-4D{6`NRv;D)b/<m0gRF%:#E?b$kNj0FyU[bprOoEBFb{pUui6?0');
define('LOGGED_IN_KEY',    'GtpXboJ4LO+`ho2$?4J;E/V-H!n|ReIF)|F#;rK*1hG-AFd*c#6E9)A}-^Rjjk;4');
define('NONCE_KEY',        'U}evdpT08xt~DY1kS4z}`<%+i`s>z#JXxZE!> m^>UDeVwR|Eu<o<D(XR;p`^,EK');
define('AUTH_SALT',        'DCyq[_-Qu7&--E#x$]bcPL_-LT,7<|R| OpP4>8P HB8~7p`>w5{Ps6+PaS$D&;j');
define('SECURE_AUTH_SALT', 'k: PqK&kScSb=XA{D3(CD=-g_F@YW5J$][vL7.Np%/<+2V|P-!7[K`|W(vrv*R+e');
define('LOGGED_IN_SALT',   'g9HWS`riyyH4O]hpZ]JTR`#w :@QM:I6=lcQSx-mXU;yYHcfuEeT0~C&t<?QrR<E');
define('NONCE_SALT',       'W|6Cbw]p{LOI. d!?SVu-]3e;W!Z4[8>t//Z,+-x-/#L U0Qj7c-4rP+Do&r`|ab');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
