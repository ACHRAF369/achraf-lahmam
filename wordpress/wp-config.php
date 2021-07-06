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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'H4h*wA5dyXdLfr-or.X1ZfD~bF8 !wS j/QWm(rO}Ov9e*hqCbhOI~5G/&hCKsjQ' );
define( 'SECURE_AUTH_KEY',  '_ z4aq5)P3!i47=x0M/2a=VIf|S^EOz-C`rrzr]$5UEx_=3n8~ a2)?@]=@;kYo|' );
define( 'LOGGED_IN_KEY',    '{=]ZSifC1 VB7` .|1x&|a&x#[ <c|>IqBDEH8Va* !H`SzdH]5Ob^ A&+iwLcG/' );
define( 'NONCE_KEY',        'Lw8/!t5~KQQ@]}r`;48eeJz96{vI6Q0h}XJv)?wc+BXqQ_cL<d6!B}wv<EeYOrCS' );
define( 'AUTH_SALT',        'Q,i/CcnX,t^9Y9CybW`hL-|s,rthNZ(qLMG$z6ixRh<+/b=F6vi3Z:`3xI$mEN_)' );
define( 'SECURE_AUTH_SALT', 'K 7Dt(Dl)vK^UE))K&q9W15o.[6GB38u2t.I=OPw952L OXw`7.>en8UNG(;[X87' );
define( 'LOGGED_IN_SALT',   'LnX*.7D2P;h0>Yy:10UIC|R1P<j<{!POq&,5TW}7MNu~]~O8CrqX[P|+,MLg9i_D' );
define( 'NONCE_SALT',       '3`>(X|eo>V` #E*us%(2OOO+GQ-i#d{uov?y`0U>}gk+5?Li#fJbj5^)he:O3B]N' );

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
