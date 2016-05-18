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
define('DB_NAME', 'pfa');

/** MySQL database username */
define('DB_USER', 'pfa');

/** MySQL database password */
define('DB_PASSWORD', 'y6BT4qMuey');

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
define('AUTH_KEY',         '!4JY5WX~@*mM@F5_1iM=)+ys*pB`xyakN:Of%-Q`{v{k-=?w:>|OfrC<UvIL_yh$');
define('SECURE_AUTH_KEY',  ';8JjJl Swo!AhSgs9(NU}Il-?k.W G)Oqx&D7/ZEpNUhU#(LixzR= tx0|0{!+Y1');
define('LOGGED_IN_KEY',    'r}/ZRc64+wr5Cd[rk%53hH8,Ka5K@u&)oXKr8J?S?I5sh &IUn896bE6n2PKV~2a');
define('NONCE_KEY',        '5fs7C[fuh3TwS11fqQ$(:Y/P(?5lXXTIIGAa,[(qJ=] 5VQ3yvspeV4`EQ(j%{FX');
define('AUTH_SALT',        '>#{&J$P!]mmhwLps@j|j:Jucf[I`/LatJ4bQilh1w1zS<Gb1I,`d?ZS_> fef.67');
define('SECURE_AUTH_SALT', '=BG<dQ_#jh4_g%D|1S)Linob[xOlpBr:tz?}bfgV:jT zLG[c9gzO}`$` +EvG><');
define('LOGGED_IN_SALT',   '-tcGJ^@=s=OB(pX*`Um,2V:#G;+P&q;:9ksj!0<F;_*bmul>8N*r69(AsM1aVBsE');
define('NONCE_SALT',       'qd ;JakdXo${Pl6_>9R*Q@D)$eVq#yGUH4_I#cgt{/aSbDz`M;ju-*~_n1Pgo&ch');

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
