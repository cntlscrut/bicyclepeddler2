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
define('DB_NAME', 'peddler2');

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
define('AUTH_KEY',         '!*!9+/4Ck|q44j?mI7||akBvclZ@he|iT_)g>%SrI{n(5CtR7S>-+I+Y|3T:1QQ1');
define('SECURE_AUTH_KEY',  '@-x30aiRvK57Cv;O7,=[/+RJB{chanHbZ)9Fem6@=DKXJ7`ppr@-eO`--G-h9F}R');
define('LOGGED_IN_KEY',    '{v6|heiYs|CZ4&5N|wkm85VJ=%.zH^1&]1:8=!-IL#7uD-:D?f,9sdeNDaeGHt07');
define('NONCE_KEY',        'rE-]6UMQDcfLBhQIm?SFsLqC)*e|Hyhr]ta8`h44P8uZ`63LBt$H};|?5Avdq`x/');
define('AUTH_SALT',        'HS}..3`c-v:i.swnUdvA5f7/;8|=K$T>;Cwv,}2:e:C^oHbH& BRbvnb89-*ZAh8');
define('SECURE_AUTH_SALT', 'k:Qjs2[H2aC$dmY%k~F:1eX*|^#Ocl!0|K/Eae6U,+;f2DZ.%|X{VbhpcBCy`7Q)');
define('LOGGED_IN_SALT',   'kKkQo_k~z`6YXl>Rm /B/)(3sUx?>ZeCEQk]3*yRAcg3`EN_h?61R,qU>[2(uG<|');
define('NONCE_SALT',       '>w7PwJfT 0F{zz=z|f.E1pXUZ.:ACDNK^MI(EZ(!-3s`@{233t3kqD>jI@njyR8_');

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
