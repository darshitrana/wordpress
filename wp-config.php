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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '`voZL$.;8PBQ[zh}#2Kbx5rp$Gp7${ *YzF874G<.FZz=&jyY{fA4Y|BeRn{u?/Y');
define('SECURE_AUTH_KEY',  '7E=AZ#cixz&p[l^O|E5D|V7 m.$TGHR_ic*.HP0`+IqGczVP?UKzUU{:9WBh4D_1');
define('LOGGED_IN_KEY',    't!6-$,RZ@?MFb~.XO$nIWCZw/w&/0#<bMAi3O!:6y@ISrh8Lc;DdLQfO~V}jhc[M');
define('NONCE_KEY',        '~h$<b9A.`j=, U%x<RV qst?OFZ$/cZo]Y>ZOuBAk_e6.7&w78{]+OPC=Lw)/m`p');
define('AUTH_SALT',        'lU [XFwG( V,w_?CBQFk(=Iuy8}IV_C8+z:8Y=$^+zOJU&uL{nEB_k>fE5~J[!8K');
define('SECURE_AUTH_SALT', ',qdWioW!sb4JT+|0f]!pUyOvqXK(il1V9`U?&=lH8cTl8^3*nr6B}bh83V0At=do');
define('LOGGED_IN_SALT',   '-4bV+mL3PU#x2OMqO843.ZH>AwonbQKco&6a 8:Y4#[yT[%G_3HPh+J.w#F@OQI ');
define('NONCE_SALT',       '32*WoK/hkm;c;%D8S+LsED-;m}f;#IG`E?U_PsJ[/PA73JRHFJJRA?6LX8Pd )W5');

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
