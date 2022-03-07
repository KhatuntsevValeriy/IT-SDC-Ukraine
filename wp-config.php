<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'lybysto1_bd_nix' );

/** MySQL database username */
define( 'DB_USER', 'lybysto1_nixuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '=z+VI1{M;-YM' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '5PyHR&6{PXwy9>6s!i.FP>Lu<MtS_5|QgK&3Qg?=Ls~NFY?4)-,fm#;QyGtX(vNd' );
define( 'SECURE_AUTH_KEY',  '3rxqd7j9f[mVz<EbUb}+8Ps/&X9!7i{P&Zs]}q<V4um`VChlV/[0@g4k:*r~RxB,' );
define( 'LOGGED_IN_KEY',    '#I;.95wQu[<^|*Z.p9(e~0a_#OVT@c(tt|2H4,p6?nNN zL`<|-qJ2y)jMD-=S.v' );
define( 'NONCE_KEY',        ' F1wIQ6T=V~{p_9O{@Yg W#7UD^=1b{SQb58*xjbb&zq&p|).nEo QvHOp/W=zG2' );
define( 'AUTH_SALT',        'cX=|?7Q;d6u; +zztFY<cyG;b6Vw**exjD+nJayj#-)2w+;][}`p` eWu9a%zTiz' );
define( 'SECURE_AUTH_SALT', 'Rm#%fyw*ck-n 2|0pfJM/lr9$XKEZ8:[&] !7^w!4Cwl;}]FGC$VNw,6r%1DX=MI' );
define( 'LOGGED_IN_SALT',   '_onl`ILJ,Df8KsFh{|/NSM8k@{(Un!EVGb8u7#;MSe`Tg;NY5~H?RzdgK|I_]omS' );
define( 'NONCE_SALT',       'G$Wp{a03/q/u[nt00xGOQWC%z]QhW~V3d(w*iKM)IQzRcw,ZjV@,k1hyImMo5p`-' );

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
