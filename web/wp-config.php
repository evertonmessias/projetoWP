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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projetowp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'efc;2505xx' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Afv5qZhBHua:$$5bgMR4czP4h@ Hhi)o#VmFB&.q-l^>I;@XJsI3f>{icybIS|g.' );
define( 'SECURE_AUTH_KEY',  'ek<$,Uq>9WKWUb/uid@rvWVI1kfQB1M4odn4xm+ALcQ oL|X M1-Qv#%cH$T21%~' );
define( 'LOGGED_IN_KEY',    'C$g/tJ1yJ <L6?QuasQuGoOa$6ihXwZQS_hxQ71)!,-2b6| #Fk%g07@lt{;Rk-W' );
define( 'NONCE_KEY',        'i dU#rlf]1~NK%)l.dsu1$aR/]8S&cF :8f6/K^+kt$Cq9NIcj>P2uv*EsEXmOX8' );
define( 'AUTH_SALT',        'lwi/b7iEWdnds|V~g!%HwC7+#;)YxsriV$[c+`m{Ba<`0pTW{ow1&j}s@92rGns]' );
define( 'SECURE_AUTH_SALT', 'NeGHuG@XvA!>i&h[;{eR1%RDxJ6~:7b ]]y^d;btE%;?I5kRGgQ);_AWJFLVYPv%' );
define( 'LOGGED_IN_SALT',   '35|[=wEhSmqbHz@5_8eYjb&ErTB.fIKoT!H2)nVJ7UIoRT;e)wwqi|=2iG*kjO)+' );
define( 'NONCE_SALT',       'VS]7 iHIDQE&xqh~+-:z*<33pqq5Yqm@S2TET~LP~NNI%ynJ^|cyhd2rVFF wN:2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
