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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_regaza' );

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
define( 'AUTH_KEY',         'a6}x5Ly]Hz3-`TS}a[v*d t8ywMeln:.@5iN,&d1Y*d7/wGnWvBA3=H:O8q`;.AO' );
define( 'SECURE_AUTH_KEY',  '2Y*Fa`/}=hxcOp?i{xJEL,JO9X^!,|)m=QI@F hW:mHS-k(Yxzd6<wB1%l{]@,d>' );
define( 'LOGGED_IN_KEY',    'Lj{@8Z/<mx)YJcL59@KZs7joka@KerTLI[6_cO/<>3!<Rjh2y|z?e[?5ATgS?~KR' );
define( 'NONCE_KEY',        'nsbH#RCMR_V[= FZrDUG|k,mvWsNwgt$0)p#ZZGf6k)Wke0a^,k?<XYTJ9^uZ&5[' );
define( 'AUTH_SALT',        'pAWLrgASY Quo12Q.:3PDf5+{^5(0443,EmRND_|hM93RrP#ndxLE %5^bCwftoT' );
define( 'SECURE_AUTH_SALT', '+%TS+79)tD$13vhrAr{PP#RQ4H%o945d:,aQ~:AtY^e~@lH.WQX;HK&oU_k.QO-A' );
define( 'LOGGED_IN_SALT',   ' 0E}VB5t2EG~gnW:HTL4H45D&0Mn RE,G`e9Qo(>0AuzNNE8/@I3LN%|S=3;I|Z=' );
define( 'NONCE_SALT',       '*n<W(t7Q8K6O0*U m5gkSeH/W]:nmNzRPI5YK[j-frMKI@/Lpa6TlOQP$,6U,z<b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rj_';

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
