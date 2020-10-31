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
define( 'DB_NAME', 'tugastim' );

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
define( 'AUTH_KEY',         'IUlb3+_y|RT=>U$sLj_:TeCi:mw$u7l2+T<7E.l|MAy,u9DtnPqib(m~Lm4u+WxI' );
define( 'SECURE_AUTH_KEY',  '!q9#DAiAQRODHouKbMXsX~;xwiW5j.gUUm(S!Hw|DGiPQD9bnY)7v;eyj6?kgsh<' );
define( 'LOGGED_IN_KEY',    ' /(k{e=N*%zqfVOAim,^^{=P>Fq,Y($TX:3.Fx(]X.4li7+&@8.gU$IF%Y>m$6a5' );
define( 'NONCE_KEY',        ']VBYs]LQX{ ,P?R)N-MFdDcTV1B @`!KQlGd}Nq9cSH,:u#%/Ox&kt>?TC)BNI2s' );
define( 'AUTH_SALT',        'blhb;HejA7A5}euZ:mxvq$=KB7T0kYa!Ny(ec>}Xap+6TU,M-Iq;p_LD F ND*]S' );
define( 'SECURE_AUTH_SALT', '#V4a<Q*snmtN]cew0KJ|BHLQvrUfnzLMt]:1Ws6;F}=fDmn^o1oP,mJG*gWe&?g{' );
define( 'LOGGED_IN_SALT',   'aY~Cm+*VI=r$*bi[`r}j4<k<;Z[^TFS..k`/t:3yC[p]D2b;}fUpjd45dR+z[d!J' );
define( 'NONCE_SALT',       'rKuh`M_ot#=M`KB(XCJH2*[i6e>$Q<e02Rm*I;PaI=g^9Df0@I~xVBbD(Ja>LVEx' );

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
