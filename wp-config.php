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
define( 'DB_NAME', 'myblog' );

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
define( 'AUTH_KEY',         'Ib:iAs<zb|zY/i| _@haHgzAZ:,f[1@5ucgweF>-UrE%h2(~XQvuJQ3,Lr6-R8mE' );
define( 'SECURE_AUTH_KEY',  '4#_D!#&#CQn$!CAQ[oG)Xc/0Ne:%GsKWm$Htgn-N&@nYKbp#QAvP3W,KgS]K?-^B' );
define( 'LOGGED_IN_KEY',    '_hqP{ZlX~AjvQeoWsJ%EZq$65e`@).`z?l$F&_m`0@J83 #eB_or89C~ORF_%q<^' );
define( 'NONCE_KEY',        '<xNGSv[<IUdG^vP1we4Ul5<+U8o gZ7P%},3ks~hCfA(c#Splr=8@:0DbQeuxLwp' );
define( 'AUTH_SALT',        'jLBlFBLxobYz+i}bP[:,o*~m oH0zMgUL CqdYSH?PJLn_@G4;(VncMULiUZA}g4' );
define( 'SECURE_AUTH_SALT', '#AbE/RQbil-+4ve(Oi4gK]$UgtSGzaX!h[+dLuQ]4e7fR r|F+e6O^v8)d7:~JA3' );
define( 'LOGGED_IN_SALT',   'E_)^4#9 89,U.$@1ZiHIvuC(!kr^>MyC%ZQ@}|anhV^XmzJ}fbD]#ugCC38.ntmU' );
define( 'NONCE_SALT',       'ycIh?B*`P+9^lYdO=(*}N{qQV&380avzf<sDQmxwr%wy]ZyW71;/,&[IMCau}Mjk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'my_';

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
