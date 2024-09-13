<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'egenc');

/** Database password */
define( 'DB_PASSWORD', '123');

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

//** Redis cache settings. */
define('WP_CACHE', true);
define('WP_CACHE_KEY_SALT', 'egenc@egenc.com');

//** Try Redis container */
define('WP_REDIS_HOST', 'redis');
define('WP_REDIS_PORT', 6379);
// define( 'WP_REDIS_PASSWORD', '$REDIS_PWD' );
define('WP_REDIS_TIMEOUT', 1);
define('WP_REDIS_READ_TIMEOUT', 1);
define('WP_REDIS_DATABASE', 0);

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't0;|IV[:=J*[)6qab9>t;->48]70J_h-<j]#rd+c1O,w5azI2P<F.oe<*3Uip`8@');
define('SECURE_AUTH_KEY',  'E=2eV|KqphhRp<0<Q3C|rh!MkY3a>?7[s50%H-Xi/R=p_m I}+T@^L$b1N^]{u+p');
define('LOGGED_IN_KEY',    '[Fodu60_soR]oxoWATa$.[:_V?l]>@p),zYceg}3%jszK~%W2y UjHu26=n|-2Q+');
define('NONCE_KEY',        'Dw[|+cm,=*)&`4;G6FAhMJU2+VDrrECf)kRm:X,AA|#/YCI(V-HVAp<|o%aK|T2+');
define('AUTH_SALT',        'N5af^Ub3G|o+0_1sj5]v4!<O-TMuQkB9[-Y@hR&6f3|Pv_$+;w+N9Yt B:u0>XHu');
define('SECURE_AUTH_SALT', 'b*hs S7%RF?8NN2K%NZoB6PH&o~t|w8[UP}*7~2Y;^7W0JSd~6L1zNbuubgB:?Dn');
define('LOGGED_IN_SALT',   '*0W4AkEo}gLq~E,<Y1ZMgVuesKJZ?j![G-N$F>+o|1x<Z-W9yjSK{HoI*r|Iyx~E');
define('NONCE_SALT',       'o+}0Maq4kG6QzLB}l(56h>}+VM?n>3mX/Go<p3bx|{%VR$rOS|@5@}GAlCOTu4hl');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
