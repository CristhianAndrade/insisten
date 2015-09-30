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
define('AUTH_KEY',         'zm;SsW(:PajMz]&ItW3s0[NQS[HX|{30qTMVU[K)BrmLh-*<lmJ.FX6225;BjK[Z');
define('SECURE_AUTH_KEY',  'n9iu$r7xow$Y]HM}lYdT2;]m=~Yzjz,!D8GiKl,5!$>1eI==`vg P_|RPFN7t^Gq');
define('LOGGED_IN_KEY',    'Gu/R.6.3yFavO1gkz97SaQ&s;|;Wj+{~]6v`6LH^nG82)adW>H|J_n#I[(*g<^Gg');
define('NONCE_KEY',        '/f`NQ@eb-3Vf2b?{$.11$FmbF_?Q$h0ATm<ju|_}Vsh?uS_D*L:r[l&*Ht?48S0C');
define('AUTH_SALT',        '/*^`!(l^0W^ea&2VsBdftrifk-oGMRr%0:dC|BymL-wb*:y:v{#FC>*qmOb8Z8Dk');
define('SECURE_AUTH_SALT', '5^{|-`bGyO>$uZG+6v&a`jhhrlf$FG>*zT15>)ojH>)e_Q[#]ZIh3P14@x7K**D)');
define('LOGGED_IN_SALT',   'U1W{6Isn2JKL-+c-|vUAF/YtSv#ZufzKQfCq;~kpL?u$&tM!C^t)b+tGx$)%Nv|4');
define('NONCE_SALT',       '~+gXykD`Qd9u++p|]4</t~Za{4 GLE_<$sQ92uUeIK-iqY[KTC|=ng1TM%WB`^o*');

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
