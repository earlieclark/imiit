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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'F]?[z|>,_A[YI2lyFNe@^4On)N:>IHPlsenG&Pvfhydh9DQkiFjh]mvO--=d_ +]' );
define( 'SECURE_AUTH_KEY',  'YZg7Id8Ac7ca&+)JZ=O1]LQQ]oj),rY}&Dah23,N.uw%2==8rzzsST/T{vy5TjxE' );
define( 'LOGGED_IN_KEY',    'C:*H*2^5t^FNPc?Q*_shE^C %l-Dw+7(]YAu:M-0ivaLi5)p`$U^EZ%b({Lu34.-' );
define( 'NONCE_KEY',        '_W9>Gdl?4T9n/:EInWF>b ~Rdyb2?YWY}#Ky(]?2eBu%Z86Ds}44H)s~N;`,%RQt' );
define( 'AUTH_SALT',        '$3&>^W{nQ?sS4fO0e$WQ7?,0bW=JPSM[,%ND-4y=L~exH]c4&G>r~/Z=y`I#M!mG' );
define( 'SECURE_AUTH_SALT', 'U!tI}GU&Xb>0VntK5S[4]f%Z6$N# Y-5tUaz/5`Z_~zQN9)|N3Sr/{DfE=9U+RO8' );
define( 'LOGGED_IN_SALT',   'hU1XkB,b|K#WS`(X#,jjo#Y<9QEe=1.}mqAY=A-7S4;X>=4Nx>|vG<~JY:ktb~ml' );
define( 'NONCE_SALT',       ' +T/94:1Lq(dE}85>@<9J{{nlo7+)>Y?6(IUK<s4FU2nAuL6Jt.]GC?9zgG#7+S ' );

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

define('WP_ALLOW_REPAIR', true);
