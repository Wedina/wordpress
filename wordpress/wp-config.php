<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'troiswa');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MuNZ.D5fs< M*E=Xutq|h4O4Yr-SBdZx[QI5x}1.SQ{a62~8dU1JBnu]pU8$&B)s');
define('SECURE_AUTH_KEY',  ']z:&Rh.?lBY#jyImt--y`QHy@js%k)?,TP:5;dB^m!]f/^-HH5Ht9-q{NW|Cgc31');
define('LOGGED_IN_KEY',    'h7w*-58G;4hJgM/zMB(r&~?RZ.N<uF|gKV:#0W.y5zHP7^Y&9F!N&zV>/K~Br[]D');
define('NONCE_KEY',        'n)XCKDA4;#=}_geQcp6IWPPW,y*ImU;8Q0qM5KgTm1fA=(R[e%eI>n7IMMW*f4NV');
define('AUTH_SALT',        'qiS5E96OkK5||UtOaTV4k@z;VSeSO-=h{jNq,2j]$1}`;xfB4N?(m-gN*?W^YD=8');
define('SECURE_AUTH_SALT', '%Jy[A.KT%S%/N0sM[xe27l=S@t7EwIq00Dl;P<*n+wWTLBU.}hWsfmAw|VYeg^f@');
define('LOGGED_IN_SALT',   '{zU`;d?CLDcZcaH#F@r{M/higw02&6_(b$uIxeqh)+HFU8K@~3<-<R}Ij3)OFxY<');
define('NONCE_SALT',       'VRg+}BWG]ztN+%Y?VTc{LrWS*OkXD?)jd%!Bod{)v=I*V7|0p^`Pw#r_?w5|)Wk+');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');