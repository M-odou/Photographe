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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'photographe' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '77mBEjI- A9TQCiV!,h0=6J:/t_~4B#[,4J`#%BhnYVM%C2kmeoH.B2s``TL%$er' );
define( 'SECURE_AUTH_KEY',  '^fg/PS-[DNneLbuYtDrnKe_t2@^bs-kyClK(`Z#XdWd<8=x2AMt{F]Tlurd?y]/!' );
define( 'LOGGED_IN_KEY',    'LGc+pL/ZnSCeHpML_-ZFI5ARFgPCYk#s16R{$KU?Tt8_I9[uw$qFIz96)I1<zXtB' );
define( 'NONCE_KEY',        '5:u8c+Uc3,wN}+,MN_X->-6}UyiEjv;l:8vtQ;d4oLF@O4aoU|IHBR.:pjX&;G3&' );
define( 'AUTH_SALT',        'z.vs%b?2_H&&}Pf7Dnp}(%{0)~O<]`f[YA[<g{YAD%,AdwwHal2QID&pv/G:Y:f9' );
define( 'SECURE_AUTH_SALT', 'X|2k7`&&r({u;5D;?p^dlOR(#c`7uuX]/]%/*5G+,OcHLH2emYy9KTU]pAYFSToM' );
define( 'LOGGED_IN_SALT',   'dnv5g8no3_EJU.^bQZ]P|h=]l!=uG3f EfkdUO1S_3i%{n1a4Yu+)WW>qUP7hX8|' );
define( 'NONCE_SALT',       '8aV)QrI(Jok`EQhybeG*>B6$$|3:vMp91`$Pk|_Ap3=J6DE,|o8yQP%rt!$6{vAH' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
