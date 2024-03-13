<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp-eval-debroucke' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '127.0.0.1:8889' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KRQtrOM!7j~|br*G*Um_h>ao2=K!3]y0*-KV9OE8J:brP:PC3iS_}Xq7^[YORI?8' );
define( 'SECURE_AUTH_KEY',  '`],i7zqde7yx}2nJg^_I^d+HrXQ.%:[eWiM8zoMz^l!f>16$RKo8<ts5GL$rWGsF' );
define( 'LOGGED_IN_KEY',    'jJQ~C^_ZB%N%CvoI4$|)i jy!Gra5f??mQBnSp}~sz26K4Cr0]2,;/uD{4P8iJX ' );
define( 'NONCE_KEY',        'M Q3Vz:6&AF#,>n=H`R-*=]Ex4GZ:/-;0B9#mDG:o#Cj_PX{#U-qr=r5d|[3?$uj' );
define( 'AUTH_SALT',        'Xy5A;>r[OSFD)$bwtYI|X]lKxpq3F(++*|U$^`;gXn~:Yn/du`~),^S*F2j1=_6z' );
define( 'SECURE_AUTH_SALT', '>f^#dZvF@?U}akD5rwmx?~V+fF)q<qK?</f%i$BB$<,ePX_M9PS^>0Q+`+?Kz2-s' );
define( 'LOGGED_IN_SALT',   'SJ)QlNYEbxa+-nQfYtRi_7{Ou~3e8gEO&<OO.qA*-4:dQ?gW c*FeK(R6~L]N#(7' );
define( 'NONCE_SALT',       'q9]v?g]I#OnPnY9 Q2]F9Tc@Vhj3pe8TI>_0#cfYC2WxT1Lbmy@kB*]& O+UcbZ(' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
