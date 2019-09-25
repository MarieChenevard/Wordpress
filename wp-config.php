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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wp_simplon' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Za{D0204}m' );

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
define( 'AUTH_KEY',         'Y?vJan@r3g83&=rJ@nJ>Bi8:jdt1E=^OZ}yEXIQ3l(qx>QQ;/O%USpVQEHzu`}`O' );
define( 'SECURE_AUTH_KEY',  'Rfu`F3@U {W<HHFSlzgP$_q4zb$)G2_0G4fihenI$W|el`AkTv;=HA-|eu21nrn:' );
define( 'LOGGED_IN_KEY',    'e32cSHj/-5NnV[1L*l81j6Czj7LSkEaHy~yka K4G0csh4..tU>/$O=k):Z!q~4n' );
define( 'NONCE_KEY',        'B3)pd9J0}Kn!~rx2hX:q|26)GJG,qDvH&rd)*1jaMlH=a*5v-V $-x+&O0<[byse' );
define( 'AUTH_SALT',        '2.=&[wkXr_9E!?o~bPRr~gVX6zEjMz;2$g6#J1O|- =b#;#stafXUV;$Y/hwQ(p(' );
define( 'SECURE_AUTH_SALT', 'v}|0J=Ws~Xb5+dcF@eWR9`Bt_fmzo{&:~(`NDEfW$e<QfXSy p5gSye2]@AXr.%+' );
define( 'LOGGED_IN_SALT',   '$jHVheYGCJ%u~@B@l.-6qre$_Pu5@KZ444)e^H{P=*n`&]y1>_bA-qI^|oNCUm8z' );
define( 'NONCE_SALT',       ',?>9lQi_^x2hC@mx~aAu3dwGO<*r=hChbwM(,c|l:g-3#n@oDt.(_!A( 4h>b$c(' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
