<?php
define( 'WP_CACHE', true );
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
define( 'WPCACHEHOME', 'C:\xampp\htdocs\ttctxh\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'dbttctxh');

/** MySQL database username */
define('DB_USER', 'userttctxh');

/** MySQL database password */
define('DB_PASSWORD', 'C5hu7t~9');

/** MySQL hostname */
define('DB_HOST', '112.78.3.7');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Z-Pe7Wfc|L|ii&^pS&>Y*zu?=C||7~H/*Cv*[=@7s)K[]PLsXQL8.P-NOIFk!Uvb');
define('SECURE_AUTH_KEY',  'Y8Bcu%)/$/!ttG8<P(SFy5tK6`S!bXx`+x6,e.$6<3WpFm,(Bpkp!5alM[ae?j!i');
define('LOGGED_IN_KEY',    'SGfM(Ns%AtBMV|,do>9N@W<u;:KS6M>u0+dbvB(iFx*&TPdg<yy6gK?yk fAnt{>');
define('NONCE_KEY',        'Y^ursU_+3m0a8JLGe^@zY|m>)wz<%6>W-W*B/_;172v3@;f-o8nM5b31wan4@$Nz');
define('AUTH_SALT',        'RnIgmN@i<dm_NQrp^-60R/ =HTy|Cs+}F:_&l8d+w(]U|+[.i75?2y-2|rs3lgZ;');
define('SECURE_AUTH_SALT', '/M)$nRI_ OoiMu0>w?^IfH+(W|F>!wSt6xMfmyHmTNc5CiH0#{gOG&EQ?N&$D=2<');
define('LOGGED_IN_SALT',   'gBt`hGnms+^-rlT>;&hL|_:o?ji@Z9Tf_I-6_mAJbbc;dA;w~`@]kZKo3RaUI}-q');
define('NONCE_SALT',       '5&mH{hGix|N 3e bE=uStO 8,d)Fl.)3qrrW_JhQ2ZEsx`;%^oS094K$I1^aRmu<');

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


