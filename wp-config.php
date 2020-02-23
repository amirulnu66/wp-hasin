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
define( 'DB_NAME', 'wplwhh_db' );

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
define( 'AUTH_KEY',         ',f|D<Z#GAK ky,8mN_tE9|)3/X{4-ci%j}Lw}9<Jk<yKk)cn]5#aDmoWxW!oO/1k' );
define( 'SECURE_AUTH_KEY',  ';h2H`3i{J`!pp_6JX{B7pK5`kXj;_thBg4f/JmlWOIO<pJ?bg+wP`C>,r6R6OaG!' );
define( 'LOGGED_IN_KEY',    'c;B1HY 86^mPJK8L>}^QoMxT,8oV<A5yY}-$@i*Ov8VDz^^$0)WHsok7p*WzLU-n' );
define( 'NONCE_KEY',        '>LJ_B:`FQGn?%g KQUP&tm){|Mh:*E*IIpugdiIt,|k:Y^X*9eQ%MRSO}VbzPc-z' );
define( 'AUTH_SALT',        'gukvz&9qoaX$2p>[*:=0Y7+lDU,{0s<&IgdQRw{MPd;^D`0tYdbV^d[VrsV1?8aL' );
define( 'SECURE_AUTH_SALT', 'z8UK(U.3,-v/T#rL/6<QuV&AUTSJ{J[aU#:dox~Bq7gASDSeUP@Yd5n73O(O)WI-' );
define( 'LOGGED_IN_SALT',   '1m/*qR=y)S%xX5t6Xl=@%7o]9vMePG>6tb-``Fv*Rgd_{R.!Q[{](@>)ehJ&O^_3' );
define( 'NONCE_SALT',       '?umFUuFZXO.I,a~6G(xSuvC%N-J?{5oN2ErC%HVpJZBn9M1du<6~H kR.{?=L@k(' );

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
