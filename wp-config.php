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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'News' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'j] gq4`9khqC%H%.]wCKbjitBcstg(F<L qNV[;ai~>Ah?;:vI4Z.4S8%M@E0K`&' );
define( 'SECURE_AUTH_KEY',  'sH&aPRU=$M]{7or;6zWk,v: S5@g;4^YL/fKxf1*/N{Y<u-WD&Qyc_6@qxEYRb8Z' );
define( 'LOGGED_IN_KEY',    '+R3hcz8{n{N}>vb[A57,I2vyEzGTr IJTSTBgZ5Y*hAT,YfDBax+4EB|gqsr0gcm' );
define( 'NONCE_KEY',        'TLnw*U%l:(R#JfbjYj@|1q+NW5_i99I!_@=d=/kYS@#;8Rg~q}6>?F?sOpB4(F7e' );
define( 'AUTH_SALT',        'z}mwJxEN3LYpL`_*=U#e)m_8I3Lrcz8}Qxj4b==a:]02dQPXWmS^SaG3eIc@OOO`' );
define( 'SECURE_AUTH_SALT', 'O!cnXrvGM+KCa#Y@+5C0-!]kLV7$kX]{-NZ yN7DR&e!El}#dF5St>O|1)u!a,o=' );
define( 'LOGGED_IN_SALT',   '5LHf3[9c:m>Dk=x$?#<|1(?]S6+JN-P`[O>YcS 3v`KHV(2F+JQ-3u8gDBsq  o_' );
define( 'NONCE_SALT',       '&{eAY1LwuG(Th>k/ wV6RQ| 9.+[w$YCq^~YqHc$c%n:lZpz{`ROgh}e$HN0O_dT' );

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
