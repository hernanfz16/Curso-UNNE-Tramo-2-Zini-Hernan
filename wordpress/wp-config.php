<?php

// BEGIN iThemes Security - No modifiques ni borres esta línea
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Desactivar editor de archivos - Seguridad > Ajustes > Ajustes WordPress > Editor de archivos
// END iThemes Security - No modifiques ni borres esta línea

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'hernanfz_tienda' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Lfx5_3(PuK-m{g7[aeBJ/rPeR_f5q3)EcPCla@WMb&!W.R]*Fp(4:$H;p`Z?CH-/' );
define( 'SECURE_AUTH_KEY',  '>dS)I+Q!_?NEd*{;DzhCy6j8hwkBxufv1r[<jrqNC/1fp594WqX)W<=lK@m_J,]B' );
define( 'LOGGED_IN_KEY',    ' MR(Ke[0XW+tvUOi)}uv=O8:QmTwF5WkkR?eMEy+q?Tm$m0L%v% BKn$}-nnJ=1$' );
define( 'NONCE_KEY',        'aMXX-_r_yAsYDBo5;~Hu:!!kv%l,ns,{#+nzF^]5}BBhzQ~<2/{8~ :D#4-x!d#[' );
define( 'AUTH_SALT',        'S8t24O8f_JLtpwi,f.6E?;O)MJ-u)@rc)hox+];bT|:J,/(Zy_G7TI@L|2tqUW#a' );
define( 'SECURE_AUTH_SALT', '2cT>Q.Ebk<j lSIYZT@>uPh)VsTDQ`9o%-atpLMI?&r-QJ7K &m!w#h8myQ_sHdN' );
define( 'LOGGED_IN_SALT',   'hf?IuKDGTi-l^~05%$j)P1w}gve)oa$zKTekMYRw_GxS&uqyCg*RpC,)[} Xo lg' );
define( 'NONCE_SALT',       'UG?*`m>sZunUPgA3~KQ;=3Am|Gl+*}zm`^iG5fIMJV6<wRhQRo9tg?6W9%QX;]))' );

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
