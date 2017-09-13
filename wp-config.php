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
define('AUTH_KEY',         'Ek;tN@DD`&zAW ;TrZOx};eL*0CO,lx[kIG`c.F6fgQ-dTvMGwQ0wXc{Ua({GP3o');
define('SECURE_AUTH_KEY',  'e)(1^<U5cDqwfnL`c*:Dx`SA_$e_-{ZX5+-a:-w+/U&pK.5Rv{vTiDYUl#),}7xA');
define('LOGGED_IN_KEY',    '3J+[t=E_cP>QP@.cupxL:/7d7cyV%X&ZO5JE#+BB8R@U5{9 `1xf0)Ww/vfpt,&8');
define('NONCE_KEY',        'XlW[k8%[+D#!M$hG{B@5]xvO#:Wr%~Txdq|_/D1sDYYT:^fD_BIo>HUYV88)Ji:a');
define('AUTH_SALT',        'sa3sqtK^gNhMz`B3f I?o{BoJ $PeTu>+7HaY]#t>vA$YN.W9jM#fL`^H-jHk6+L');
define('SECURE_AUTH_SALT', '8fzL8Zo7YKrlK3?5/E$xc[gSDyIi^$w%8gvK-Q%Ow<&tt<W|a6F[we5/1dn[|`[6');
define('LOGGED_IN_SALT',   'o:VgSk]chddz<Nqz|JuZmU}OEfFb(sL^Y}rMk~XuEA:sMtB9=C.V)VF&ytuZg<y=');
define('NONCE_SALT',       '*(;^<5EAO5H>#IK8{=G-,3.m(}pZEEe>bRMEDA9:[zinC.$Re5R_EEOdB1Zo7v1L');

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
