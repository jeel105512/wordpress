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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressredo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'KYF-b~ )rq#KO)xf8qpB6@9IIC]0lUzAy1~3^[`z3./i1,80x`v U1eQ<$[&[Spe' );
define( 'SECURE_AUTH_KEY',  'HAy[$~h&U|=J:9g1fC;M6%Yo0T4{q$ubEnGD]]$8Wavz?SuK!)|cLAiBo]=W^6&$' );
define( 'LOGGED_IN_KEY',    'd)=/+_Loj&Zy{(x_1]aBRD96=O!5M5ok|Ejbr7Xz)tBKmPc`8_qfmF/9txgG$1tX' );
define( 'NONCE_KEY',        '!MU)S.iFw @98x}+u|*xk<b_j2F]$Xk~A?ZZ)JGN,yeyQPNl&hX4S._ lB[8P_wf' );
define( 'AUTH_SALT',        '3 IN+1!/I-5#A7-YvrF3G&hn`R%V2NGX1f~N6I;e#@^|DySV~St/-.!-3sH7,dFX' );
define( 'SECURE_AUTH_SALT', 'gBh:4ITzf8r6CSJDdZDhB+Ls1g%MY-Y41w0GdH}^$T^YRH8&^}<kE_O)>oEh`kQ)' );
define( 'LOGGED_IN_SALT',   'Mts2wO(H2?`QY9?$C|sg)}eQj8H#o/N H:;H@0E3{{/Lz1uMoOk>DS4`fet;CmO8' );
define( 'NONCE_SALT',       'FEwRQR]VM*?Gz|Xwk`QESOMm?Uf!5VU#M=u21I0$rA`+0AFpH^eE3@mSuiwZ0`a[' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
