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
define( 'DB_NAME', 'mon-blog' );

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
define( 'AUTH_KEY',         '!^hgk4ySjQpL;l#H5.ES/%]qQcC$_,w66*m44bDk94f8u.Q!YltlVRX} >J;.0Ab' );
define( 'SECURE_AUTH_KEY',  'U{GPeeV|o6xrv36a2h42o:(i5,Nt|rStlH3xny?]!%yaT;py^{!Th+s):kj[Q{#.' );
define( 'LOGGED_IN_KEY',    '++gYA7](9Z&mBW@/k&3( }^W*^fpzFnHu=x)?IK7r8eNvXmI612g(]?FmvG>2ME9' );
define( 'NONCE_KEY',        'tT-0s9/x]=#0Hkh.$e&(2h.g>p%Iv-#)?vb6.KMg5P:4EnQ/j]<&_uvP[E&O/*9^' );
define( 'AUTH_SALT',        '<t6f|oY:~?*K/EtJg3{K.xD3pzE#&m!ah$CKV0WDGh3~IJSC@oHTHsK8OpaXZauT' );
define( 'SECURE_AUTH_SALT', 'Kyk7h2Z7TT,8Ia4hfH_`paTNlB{@OG/AD>kVU;AQ#CzPyLP?U!GP2Q0>]<Dg>9j3' );
define( 'LOGGED_IN_SALT',   '.<xa8~MD&6.c;T;7J.otlY@divZ*+uCcQ~B;&LA=C2|/MWbGSx08WH]C<v2DuP/4' );
define( 'NONCE_SALT',       'w+em0+8iSzL^4N{)$x>l>i5~uom<ow,A,DAcvZTf~nqb0v#H3/e$oQ2BB6Uw^l#5' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
