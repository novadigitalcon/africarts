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
define( 'DB_NAME', 'africarts' );

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
define( 'AUTH_KEY',         '2R?SEMFc 10s-fy-d$.&TLSOOdzX]n|?wDKjKHBFBZ2]rFXcIjT<I +-l^ 4,4KP' );
define( 'SECURE_AUTH_KEY',  'Q!M@RI%^;3X*:od}D.ov3rT]AN/B[I44GG[xD{&,)lseBXc|w{6V{W}p8M8xpp4`' );
define( 'LOGGED_IN_KEY',    'cUc#, 8&.Q5z+H`$D0wDu7?:NwCBHaG!rSZE^[XFTakm$KeMc2sEOMwmdTt%;] D' );
define( 'NONCE_KEY',        '8stFJOJo5wI-7NZ9rEU,ZrAxZB4L` [:|k@&|=+L}J!K]B8rE+t/39Ni;Eih`4vw' );
define( 'AUTH_SALT',        'ZJ2*h>VSG.2ZJ!IvW@@4uZ+a=cWG[x{6<lzzlTC(<SCfk|~~94fbxZq}j e[vU]_' );
define( 'SECURE_AUTH_SALT', 'u4wE?/is6lQ5yD5Eg)A#R}1K))*$J1iM^*ZnNI^OE Xww[/M>oF5+a3PJrb$v{#5' );
define( 'LOGGED_IN_SALT',   'JZ|&J*7{u4nmoM`dFy[t~Y@HlPQ&JG*&d39e)BTs3WwA=Lj_ZmcE9s49TAdMo{as' );
define( 'NONCE_SALT',       'F53(+nSX_7>aErbp;q@<n%P;5J~aT/IN/Y!U:&g{(/AqErNJP=Suj;<?r8&7#9V`' );

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
