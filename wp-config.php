<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'parrandadeHarry' );

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
define( 'AUTH_KEY',         'g4u:Hlm&.+ise%[UvU:n?9.;r>k5>%8dlJTp!asnK/SwyBnZ$HL~r*Hf<Xv_I==f' );
define( 'SECURE_AUTH_KEY',  '][&@HbCP8B|UQ!_!~Tx!p9@!{Xqb4Z?F/@d56Ei]{hXHqSm$SkGsfNfz2+=}O!h%' );
define( 'LOGGED_IN_KEY',    'G|fM_e2 |0w=bdY,7J>I^.MB<*5<}?agM$|A}Ma|nU(SXw+,kv>acI$s,6jB<e9R' );
define( 'NONCE_KEY',        '3LyU&x([uLR$u/aG$(~9LA.T0=p6ud)vRU!b;F7g  ,Z_w6!?BO,tD&/ENOkXLJQ' );
define( 'AUTH_SALT',        'L=C]Gow[P PBT6M{^B/KdO^Q|t[-.Q?c.7-?{Ompz:nzW[4Nt^J~t< v@%rFt{7;' );
define( 'SECURE_AUTH_SALT', 'e7?Ds PEmh]au#Z.Gx5R+~06f29?t{R@@&l{H-,xYcS]l.oE_FM(!ooGptz>Ga1Y' );
define( 'LOGGED_IN_SALT',   '<2[ DKQC$S|JBGzs)6.``a1<~;&@$oKBeU-^p}G4s#[]^46-mJ%)0u&xbpR2~14@' );
define( 'NONCE_SALT',       '4I-a$KVd}K])P!~:|8}awe,FS*2ifC,v[vly61QK@kkcbmS,=8j%]_140~_MrZ.H' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
