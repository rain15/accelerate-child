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
define('DB_NAME', 'accelerate3');

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
define('AUTH_KEY',         '+8H1V%FlYa3FSFXcg!^Z/,b5q n}4?zN-bW)7;P[u%}5N}lLTJ&B=:]EII A* .Z');
define('SECURE_AUTH_KEY',  'GK~S,.pigM?JjGwv+u9M(l80%8/}$C{VMh[~{WUS/r`3!/4UOgRecqm<KoDv)@Vz');
define('LOGGED_IN_KEY',    'ieA+44t[>I)XDWYh 3/>C<],w R1MeEC{f:icntH!pi{n|l/v|Tyg-,LmFD?1[Bq');
define('NONCE_KEY',        '>GUc6~-F.6fO{PJ/XAiP`mYT$a(4l=z`j^;bZ;KR{qye3MA,Lr-NsukxWRkFMw<:');
define('AUTH_SALT',        'uV]Kiz<(Bg1y`)}P;RV vS+hb8)N#>2_wdYVZOT[GoOeyCfQ`u dgbwJXPmhP[Vz');
define('SECURE_AUTH_SALT', '+72[mV5K}hf[cMpoX2biC7jm_+9l]V-}usf#T|>!h.R[@:-N2Ec:F/mbAl-d&n3q');
define('LOGGED_IN_SALT',   'U7Hqn.h_jgulCXpoW[=a*.l4lc58loy4X`gh!LN9;3q:CpVBcjK$c)uUu5_r.[=|');
define('NONCE_SALT',       'F#+!73OX{V;[/B07FX%! %rQP%iVw}@iPwt~Zzk*Ly&`y+?[@WzkW&(U)=#X*B;3');

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
