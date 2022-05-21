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
define( 'DB_NAME', 'engine_oil' );

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
define( 'AUTH_KEY',         'lz6.lt&m-cR;=TrDyI%~tlKiWKduxwvDX7{}G^1mxPH@;FC!r$]cVF;^7ieO(w0o' );
define( 'SECURE_AUTH_KEY',  '!#df[04} EN^(QM,@ 56qQ%]{n%^6{rI:4$}iQheAntpBc`jGe/EbN~^/knZ=:rj' );
define( 'LOGGED_IN_KEY',    'T55g2fNJ%8T+gUfH%.dsZ{Zvi}K&@~$Sjq?3:[epgpGRTdbs43NU{3cBkK)nHO+B' );
define( 'NONCE_KEY',        'z%*0oF!Ly2MTP3l/Ldy9utH(zUz{_{eMHYko=mAi`MYs`mI_<qw&ND-B~ZEG)G(8' );
define( 'AUTH_SALT',        'L ty7^nTa}VcgeH<DGZ1Dd|.NGMiQlIu$G)3Zq)1w$lm gr~p6p@a0yE`LgDO@Pv' );
define( 'SECURE_AUTH_SALT', 'i.vjBW:]IIK_]lcB;,D6374`%1KHKVV/QH6R<067]`rx ;[3;|Zr6=z<6}d)FUYl' );
define( 'LOGGED_IN_SALT',   'l8A;%K<z3VbOOr~y:p(r#C YTH_l[TI,d?|]N{2wXch(%tWkZhSWK1Id;_WNB]Rs' );
define( 'NONCE_SALT',       'Og o^5>$Q<sbH$4wk{GQVa@#*b&6}ku8|mT>Og(aRu8&1Kf0wD20ua#z+k?Y`?N7' );

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
