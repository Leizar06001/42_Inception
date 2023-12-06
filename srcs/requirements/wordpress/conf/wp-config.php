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
define('DB_NAME', 'db1');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'user');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'pwd');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'mariadb');

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Dj8/07i;zo%,<[]Usu[4~@5(LU2z8Iwc,D4GS?RPiq+)Aa4el@h*iZxP5&<hg|jJ');
define('SECURE_AUTH_KEY',  'w]Ir3qM<Q.cj+ZT4$wh3s}?m]Iw~tI+/&jr5l)9@mAKL>(RDY_:JchRq@GZN$<cJ');
define('LOGGED_IN_KEY',    '}.hz+u-RAA(|-(b_;Q$7~wvL%TQ>MJpzIZlO4x&:_T/^r1Hn{9&H~U<;+->H/J!L');
define('NONCE_KEY',        'G)&R/tTvC61?;(S6wSN>B[UZNw0yqyAc|!K)96CSwAQIDQXp _Vy*8Hcr.m{x{;H');
define('AUTH_SALT',        'XDRGBbi}a,<Cxu/b=~.FU_9Uu!Byh%H#??Th&Z`7rTn^3?LzD};Yg<AD]u+O4tP{');
define('SECURE_AUTH_SALT', 'SMHoSwGZ-F8%_X*dq.QM Jm%~)BW}u+yu]Z^cc.Zj}e+[>mm9=$pxG|, noMYK[>');
define('LOGGED_IN_SALT',   'HRy]H@|L$fzcR+F<@H[b4pfX>A%+K=1/rH~YorqQ?Z>%9Sfn[y:*:`k>V1Tb-;uO');
define('NONCE_SALT',       '9{}L=QKXLA$Z8ol/y<3?}H(wu:%bO~3hxXOAR+Xdb+etWVX$zA;hXJ<{ih;7d+@h');
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
