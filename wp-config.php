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
define( 'DB_NAME', 'hasib' );

/** MySQL database username */
define( 'DB_USER', 'zaman' );

/** MySQL database password */
define( 'DB_PASSWORD', '0)i-3ZadLep9c[vN' );

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
define( 'AUTH_KEY',         'oP9?_w93l[54t+@7:e0i_F.ImH22(6::!fr|nY#aa5EcI@T{V<hw2ArX#b1Kg.^!' );
define( 'SECURE_AUTH_KEY',  'gR0x.$7InClooCO~bF,!r%e]5rPI[k_9xau1o JHdn)|OC8;KWKGhbBwd=8J/~fz' );
define( 'LOGGED_IN_KEY',    'Y_RC@W;eL*DNqYtcdr+Va/z?[?O%WJF[>)%&byf+m]YjWtm;BsS>wiL7*Q9?8W1s' );
define( 'NONCE_KEY',        'iPsB>Zs~]hiklX$^|y(+(Q=_kdF80.Om<]oL/X1nqa?:y88C^Z6),`8BV8MirS#L' );
define( 'AUTH_SALT',        'm9sn=zmu4s;VW7NB9*oxZLtYdV`>%;Ty<w[zlf%rq]1BB^85/Ea!` P6l1}Yx(~p' );
define( 'SECURE_AUTH_SALT', 'WjOz5FC&$IPVoQ^(,mF|pQ?4P0cdi/;1*Vl&FROW4)scxkt$=.jIa/o3l?4nmARG' );
define( 'LOGGED_IN_SALT',   'n6`*vjj74b:dL0O;v+C8g5Bd~Ug|]aDFl2BQWHm?t}+$=v;uyIT*N0@t=!4RFXz@' );
define( 'NONCE_SALT',       'dxZ&?_ZiS~M7XHT^$.Yn2Bzk^j!FQ+&0fQ+y</zrNo~<&|,y1`6,VV<ohR|Z^CXB' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'he_';

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
