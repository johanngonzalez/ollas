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
define( 'DB_NAME', 'megapromoollasRE8VCgm5' );

/** MySQL database username */
define( 'DB_USER', 'G4LOQuQRdVNS1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EzUVJ3gX0u0mC7q5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Define the environment development or production **/
define('WP_ENV', 'development');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '$^w&`w;|b%ebE[Rp_AD|;!oMgWmQ&g(223@2s}/hESktjUTj~*?J[N&LQ/V7p^NZ' );
define( 'SECURE_AUTH_KEY',   '/QNlW}v|u#9XVihkr7?63i}.!}=~=gh}t98}Yfx!S?7GM Uv]C-GaV:+M,,f1O^W' );
define( 'LOGGED_IN_KEY',     '-E}Mw`XNk[.7:Bx)IJVdztl.VQ_d{aq+2!%~5}Az|S{dj#6h;tpp4=s+cZ8EQ< ?' );
define( 'NONCE_KEY',         'r$DO|21yE7=d X|.<G)p2nn:N=J;;hn`_}yWiC[:pHB+.AjOqRWIHi80qjzZAPL/' );
define( 'AUTH_SALT',         's-`UcUHqP)|#6AK*q4;It%?$6 8wFo;5]Z4<+OWFBE:90}?5&QictBl[T=U`D4`t' );
define( 'SECURE_AUTH_SALT',  'R1uK:8h<kNG,e6;$y>bO&^$l10&UCi/.ucWht^+~.SWzQb|d])@.an*Kp V}ut.D' );
define( 'LOGGED_IN_SALT',    '2EoEl< /d(5biG r5ts7~w)lDJZ{0sZJ$wy3qr0$I~~=Lr2><8AF`nE~{x9e/DzK' );
define( 'NONCE_SALT',        'qCdQuw#!~ak|U6^{dDKfwuUQ[1QlNbm+(;l|$f^RJ2CE;{c(dGf:BzcNMX%mfG[/' );
define( 'WP_CACHE_KEY_SALT', 'Tx^i9S0|yk%ygW|Jvp~EmpOPF8/C39z8X1$pPB9*nK!i`~D)T(jFJJa|5RmT%Kh/' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_8ae3a4382a_';


/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
