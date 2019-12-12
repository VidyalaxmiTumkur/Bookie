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
define( 'DB_NAME', 'wordpressProject' );

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
define( 'AUTH_KEY',         '-G]AazG@S{*@|h<Ft##ApBKiWSRcCj,0/EKnHv#ElU}q:d}od3Ga0 ^CMC|xg5;;' );
define( 'SECURE_AUTH_KEY',  'UFOY%74)Uk@.$L!Rr{h6T#NUv9o7f%m`>dZGYV{qiFhR(GJt={4b[b:uVg_lKw<y' );
define( 'LOGGED_IN_KEY',    'jZ:kVjxbLE#RfCuL.YmaGCp?Sr/Vr 1ZnyW]leM2ubiW|xo@:,)l;qO#3W+Jk[$a' );
define( 'NONCE_KEY',        'tMOw)ihADhdu|E3[X-k{hJd 4-%ceV$ot/ZzZT.EjUqREHb!Mv0lwpUHVMwl]$*W' );
define( 'AUTH_SALT',        '}Bx)1]Y~y{-wYPW<a=Dq]V#yPxqGAn^P:[H+M@TgBDR/U{=T1aLn{Rh$^mYvA,S5' );
define( 'SECURE_AUTH_SALT', '-}h9?y;iYb=b-Zsh*_]Vv6:oTz(G6m]36Irvkap5}6O>`j$0rC8E?1vo}IFmkQy=' );
define( 'LOGGED_IN_SALT',   '+3xixDFfoS`?AP%}-/`iEkejR)_bRY.E(Dk9V5tYs 3.8PY)QfD/o//~Dq#UV/m&' );
define( 'NONCE_SALT',       'I UPAg!V=DZk!{8#mzcVsILk,zFDT2VMg_|~9nZ_Ot9F9CE[|9X//hx_Fd@H$?_$' );

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
