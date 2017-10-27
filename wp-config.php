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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_gitflow_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YNnE@s+;fL50eORQ{!*!UW`Wm)+kf7ZOKlcL]VF+:Ot/>,LGC0>W!N9N2c1KwF4J');
define('SECURE_AUTH_KEY',  'DuqWF<bu=#_DHG&WWl<O/S%bu5Aofq[2t5{VbFhGdR7O)?*jEOEq^6n(03VWr0`p');
define('LOGGED_IN_KEY',    'C!]<+am:3rp1N_<oW.&{w!MR~$VPJmr{k-e-C9*++PQF6.v>`=9.iZ{*{y,l+}O-');
define('NONCE_KEY',        'b|tBU`Dxj0;%ChY i=4>6S{kYk[-3o~T:?,2gGw84-OF?N+t+!//KQ;h;b_S-a13');
define('AUTH_SALT',        '%r#(*W1;*;5Y]b,r4nNn}tNA)AN%2s[xZG)~S#qjkqMC!zPbm5wDEGTZRT9LwH_^');
define('SECURE_AUTH_SALT', '{ U=wBV0f,mdm{Tpu3}Ws3],n:XH1tCLGw#dwUW%8_=Z87d#I[Odf m~|{>.Pq*o');
define('LOGGED_IN_SALT',   'G2#{KBg%@jA~tE6W7hpO;V.70~R%jidpoF2{/uQd{W[mJZo0L#ZJ5QP)<,@46/+m');
define('NONCE_SALT',       '[_JdN~M5H.p1o[Utv`aT8)=Zd:0Ub3IvUE>BjoSMS*Gv^F(QAOy?^B^!MLhc[Ydt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
