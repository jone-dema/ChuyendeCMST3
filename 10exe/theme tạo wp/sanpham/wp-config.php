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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sanpham' );

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
define( 'AUTH_KEY',         'q&= ?qV~@5$~xR(_;]6Ms_t_[3W>uc<NqAe`eq,:4_JTBi45KxT&<tbkk@a[SX*0' );
define( 'SECURE_AUTH_KEY',  'D)BzHC# <S;oUq Y>~K+vY#AXY[RZ#/HB`FxL2`KOWWB#tv#UU(]llz~(R^HGN;[' );
define( 'LOGGED_IN_KEY',    ' ht4>,B#n6@JtjR#XK(1p%;0aAaDPgUeQ98=*1E|.I?;T)kIVgH`bGl0Um*%cA%R' );
define( 'NONCE_KEY',        ',Z+&/I}jRLYt,^trkl]MGb#A]qC(.mfZ3~w?C1^5^~I,>xRzx2mAFXE]h$Pb?`lt' );
define( 'AUTH_SALT',        'j_Z02D_zZTYZj.2fxL+ylGK _b)nwU5O`$LrQ1I[x.-m7kd[bwpeE+1y/^`2U#W~' );
define( 'SECURE_AUTH_SALT', 'e&1-)swp1[4xbz)MT}T5g+-)aQ*V_<(8mF%2#4s%Q3De,m}XQu=dT0,$MKj(nz`g' );
define( 'LOGGED_IN_SALT',   '^(lWVnuBwbSd5U%ApfU(kpP^Ov6d*b6odUe0U2C:aTj=Of&&$hJ{>w}nAK<@KuLL' );
define( 'NONCE_SALT',       'AE7mcCY.IOcTX^}p.}76L]?p1OnM|%jApJwM_$G.ZyrW81zw<K.BRpVcx1,kt/>Z' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
