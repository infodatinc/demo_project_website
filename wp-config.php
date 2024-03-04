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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ',ey3ewCT3hEI~z(/_[*$l+6^T3xX<yReCmdCY%~qsc/d&X}C)>CNt*+kKG=G3o]F' );
define( 'SECURE_AUTH_KEY',   '!x06U/[<HjfP?Z`8V+&.{.Os>)e:%b+q[,EAKNIhmwYd`^Bo=/^-^jnge^Xx<7!h' );
define( 'LOGGED_IN_KEY',     'S_<u4S&8aIKKT7,DKIy`SC##IGbbS_rdiXIx#x{2RkE9KNMnsRAWKzw)WCU>35c@' );
define( 'NONCE_KEY',         'Jx*Uro2bnl|ADtA[LKG=o>Or5FM[Ss+L^<M^TCHHk{/CKCk}%@rT<}Vb#b!n,Ram' );
define( 'AUTH_SALT',         'MSyU:5#,8qlcf4QabCTS DLOC0].^(|.4dpD Vy#a^7@]pxm+O}Yx?2!1`9D5sCn' );
define( 'SECURE_AUTH_SALT',  'g |,S?y49$Ldz{% ,mKQMH%Fr)C|zu[~TtY$!g^HXR|M6IcpEHjf{<WYO|sEwC )' );
define( 'LOGGED_IN_SALT',    'f2$VN/-mffe&@. :-OoFrOWj*4R~8d~ehC^I+AXY#llE{jb[5%Y%X<4%Fab1.v=i' );
define( 'NONCE_SALT',        'yvNi^LA=c|G}A0+*v|QvLl)?cfWLNjR4paWV%~ N0~Pf O2}I_)07A1JhlJjs&OO' );
define( 'WP_CACHE_KEY_SALT', 'T$DA.rKEjN=E1va?r}GtL8bhNC(<ui6g;@w0Tr8U|l>0R|>{{P(w hpEj/^Opd/&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
