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
define( 'DB_NAME', 'vetements' );

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
define( 'AUTH_KEY',         '3zG?9Q&,t7]EM=, -VExuwTuSTX2K~CKN|/&{sQ$*6Xo!3)zMi@%@-6 aJ7QQ|]I' );
define( 'SECURE_AUTH_KEY',  '1Tzbs^Jp?!VQ*}YuX.J;I29Ms=>q[/b2[b@i7]T(5`@G4=2WT48swrz=@R;;GUEG' );
define( 'LOGGED_IN_KEY',    '#G.*kFw&1^nOCVNY?]Y}o{4R8%YVT.A_u$Jiui,{-Us:RY49ZIYB)-J01 *tFAn0' );
define( 'NONCE_KEY',        'H,J4{:uFX!(S]jc8_&06+,+rx#4&>jBj<79s~DPsH(Xs;(*jw~%nx{>wLL>K|x5>' );
define( 'AUTH_SALT',        '|h|92_P09Q1p,A#qR=qnp${#VEh%FiFmB5oJ&Pq/g;1N#Vhp^Me|<Z4Y<z7@]Cgn' );
define( 'SECURE_AUTH_SALT', 'HX>  L0Kw>Y^D5vRsNT@Ds-K0_l,=H]Jzykg?$D?L| Hol< kBvp}cahwLg(XGLk' );
define( 'LOGGED_IN_SALT',   '=p~r_?.FPk3$RJIcJ:Oo,5w/=Y|YBrj(iC:eh+_)Xm4k/Nx:qF}xmYx8t1/5-wvR' );
define( 'NONCE_SALT',       'U%+}% 0m^{W^$VEQU!;1.]D4U@F_JCt9uAua8D8~gX:{ ~37`V,a)unur|=3Ds!r' );
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
define( 'FS_METHOD', 'direct' );
