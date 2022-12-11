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
define( 'DB_NAME', 'minoxidi_wp262' );

/** MySQL database username */
define( 'DB_USER', 'minoxidi_wp262' );

/** MySQL database password */
define( 'DB_PASSWORD', '023[P3S(2p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'ww3ibgc9ku5glgobe0dozsv5ddgvtza3c2ddhal8p0edt6rfdwznj1epjyld75tn' );
define( 'SECURE_AUTH_KEY',  'myb9hnksj1jpvbiyqmnfwjqnsdm2juotxyxjkinzrr2zkvppwa1yewrmfytmmmnu' );
define( 'LOGGED_IN_KEY',    '1imr7uxuq51nydnm2igmnrh3poo0zvskpjyiwu5hevmn2yfefteglxejd9aacchj' );
define( 'NONCE_KEY',        'tbkhrd0yu9t0zhktpprkshyfcakneip4wlh6teqgwlwey1obbaskisp5fpcatjgt' );
define( 'AUTH_SALT',        'rmfbuz55u7mvovnkiq9tks9dli06kk1xn5gjtshnful4hzppz0uejukgppozj41u' );
define( 'SECURE_AUTH_SALT', 'dpnmc34ffapnjjdiyvpi7mevkvkvnudikh3pe9lljdie66ldz6auxplm6b7ysqjj' );
define( 'LOGGED_IN_SALT',   'ynqhgxk0lo3bawogil0cm20opipv5l44qlrphfjponvg6hzp3eesx51t0fpr4uf9' );
define( 'NONCE_SALT',       'wnyijynih5nsnkktcd8aeyvqke4z7lwzsxu6gulgrtl4txncdphlqqm0umo748ih' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp7n_';

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