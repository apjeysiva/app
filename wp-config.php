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
define( 'DB_NAME', 'calender' );

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
define( 'AUTH_KEY',         '2=|!deI`aecu%;J)}I7k<&I9ZGtMUYIb3Br48HIY[XxN;G4FIX$S~O$Dq+!%qRN@' );
define( 'SECURE_AUTH_KEY',  '}(b`u.dw1UH9*tGMZNmx2gA#-KwR3|3Ic2ZsN(UNv>>YmQQ$ps jTWRC>@Q`n_4.' );
define( 'LOGGED_IN_KEY',    'z$D}bRn{R^WNJ1Mmff l[PmRHQ>$/T:mim&9sg]=f$bDhW_.:gg0#$j<ETmBh KD' );
define( 'NONCE_KEY',        'F!OJ4<4y;O+J/wvE+-O[I3law+7m)pJ5)LBg3!8w?|`o#`C]S.4}xE264GGL4C6X' );
define( 'AUTH_SALT',        'N@~N(?|s<_(8Iv1UO 1-F|F(%zg(!Uyl9|,Dw>l:X)tWD5A)`&$EUL#:Zc@(f56R' );
define( 'SECURE_AUTH_SALT', 'VUBEEgiewpAUXU43P&E]2dfjt!~mlj/JGDiE.;xIs6J yznT986%Sh]&Uby+ {S6' );
define( 'LOGGED_IN_SALT',   ']#3-DC-a(9>inszJjM4rE43l0XxJ),;<G2}%gc*?%/@GWztM_9`s6g1xtT.~ECkZ' );
define( 'NONCE_SALT',       'FuzPS5FdMkr TXQ{Hkx/`V+@7a{NNFA]dKp1}vLgLk4a@MvYlQgJsa,oF~ nXp@r' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
