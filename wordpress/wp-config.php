<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'base1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'DuBk}aEtU^U+P}P7^9O(D*pf_ILy[wI|[Q7Aea#sFB6x]ZYpVqg&ZY*`W@PErJCj' );
define( 'SECURE_AUTH_KEY',  '_$!<iHcQSM12J30Uz91BEW-pqz~jw)DqqwxDDK&Wlb=r!KAl^;L_mCC&prhU{FD&' );
define( 'LOGGED_IN_KEY',    'MT*YKlte|ob %P~.@&F-)0p$L95TEdEg;PzPNCN=gm@8UsL{bA!`W!,;#]M,#p=z' );
define( 'NONCE_KEY',        'y9OAd./sRxgsXOD8-?1&Q`S~uKG-q:6z%fOkHVyizh&4E%%UJqvtJD{5p=%rel_4' );
define( 'AUTH_SALT',        'DNcJwgN<zP.t0W}kIIi,E7Z|GDTlW&z5r/C!{NrV-rx#AaIoULC/Sd+L!}sI|)t(' );
define( 'SECURE_AUTH_SALT', 'wS2SBeK%!0E$()s; AAa?.:taQarkGg%eJ~OZ8>Jm;L5$,? *PNImuNvWYkfvnHn' );
define( 'LOGGED_IN_SALT',   'zCJHS3hs@OG~M^a,Oe4n ^.#*kb,yJ8_:<ws~hT<`uIA A+ <g2+@DwgQW3a]zDS' );
define( 'NONCE_SALT',       'U]8,}}S&}*V,Oj%@#tjez~;Fn+V_+x`|n4{EXSkX7l~Feqd;Ly9[h$_25;M8bQ&J' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
