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
define( 'AUTH_KEY',          'u~3x[2E!)J(sVPUArgZfuJ>Jux*A}> !!qM*Z|N&=U.Mv>g`8H3csJ%Ei!QO{w3l' );
define( 'SECURE_AUTH_KEY',   '.fVE!z]OO6&d6T,lDebd&;+vS|kQDa9y-9q-LA[oez34^?4,=rgoOfqOn[gp{j;k' );
define( 'LOGGED_IN_KEY',     'T=BcH%$#N,f:)>/1#wRDd)0fDe3H:lcmPj6%PVf/n#F|U1^,-An|$<;HTd4Wzr%?' );
define( 'NONCE_KEY',         '4ms1Cf2v3.aQ,<;KVp(G7qp&bM z$&+~v;A0J3lE,q?w90V2HKV.[Lg7xXbP$uK}' );
define( 'AUTH_SALT',         'qFz6J#d!bX2l+e$0%,[.PFJkl;`,/zN+`%-U8.AsU$Iq9DSpRLh(DBE,H,v=}A)]' );
define( 'SECURE_AUTH_SALT',  '6sD1j/qB@=%Upk0]Z::SQlGn#cUNJCGA%IE4Hll$h:h%Y^3Mu{71-owxo|Im+If8' );
define( 'LOGGED_IN_SALT',    '$o$R4UX?I4]&H7J4mT*tdFE1FpwQ|=&q89GE.j6[7X:HMRNd!$xj;}]QJ[JHNANl' );
define( 'NONCE_SALT',        ']DX1Gd<^ qPQPS$c*_YV0Muq?A`%wWpd,4Qq2qT9h47Vc[ XG -i,R9~IzP<r@r+' );
define( 'WP_CACHE_KEY_SALT', '<:eJyR}^jKVo<DoTUc<l0VX*((qLU1ug;_rBLFoX}I;Y/{E0#I@_T-Y@~v*FxDpd' );


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
