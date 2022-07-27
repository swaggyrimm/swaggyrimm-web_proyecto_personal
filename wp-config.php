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
define( 'DB_NAME', 'personal_web_proyect' );

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
define( 'AUTH_KEY',         '$A~W)0pKtQ.o,pRkX3=JPyzL>4xR-_ho<4]Py$S_&S*m_xA>;1J`V]]c[j?PJ)*J' );
define( 'SECURE_AUTH_KEY',  '<q1<*CEy+FsBZ2#3GTK]gx/BZ*>fSqZ!0e02AZ}M8~QT}M`Nb;d`R*DB^=>@E6:i' );
define( 'LOGGED_IN_KEY',    'z6(;k)z>hd-~qKsAXVsOmM43wu)KN.&yb8b45)^Ic0l&1Te4m1. z@%[yeh#+r}9' );
define( 'NONCE_KEY',        'U]Xy.9`k)C74BqN~aP_Wh1cnqXg:TK0`gnLBc}F9#UWsI=lfasd.[.`E{3s`fz?T' );
define( 'AUTH_SALT',        '$%8kXo%+x:nm617W5*so}q3<4=uz>m9;_C7OBkv%3ir5z3w4C9KMt72B$*#_/KuJ' );
define( 'SECURE_AUTH_SALT', '8cH0&avC[SAd;D7Fq?~+O&w>5Ftk-q0$xT6F*K|@I[n5Z$<qF4g0S=]9G<w/jO3g' );
define( 'LOGGED_IN_SALT',   'B}n.yfRF?Rrkld|(}F<~_r}^yMDfD5R9]#9nIn7=dro9y-?2uOLSMSq+;XJmh{F8' );
define( 'NONCE_SALT',       ']%d$Nsrg,*Dq^7WeRpQX<MdL1/&Ok_y!$:o*S2)udFmCLvwqxt/)]zaqz(@Oxz?_' );

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
