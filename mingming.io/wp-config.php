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
define( 'DB_NAME', 'pozdr_wp1' );

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
define( 'AUTH_KEY',         'aH%5vsR.C2&H6-dhuHXZSfv;ebF{hRrVnEQukgurSffK+xu!SiO4qWE%@Qs#%_qN' );
define( 'SECURE_AUTH_KEY',  '5*WsQ7z_zpGEyJkHws!jOXaFSRBEG_Bg;|cO`/Qg1xT+[ohObyqF@xc&:wWy_h^i' );
define( 'LOGGED_IN_KEY',    'F1SfC+~F?=!<Ytu:-j`>xD^}u<.~L=NSgyFsf9&p#;?BW5:QGhv#N=,#sOQ#KdJN' );
define( 'NONCE_KEY',        'p@f%jNR).~nhRoFQ-OJ|`pQ.6jrl;X1RS3Q5sx)lR/|)(6X}{?oApa.cHCla8Jg(' );
define( 'AUTH_SALT',        'qt!jx$n(;fdWSxs;#mZUd^P4wcx%~lB&_19c%RhPDF~jr1@Oa]*5nMFYI2w VZ,#' );
define( 'SECURE_AUTH_SALT', 'hd4T&aG*N.F6(h1lrCdBgC`,l.1b;^N@1T&%4&~&>gm0LPF]j)4[Nu5~yN?hk&XL' );
define( 'LOGGED_IN_SALT',   'R?<@;u/6rZ^&h,}uLS)(^Mus7%E_f,UV@:{+7ylOXN!45H$6c:Yd/vW:h[G wg#r' );
define( 'NONCE_SALT',       'pwV:blgCi9@|9DU#5_d=xYlA:|)4@{S z/pmPCRx2J$*k<@H_ #JlogT5_!v7{z_' );

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
