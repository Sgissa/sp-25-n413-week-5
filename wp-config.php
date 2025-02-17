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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '8-C.?_n/~B`~JKqtc_j7Z-]DJE5;GydM*`OLZ (LWrWy~<>&*So+d3f%lkpP@Ovl' );
define( 'SECURE_AUTH_KEY',   '2R1<KdI&E0^%3l1mi!o;hZ|jL~(o$+Iu?9$=j9#5PR)t_31s_T?rtzWOy&h c4^/' );
define( 'LOGGED_IN_KEY',     'PwcRE!EG*~Td1@k%asi/c8cs-a?S8k=W(pYNI_)a0XKhUu*ZI9{5_cL&HP_.heu8' );
define( 'NONCE_KEY',         'FGL3R)|d_kB0.sSapw`gE:(UcHL]TE_ui*YDR<qL$;kaF4VerWF}I;$Eu{R+Qv+5' );
define( 'AUTH_SALT',         'vB$vPG75{tZpo]d Uh:=2kKV]g$ximGr&=AHh.NR!;x9o@s[8;BXE+~K{u?S>xdH' );
define( 'SECURE_AUTH_SALT',  ' tUEr%khr|S*,&^RcenjWZf+dbKNv%S[5[yrCx:fi(,*Ca0LU,|B8niQn/jqQ_.!' );
define( 'LOGGED_IN_SALT',    'S>b9h$cJEOR)[`QNIkddh{t#Xl&X*J?Q08-sk{Vl B-LjkJ7o1}n3OAe`-@V]s{Y' );
define( 'NONCE_SALT',        'Xs`CU@uf}K<A^$166=NttZ^.)2FL;`4_Lic?x:E$1WnmrWydR:S<Sf)?:hb1~*jW' );
define( 'WP_CACHE_KEY_SALT', ':f&tGCn/0*]shO8/Z{wkggr+~W5:[{-_x,{1p@g@SAYGK%1mxO9~w`C~$D-($EH>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
