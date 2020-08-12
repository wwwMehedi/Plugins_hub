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
define( 'DB_NAME', 'wpmehedi' );

/** MySQL database username */
define( 'DB_USER', 'mehedi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NhAy1hgAvuejl6uI' );

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
define( 'AUTH_KEY',         'Z)yo{I?.@u7I(ihzW$5_(pzVhi: uI5mz:a0LF`4j_8D{4e,&4E>M9 Io^xJ73;/' );
define( 'SECURE_AUTH_KEY',  '/-I,Y8_.sPqKZ1}_Kl~N*fV>C?4xH*K96a3Ii:11W`Ij={|jzIkQ$cW&Q@z7S{4v' );
define( 'LOGGED_IN_KEY',    'G2wS*LK[K>(@{!rJ.6+d2dKa>lhnZNh&.#Zg^qr3/en !-ljBF_^sTCq#zK:CM<B' );
define( 'NONCE_KEY',        'nDak!gqc6=yPS>|eK$qF1y0qMjHi.4ui5}bEjdUIsvhFWf0=t9O)#}tiaKA6{Q`W' );
define( 'AUTH_SALT',        ']p_$99*`(|UD)c8BM3GH~AD26(5F(uR{p72m7,^=}XSdALwhL.%!$mrGX`RVQ^Af' );
define( 'SECURE_AUTH_SALT', 'oE}dv4:(QRL>6RRF@7V4o}2MB. }[Qe*v]5q7;r&W[I%9Ryj< R;x{wL<tX=sFwV' );
define( 'LOGGED_IN_SALT',   ' i@ 4isDiVs  .^#O+3~Oyq&q{B<IFzM}PfCawwGnj@_/J/,JWKpagfJh8[3KJZc' );
define( 'NONCE_SALT',       'R8KjJ)sF!*>Q1g`YpR?zi$BX(~^FA6+WPlxb4h%aPSLjBAl~f&*FSdnTZVIr>rZK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mh_';

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
