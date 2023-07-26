<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u783760139_z8pgL' );

/** Database username */
define( 'DB_USER', 'u783760139_ubxKq' );

/** Database password */
define( 'DB_PASSWORD', 'ahv9nRpDEQ' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '2AY%qN6*^OfnuP;z[7Q}}(0YJlH:gh(j@c-U`d6L~@{r.U<QJdtNZxQ&iovKmNF9' );
define( 'SECURE_AUTH_KEY',   'I254xC1PI,z$VOL$lj9a7Cn;m%e=]oW2kJE8;B<GLOEY@b7UzfC. )Qui88kQeLm' );
define( 'LOGGED_IN_KEY',     'oz:*maA w4y]4=~`(AL_L9T;|G;[DUx% Qq6]F?H5VnUR~7{^#T~p&)Uy^B=V)n4' );
define( 'NONCE_KEY',         'se]zAfz,kVJfB1lKH(RNs6i09Ql}^E]@.O+(,vP&=(i-dZ7ap >559W!9J=YboFU' );
define( 'AUTH_SALT',         ']eZa!R<2W1YJ#?jy#o;xGcsM!i_CJl`mAr;|[@h~9]{:BBd}tx!y96+qA[!)TPz_' );
define( 'SECURE_AUTH_SALT',  '&{$j 2MP6oB+wI!o]<s)qrz+g.nkLE2X Ia[rqJg&V{waq,l3Df#zcs#Rcd}<HEo' );
define( 'LOGGED_IN_SALT',    'h#6F},GW#C$Te1#zB?XFz!1N*G+`Ovr6]%Gv|q3(-@E}NUgSH35iGE;eyP2n4qqe' );
define( 'NONCE_SALT',        'BD#(Z2so*a5WTZ9/@8+#18`=v^Xu+yvWuhFjuB`>:k(RXF4~~zezJNp/8gLfXs$V' );
define( 'WP_CACHE_KEY_SALT', 'P<mK5a8dF%DU;t{E8Oz{nSJc~zWM=WV?1Y!#9%E$}0vc!{}>g?c~x$JX2}51!1fQ' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
