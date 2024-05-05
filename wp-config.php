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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wolaninnew' );

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
define( 'AUTH_KEY',         'daP^FQ>nBJq5kb@I(^L?79^$:^5Gop #z|R52^v}Yp!6:9#W$xlAGtW]B(h!FJlp' );
define( 'SECURE_AUTH_KEY',  '$kCQIvfvwV+9s3g[/8rI=}M6_T;Py6_sopw`$XU6c<2]ZjL77E~Lt~8PlLDpOx^u' );
define( 'LOGGED_IN_KEY',    'MUXhMJJ9BweKXoo6=zX.ieifsk/jl9YW% szs7~$P)x%GvL;nX-:{BB[n,.9Ux7.' );
define( 'NONCE_KEY',        '1M,PR:^tGNjwRbVjRoIqUHL5cMl_Kq <ViuRD[AHI9Hq%n=m@Wrz9>Gox@Uv(_bh' );
define( 'AUTH_SALT',        '1E$(e#SCz=-H/3xGHDI|X6)v?h;}AW4z[Z f~T=m)=1zQYfrp4M>jAC8,Tb/7Gnp' );
define( 'SECURE_AUTH_SALT', ' )7GQE)Ya*-B5B:1{SXqR}1|UVA,UZvX5HMNcS_,MY,L!r{XBqepk8v~q(hRH/L}' );
define( 'LOGGED_IN_SALT',   'I5X7_2x-PBTQ=z_SA@]yv,n@^M5[0=2JI*6V[FGiou06&~1/rlit}`2lr>M$`b1|' );
define( 'NONCE_SALT',       ';f.Mo*J<SBG335DFMgas,~<To1]n|i/aLVW$0?>.5+,eL,]vOfPTv%stSf#iC*l.' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
