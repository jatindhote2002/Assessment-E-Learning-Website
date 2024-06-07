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
define( 'DB_NAME', 'wordpress_jatin_website' );

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
define( 'AUTH_KEY',         'dG1;,w3uE/Bw4MTgqs9}aUGx[ep</4IwQHCA@&Z-!!6]#tS0n8IRV+iMKl;t>:AN' );
define( 'SECURE_AUTH_KEY',  '>x98[*0PEhWJ?Y5Pg%b^S*J3jK{Nxb0S@rUVOCrw~YUf$AF)MoxbiQ<ZRyAi8X,L' );
define( 'LOGGED_IN_KEY',    '; ]) yIS@Imk<OtjWiivC<9xSC^@EH0%ImG!=:g>14XPnNF0)*9?orOhC}BZ,wT~' );
define( 'NONCE_KEY',        'v8uB}^7DPDn(GcY]I]_Co`3sobPeiSlR(b*rFTK$Px_XO?_w6J<*Jw#hX!=7.%O(' );
define( 'AUTH_SALT',        '+z ^X|8)q%TTT-iIRNCnF)Mp+]xDu6@ g%Zpp82dN.xwu|LW0+/3Chi!)Ea=Ez+8' );
define( 'SECURE_AUTH_SALT', '?f(>2O%EX{U|Ew<%2&G!0$.EamoN2[]#Ut;o0F1+*Yj]T5XYzwR%[L:B7F$DuNm?' );
define( 'LOGGED_IN_SALT',   'jwZN Wn!qpIipQn~O LP-fqf6R[5N8r8)A_u}g1!6K]@Uv(vM+X-Xfqsk<f<SC-y' );
define( 'NONCE_SALT',       '}1{j-y_`wVpeS^ZvF7j__h|eX_qMDz|TB)Sv.gem<fl2Ug#%N$rzE]Q=&C4Pt&W&' );

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
