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
define( 'DB_NAME', 'ecommlab' );

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
define( 'AUTH_KEY',         '$]D9-$PC;rT` r44*`Zj{CzSxg .qnQ.XkAq]~RsoC.?,b2J,6YWJYIbDmCZ)}QA' );
define( 'SECURE_AUTH_KEY',  'nU(${-6yCowh1L du^D@n=lE3>[TNjXxg=GgR>~.Cg+X~hUqt#YR,+hK:,5=PbU@' );
define( 'LOGGED_IN_KEY',    'a1]9`NWuekADu7;[i$^?/D6zdzCYY*uZ^Ek3;t?pQgA{ zcg%SxaVjSoR78MpHEV' );
define( 'NONCE_KEY',        '+EMW}o=tz@7X|?jk2CmGM.4xI+P+-#)}^5fLuEM7>`ISH8~aaL</i}-?2TZI$I0=' );
define( 'AUTH_SALT',        'O8y-Lu^ocn:_&RNQY(Mqm#+mxaZV@ V>gpcXZKHt~UJ77(Rs$3k.VX-aV3+aw5`>' );
define( 'SECURE_AUTH_SALT', '{cW6<;Lx?+b$wLw~=;dkQOhXvxVlQOX,;AXu{xFnWniV.lVOm@|88qko?2Efyi:m' );
define( 'LOGGED_IN_SALT',   ']0jKY~$!fbjH9(hGYR[H.o}xQJMxF1efBX0=U{qc{t6(R[)}.S,;q|*9s|:O|AiH' );
define( 'NONCE_SALT',       '5<4q>@cQEkN8v2!]~1D(6vCXZHfjqHPy(~SO.0-n[y -U6ZvPgLtsJG1.2ay/O?{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lab_';

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
