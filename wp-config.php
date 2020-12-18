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
define( 'DB_NAME', 'ameerDB' );

/** MySQL database username */
define( 'DB_USER', 'ameer' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ameerkhan@2157' );

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
define( 'AUTH_KEY',         'k%].rTz;#|s5}Lhbr0D4Ta<>U187{k5q6N0dTu%U9= :8Jx_202-P[u>U-F5=h<C' );
define( 'SECURE_AUTH_KEY',  'F)|9NB`8`e[BsL 6U%k-HF)2=L[GNAo*;s-v,OPC?WVImd~K}b0j l)P3~+*WV2I' );
define( 'LOGGED_IN_KEY',    'G ,~|)XUM69woc!LmaY}Xi3I],!Hkhtx4m5/xPv5s*Ws:pF0-nz*},`s0bg|]}uh' );
define( 'NONCE_KEY',        '~AMI$=d9,2Wcd[:-n/U!]EW|b@kyIvjH%F6%4lu}|pTI^<&ND4NoWr9V^IUsBf%a' );
define( 'AUTH_SALT',        'Cp!07- e`8>|thf386#k:kPmr?5x27R%]b^`SmEH`#X2q7!ZMTv5go[`?+O-Z.!z' );
define( 'SECURE_AUTH_SALT', '/-myH~ioANV@q71hB_,f<)&6>ZgNcqy6-|G36&FLvQ>D,|5Vb((hcOj8BuaxoY43' );
define( 'LOGGED_IN_SALT',   '_QqwClKghG^f,4x8;|T5D7J(M~~BB@?{85gAIa7L1%t_u6[BXGrhEVGzYmjo)APx' );
define( 'NONCE_SALT',       'T>K)Pqj_ie{u=]L7*Z lI Mg/S0 ]el(H ?*]R@=^QQ1s^Le$b}sMZWH@Dfqc(OA' );

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
