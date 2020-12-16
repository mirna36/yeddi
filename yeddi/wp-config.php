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
define( 'DB_NAME', 'yeddi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'F`OqrF@}e+!:O6~KiK@i=tdN!!oTa)C}1m-?lTr~,PP7OMDIRMfIW!dOe`1rZhe*' );
define( 'SECURE_AUTH_KEY',  'I/&`K#R5vUkq;)ckA)(4rUxE3nq0sME446nhrH43U(?kS1-Gw]ozl;Vdp.L(cZOI' );
define( 'LOGGED_IN_KEY',    '7o>sU(/({H6T{L}L[-jy6f2%r*,qt(xjt|zbOFax(0Go6MgW-Xn81=MU_ffU:I!=' );
define( 'NONCE_KEY',        '$t;rvHIIZ&eKx41,?A1f.4SPTKs=F1r%e3 8zZ?7ZSArcE;akOUBzK3~4?]^s|S{' );
define( 'AUTH_SALT',        '9%$5At-ROZ:W7${*x@IZ5ooi8%j@.0!~<g*S2fq-RNV^l:24s^]rac ALO$0Dy@,' );
define( 'SECURE_AUTH_SALT', 'GoB,mY)$ws+G)0CI&M~28<g1`<r `R`mzBBH#>;M)u~J;s,upK:Lr[{`un@/6g9W' );
define( 'LOGGED_IN_SALT',   'fuUek`yQWz5iw$:E$*w237lrx_%ly716LZ>ue<Ac0+?3VYaEw7Ad :mC4nJ>^pk2' );
define( 'NONCE_SALT',       ',YQ;bdShVJR4xE8OguOZ9kE@gKeg,&t )T=K-Z#0f]/ngRc1~b^(-v#3B?gmrm?A' );

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
