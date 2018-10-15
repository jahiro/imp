<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'mt');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'I[#cM&a[a?oL&GzNrdN`Q|y}k3oNiO(B@PuZ5m#<16a>mH1[mWn-C{qEQ^JtfIPw');
define('SECURE_AUTH_KEY', 'ZGjE_Nu5U-nZX=j#};*%5Yan)p}_::QW`7|pW8},_56@s.!n%`FWk0S8EKEG<pa`');
define('LOGGED_IN_KEY', 'R/?S1+/EA&Xv7dleMMaWcc51pPk^B}.AfTI{dyeC`V1rH&a)Cr=#9N}|FdbF~8CJ');
define('NONCE_KEY', ' yY1fupU%W42,G(ga,mUqjp8@Iwphm}X[,Gi6u?TZ<jzo?38%qF(@heEOr{/vvry');
define('AUTH_SALT', 'r,?{L)bpSOtlEI)8x59jd1x*=8;{MR?]T<:[&1Fc_CYJ^|C,QrwBdjkY-w7Ynab!');
define('SECURE_AUTH_SALT', '*.X6Ua8<$Mo;eI H!,M<?}&i_LrqKmzPO:UfzM8%$cgTj{%[y z:]Th}lZ(>5}X^');
define('LOGGED_IN_SALT', 'M:K/JFxTvc5mf~ZBV}c7GZPw!B3n&2)NLNLO#kzhMAGt7-7ur(/)E|Epb>mwSZW(');
define('NONCE_SALT', ')5BQ;ZV<zVlA*>QYR$T%8G,i~N|G0~hgK+W^jU#$QWq(p{WMWB{7{@a/0g?7gXE!');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

