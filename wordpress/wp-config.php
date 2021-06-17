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

// ** FS METHOD
define('FS_METHOD', 'direct');



// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '64u%_h RSffI-elh ^zM76/xA%Y71GU:XLk+lvjR{!<8L_-G[,4X(5in@A134L%R' );
define( 'SECURE_AUTH_KEY',  '1bONQu2g!a{`mJ}G<-(,r=B,[+@JD$pzKOs:c9VAstw1j!$[ZWvHV8)EGTW4se|%' );
define( 'LOGGED_IN_KEY',    '@B$]eaAY$)+WT6ko:9JqTpwh-dT}Z T1d7<rpJ7jY6hk![*:q-aNf5T@Ny/[Oh|`' );
define( 'NONCE_KEY',        '0(g{<iT)vn`4VKDUDGY9|SdYC>bk@T|kFdD]=D%o3sJS=3(ML?oQha]JWZj~tijT' );
define( 'AUTH_SALT',        'fOz;QKFs`N*jtGn^O/}wP$%Mkh,i}jm=#L*Ui 6y$#%:6ND3@!#]P1M,4SN`S!k:' );
define( 'SECURE_AUTH_SALT', '@F#>uj3@pY|]PLv~!3ftFBK5-aWQr_Zh#L!HEjujdB;Un0}~+P>yM5?*[GQ^p3mp' );
define( 'LOGGED_IN_SALT',   '!i.;f5|?A7/N/Oig.qgCpGtnwfZq4^{G{)$<&}tWM8{b4MUb>5q:oIbeB%8pO^Y_' );
define( 'NONCE_SALT',       'g$7qc95ji&m65@{X<SGAn)*9&hGR]p/3UE0Dfw-nrGj/+z}fw9}<P>h2Inbs!ZPL' );

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
