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
define( 'DB_NAME', 'sciskcomdz2021' );

/** MySQL database username */
define( 'DB_USER', 'sciskcomdz2021' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sciskcomdz2021' );

/** MySQL hostname */
define( 'DB_HOST', 'sciskcomdz2021.mysql.db' );

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
define( 'AUTH_KEY',         'Yp(G&;jnJ>K=~I^w4wi,H#qQf}LtopD1(0P!{l$omv3uuzu+&&UGeLlD$VE>Oc+a' );
define( 'SECURE_AUTH_KEY',  'Z[>SteJ)=M=ZdP#<IIHGicuMoyVKUykbpk{hi.4N`JCv&F+($G#%)2p*ubC9rpY@' );
define( 'LOGGED_IN_KEY',    'X%&EcIF-~*W8iq%G~QktWitwQFK-Q?w.x-DV*@GOG1*3AsP1v.GX},<M{NT>?&==' );
define( 'NONCE_KEY',        'Is$5#ZR0wL*AH^ksS1`Oo?lMiDC&&fN~o[.X;I2h0WDO?_10d{s$cla.[ax$IWt-' );
define( 'AUTH_SALT',        '*1C1K1pS4_RGzjK:Vo&c;;@y]7`+*Mj}{X!iWd0#xVS;/k>i$sh:UgfN4bF_U]g>' );
define( 'SECURE_AUTH_SALT', 'l`$W&!#KI5G)/yVQh%QlJFJ#+Oq~K[<[4wx0J6n4uRzyT8~V; NCPmrnku,Cd5vZ' );
define( 'LOGGED_IN_SALT',   'jEefogx)fWvtW`_T>v}%cr/*:o_MXh<txWl5*3BhQ!hrC1U#>YRd_OzcL8w1]CrT' );
define( 'NONCE_SALT',       ',IW{?: )-;;.&3-5N0W59`Rs%h.K_R{2(NP*iZyrpLPVG9B`6Fu,wC)PK:T:@A] ' );

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
