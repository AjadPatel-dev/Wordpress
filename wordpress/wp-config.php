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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_database' );

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
define( 'AUTH_KEY',         '`I8*BJwb?Ou=.&L7tVqzhmv<cy*/;JV-M~5W&1G^KkS|e5-;xGQsCAmC }S[Zn;{' );
define( 'SECURE_AUTH_KEY',  '>Qixsa[dlkYfCn3Iua14[)kMS>w<K?U6fMFKjOZsL}8,f`.`a-`~8y:@u~ApIg.r' );
define( 'LOGGED_IN_KEY',    'J&&?aL1T%+qjj_W}/SbSk`Z6ZTN<0wBad$sqzYlG4qH|mr*E)lAnvwE%1*CkkliN' );
define( 'NONCE_KEY',        'kQwwXQy*t_V?MJ}7BFeCRptF!a@@T(~$2-%6]si K2qe.HKm7}S1)~_TwX(|04zv' );
define( 'AUTH_SALT',        '{y6]SVt VdELTYJ9IC,>q QzBykPzNd]V7sfAZQq6-}a5G^}SMS_YSdm!D,5V%yN' );
define( 'SECURE_AUTH_SALT', 'HGo#zi(E+K~%>wd[hph7/N}BNwm|*a_jnpJ5#YB.Rxq^16rYnm@3#$AEX vwjb~`' );
define( 'LOGGED_IN_SALT',   ',/sVTgzjv~1<hTV5R8-H9?xtLXrj1hF!V;7[-*dzBp~.Yzwt:}qyd8rJtp)JURNp' );
define( 'NONCE_SALT',       '!qw6Q+>ai0tZ92]LE,-K(=3-& Tz7{l$R:GCm6+ia@_H3(rFG]3rF9G/hvWpA~OE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ajad';

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
