<?php
define( 'SAVEQUERIES', true );
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
define( 'DB_NAME', 'example' );

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
define( 'AUTH_KEY',         'h$WO3.KWF8dpJK4si(v^)mQ/G$F[a>/#y-hu[?KfkATaE_`Vs]|$Nbmr2c_*s%3/' );
define( 'SECURE_AUTH_KEY',  '_[p~^NS]ot?0R#E,yF5SpJAKs&0*YXHi%B:Ou.g/Whe>hCk?[BS2TwUh)d)3Q}7Q' );
define( 'LOGGED_IN_KEY',    '5gf3tU?%b6T3$2EN[5svA)O8/r,A+X$lhkqpN#=tRi1<?ATn%?{<}q:_f2D~Y6#Z' );
define( 'NONCE_KEY',        'yUH$pA?M|4:msxF`+KEFGau@+iXgcb]D`B=L/j{{#Cgf{]A@W4!wC]iWm&FpD9Xh' );
define( 'AUTH_SALT',        '@`)Z8RZ~a  8VG[ qBkOJHMFy)5bIMAK#p6n#e_/%m*AK`HwCImMUo(rt&+30?i<' );
define( 'SECURE_AUTH_SALT', 'uoDql+%b[4t}Z`/KNBk1vFCVyWl<A{r)W==EFwq4RjFs;z6aJ[?77}WO=RLI{kE7' );
define( 'LOGGED_IN_SALT',   '2>tw]Kk@8kteC2J@L>AxnR8Zb{#s@0%pSYE6<iQS;[w] ZpkT8n-kIcEApgvJuYj' );
define( 'NONCE_SALT',       '^R5?Ljsa!uuv/oE=i~D86!,/o|vNOtds|Zw M/zj(q?Wl-jSYYJ#}scOA[@$5i@8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ex_';

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
define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
