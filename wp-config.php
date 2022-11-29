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
define( 'DB_NAME', 'tema' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'WP_AUTO_UPDATE_CORE', false );


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
define( 'AUTH_KEY',         'XH`+^P0w.+88h(}mRslur+z8#[5{-9:[j5a}bc[5_yegRFh6A6DtHHjEInjtgrC|' );
define( 'SECURE_AUTH_KEY',  'A=]0.p#Cr;~8Wk3qwa8+*fD2Udq[H6^6As=yS$D,3FT6*-[22Gw-Lx*Qs+P)9BDN' );
define( 'LOGGED_IN_KEY',    '|mhux7+3[vT=e6%lKD[BJBdPC/?EEr<fCB26-pz.->[E{9~4JI&ecg9:}m2#ljbm' );
define( 'NONCE_KEY',        'C}v`C:`@w{t]1sGsnwPXgQhr4+zYhiN;]Fi:v5_0%().|))h_1w103 _v4:IKvXN' );
define( 'AUTH_SALT',        'Ayac_~Oa-fuUtIT:R`LOcCFy73uzP+2J5U<OHwa!*aw!ynxIz+4WK=C2J2nf7;}]' );
define( 'SECURE_AUTH_SALT', 'gxWty|Y_|<-WXg[{L0iZu,UIj@0AO!M-n{_u87e8J1c}6&^S:#R66A+v`p|gHWMa' );
define( 'LOGGED_IN_SALT',   'Z.nnk`=#zdKt,t{_1mF-twg :NJBucIWy&51H`8WH(N{pGi=6#Je;Xd,7f xvq.H' );
define( 'NONCE_SALT',       '[7-*4=WvRKo,}KTV ]B|ZttGaI78@16NBi#Ssul;v;BPa((Wp&hS fs]KnV%(aRg' );

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
