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
define( 'DB_NAME', 'test-wp-local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9Mkt/L_ZehKTiP@U6fo7qgk-v2C&Tu;4`PkW%~bCMK&Wlo@b>OU3B^4XVG=b*I?7' );
define( 'SECURE_AUTH_KEY',  'ZhgAy$do=MlgPm1?3powN47x<k>Gpqq{)wer@ue0Q)c]t}`V7pjol>JOR6R{sA7o' );
define( 'LOGGED_IN_KEY',    'e@Kj|Qo!O}~%c(z5!Kk)c0D?|QCrRB5Z.-]fj&:$+xsI@PysrF&.y#[XOo^sL$D>' );
define( 'NONCE_KEY',        '*XfPMm3(sDI.b.i3Yc|UOYw/?9ud`>H#q?bp]?m:9Oy9jV(PD?Zf 5:_4_xVLc*6' );
define( 'AUTH_SALT',        '3P&rE[A&]G<E#e!t>5]b!!4O&UHe8~0nJzv#|mCKA>azL$Cl/M6-yvBt^pFQ~16b' );
define( 'SECURE_AUTH_SALT', 't=8jEL29wcaC?Yxi4Fh~5e2T4%EQ#)@;k#geP/$?Ag<9C[%t.&1G; hvmHAfp1J(' );
define( 'LOGGED_IN_SALT',   'phZN$?(E8k)P#|6;&!60vFg&]3^[KBPW]s!(pJ6j8m~;(d=M% ]S9~ZsA];Z.zv|' );
define( 'NONCE_SALT',       '|]-33x[NWI;P2`]ZGU~LyyZ`rrIn.%g;(oIg<;rGJ}UdE(/aG-X`C<AqUt^o91^^' );

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
