<?php
define( 'WP_CACHE', false ); // Simple Cache
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
define('DB_NAME', 'webfreakers-old');
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
define('AUTH_KEY',         'V2`w+J5bV65#iT,LHNh1.Y=HC+4~ZT2v58!Itotm,y`w@PVaz@RD-{CS~wM#j<[W');
define('SECURE_AUTH_KEY',  '-6z/Ih!![z#chN#2?sIE&5mQZ:<0dXSeC#1x~#C*<TjzwM9+6YaE`!21RkrZen9{');
define('LOGGED_IN_KEY',    'unG{R4Pbn(|(TM&({mD4T+&J/spae)xU#yj}yscG*A^X`wNA_ua:0`l]-ly6DyH@');
define('NONCE_KEY',        ']+Xbftbfc0&qqcNy.8{ana:3eU^(-&&%KDOUP?RhJDC-kC=^}ki%-,L F t^~i?~');
define('AUTH_SALT',        'rZqQdeQm${:YaF#Rt,+u@&d?7H9:kD^D=/iIGD,USG;=8$rg76|}j/r`r[4N8%{<');
define('SECURE_AUTH_SALT', 'd+  m#6t#g>pVt8C]qN<(s)Ej21}ggf{*rFcq<L+izF)yq}x=T|2n$$ULptM2u@y');
define('LOGGED_IN_SALT',   'sC>2Bpl7yQB/]+MqI=p?{hNdCO7C3GeYM/-nzKiY^yx=9u31$[5V_]NORtvl81-%');
define('NONCE_SALT',       'x]{Gdl)#k+_v>]e}D(MOxWDmkRK Zuj8,o?4z8Ir#K5V0qQT^b-{ck<RGjekr?6s');
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