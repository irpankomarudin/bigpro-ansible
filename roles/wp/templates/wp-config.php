<?php
define( 'WP_SITEURL', 'http://wp.ridjal.com' );
define( 'WP_HOME', 'http://wp.ridjal.com' );
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
define( 'DB_NAME', '{{ wp_db_name }}' );

/** MySQL database username */
define( 'DB_USER', '{{ wp_db_user }}' );

/** MySQL database password */
define( 'DB_PASSWORD', '{{ wp_db_password }}' );

/** MySQL hostname */
define( 'DB_HOST', '{{ wp_db_hostname }}' );

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
define( 'AUTH_KEY',         'j<K%s)Y#:#nb:qmRMPtIZ{yvRH}[`n{bh}eyo!NR@Nn2u`i+p-1_]f,G|}R]` xm' );
define( 'SECURE_AUTH_KEY',  '(@6dwE>rqC,! @c8nRW,o1xH7&yFq9f8:+|:Mj5>,tim2a$,lp7q[FMr{IQaBtM_' );
define( 'LOGGED_IN_KEY',    '!MexV/UcZ_7x8Xru}>9,G]&M0tM;,MO/Io!R4shumzRb/uY}cXa{Z]O|fxxY@Z1-' );
define( 'NONCE_KEY',        'z2fheIER]:MP<*cin.on_=?!owZW6,&#=+YIVcxFm[2)DpO9NJie~b3$|-Hh7B#S' );
define( 'AUTH_SALT',        'M<WYcrR9xv#DV24m$AprBJn2`x+9Zhg+7A3s#&,)z99NyB&cLDbE[vj+su=z.MXv' );
define( 'SECURE_AUTH_SALT', 'jsjLn#!MTP<U-0@Y@ZMBdTH4Ne+{l*5!mj:?!^q*<d9^},kXYCBi?Df@=zBW1KD;' );
define( 'LOGGED_IN_SALT',   '{1kaOG@3p(j:@R_7N/(Ey+YS1@X+&L=^[Z:!C(2+C,s@59I-~m;YUX)dmLwr}7u.' );
define( 'NONCE_SALT',       'z;W!m^=050<V%e^n#/-l[J9Gg{5klL(aH6l~{tignsBdenuo<Ydp*8m|FnWS8{So' );

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

