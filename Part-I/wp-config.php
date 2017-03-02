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
define('DB_NAME', 'votre_nom_de_bdd');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'votre_utilisateur_de_bdd');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'votre_mdp_de_bdd');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'NPr1=It6Hc5_E8~{~t+h5XHf$uNaf>fq-q9cI-e{&=XN|?eMU}d@l1~uo5 P-eaq');
define('SECURE_AUTH_KEY',  'lGKuJL%N2O=Swll!wv;jv2q/eZUzm,*/>2cB(a/PkzQAp*+2:;F^j_XbH)}ANhr;');
define('LOGGED_IN_KEY',    '_5HdRn--+3%Zk--7`+)0?xxhcaZyn0+^#DZw/+e.+X|w|FHI<9)Hqcs#5<P@^sD2');
define('NONCE_KEY',        'eF$H;!+3v|2p @jc&v-n63hvHXBa4C$JD?<gj9}iSmx$b>mS-J}<Kko-5GgbPE~J');
define('AUTH_SALT',        'tS?5wow^cn1~i3%j8Z-qqYVK5rln#CF9nSm+6jd#=YNDcN<~o|J_O)iQ_&@f*l|F');
define('SECURE_AUTH_SALT', 'Z<A/Kp`|,Gn%Dm$8Ecs2*Gq8*6Xh3_;qWqWLl<Q2w$*;T{mtYRSDj|E-3|)|--$2');
define('LOGGED_IN_SALT',   'v|B/CLOx5Y#MY|Mx[faI-CFY_a$on S%mm}y23~h*[Q0m:[gnr^ (%UY5zN _$GZ');
define('NONCE_SALT',       ',Sc`eVX|.7WL~U7vC}aBzTx385J/3+n#g~R3Y!v@_vE_ILtyE`{pXtz*bN^c{GlL');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'xyztt_';

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

define('DISALLOW_FILE_EDIT', true);
error_reporting(0);
@ini_set(‘display_errors’, 0);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');