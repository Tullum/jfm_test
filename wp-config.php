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
define( 'DB_NAME', 'jfm_test_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'o5TUqs| %qoxG{Zj(K1M{8e~XXt,CT+=X=B Sp5=-)(L&zO]qH3VwWzHy)(Djr&O' );
define( 'SECURE_AUTH_KEY',  '>8J9/HksS3%FMm$RM$6[0glY:~=]cd[?yb#psBg<tosEBX)RndD7hp[1?l/ oe#Z' );
define( 'LOGGED_IN_KEY',    'I.b*i@9j4X!l`+1l~jATd;2Z)2 4-9v!qql]DNH #d2xf;|ne4rMGD/on<]bGu,I' );
define( 'NONCE_KEY',        'z{9BE5,69YUmu(c:e-_|Y!2}dxJ.Qi?( ewEzvwW41TR.#XH]sTAzpK6t1ubVX:-' );
define( 'AUTH_SALT',        '=KGW*M<~zjr|!Bwi0EV}P}36eUS7N).&Yk*tKDEqrPWr1`8AUB7_I2^l!sE2K@(S' );
define( 'SECURE_AUTH_SALT', 'S_TaI!/8z4aK!Xgg@(IC_d?}>^SStOUySMPNC}ZFLX{pod89ENYf7}i#wS/q*PC1' );
define( 'LOGGED_IN_SALT',   'Fhn :]Ni;*I[|NFJ+PQn/er?>gb2=7i8H}g__A?u;nQdJNVp@}krK_C&2BP|/>iu' );
define( 'NONCE_SALT',       '!QYlx7g:ok#77+[Fo)[D62Nw=U:3RgInE4,;Dq|Ej|ylys@If},h<uc:=F8!1~i/' );

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
