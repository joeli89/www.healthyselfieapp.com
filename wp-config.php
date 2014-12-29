<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'healthyselfie');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'B[) VZ ~k@A>O&=tIXaX-DBP<jAZE|BVB3*un-jy!~YPlbN_mlabeCu(WRUU 0Y#');
define('SECURE_AUTH_KEY',  's>+KR4BL<0QT)Q84Tk>krc<y*,GVCu&+ay$OnK70KL]AeNmnm!T=mW7jvo5Yr1]-');
define('LOGGED_IN_KEY',    'EFkVuM;CLf96/ylY<(9_9TQrRm[y>C0Poq~DVR,YLjkB=mS`==wB1AQR]lLVh3.a');
define('NONCE_KEY',        'P3y-#MT+S0?9*PY5t&rnaeW[<b=H0EO%L9<Vwm?Y2p~Z?}v^.yGwZ)CGKhNCs:RX');
define('AUTH_SALT',        '3T%})8qtD4_aQ*m{w80=X#4s#1i}-Y-b^jY@|+]Y;|/<BJW9VDIo+1T<I6L;+0-s');
define('SECURE_AUTH_SALT', 'aL h^IN8O+(o0do/gXlT)%Se|f1&ha>(g#=+-]V3?b.[E c5L#^4NFrM2+FC6a/K');
define('LOGGED_IN_SALT',   'dq|io)z:1^K$`nd@Q??ygCSNxp-lqu%XvGwK)9.p_6ee];R*]C&lfkc0$+r`%Tko');
define('NONCE_SALT',       'yD.e;) uo3|w: 8H79[=J@$-6aYmOple_,%>K=>h?W4Z:8}kFk*|Em+0{OyKFpVA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
