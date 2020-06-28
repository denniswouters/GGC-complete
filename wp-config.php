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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ggc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(=:R}@XELMM<(vCS^Y t|s1Y}F1[x*0aKW|4CVxS1x=#@(i%7o!0Rd!HsNLV[W3b' );
define( 'SECURE_AUTH_KEY',  'qF->){ww&Yj61=04kSwVeojZl_.i`H3j0/Mia-LGI$SSKk=mNE%5G7H<tBvFsQdM' );
define( 'LOGGED_IN_KEY',    '}/4-W8n]!{P:IV^Etr8]ubQ1;?{VKI,r+rLe|@X^tz)0zt:SHHqzSWba(1#qKE-k' );
define( 'NONCE_KEY',        'GA|X@y0{6t{qNc6aN|A{Q?g7wZ7h%}@S(B|nk6ne+no26#SOx^_2(XC:B3d)9FzA' );
define( 'AUTH_SALT',        'E.HM  .l-Y81LulEBXdq% `&yyf:RHH0>{{$^K$E*&lY/L_4)|#T9?8c?F-v:>CI' );
define( 'SECURE_AUTH_SALT', 'rti_{?G4gjt2&uUj6v>?MTa??`Ph{Ain)jn{zS-@zJ%g:UP.5Lbjxgb<IBB[m>i*' );
define( 'LOGGED_IN_SALT',   '.n(hljRgS|W~$ja#~K!+:nzV5euRu4UG;rHOKJZL(z*L16|8~3pw/ >7.|san;r<' );
define( 'NONCE_SALT',       ';0_M <Of15!cs^_x{i_1^stOdJ]8tjYhni{F_(:j>5p))r8){Z/VK3X+chHD+{9F' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
