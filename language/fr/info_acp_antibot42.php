<?php
/**
*
* Antibot 42 [French]
* 
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_ANTIBOT42'						=> 'Antibot 42',
	'ACP_ANTIBOT42_SETTINGS'			=> 'Paramètres',
	'ACP_ANTIBOT42_SETTINGS_EXPLAIN'	=> 'Une autre façon d‘éliminer le spam sur votre forum. Peut-être la meilleure.',

	'ACP_ANTIBOT42_REG'					=> 'Activer la protection',
	'ACP_ANTIBOT42_REG_EXPLAIN'			=> 'Si des spambots enregistrés manuellement apparaissent sur votre site, activez également la protection des utilisateurs enregistrés. Sinon c‘est inutile.',
	'ACP_ANTIBOT42_REG_OPTION_1'		=> 'Pour les invités et les membres enregistrés',
	'ACP_ANTIBOT42_REG_OPTION_0'		=> 'Pour les invités uniquement',

	'ACP_ANTIBOT42_LOG'					=> 'Activer la journalisation',
	'ACP_ANTIBOT42_LOG_EXPLAIN'			=> 'Les tentatives infructueuses d‘inscription ou de publication, ainsi que les cas d‘inscription réussie pour les statistiques comparatives, sont enregistrés.',

	'ACP_ANTIBOT42_GEOIP'				=> 'Activer GeoIP',
	'ACP_ANTIBOT42_GEOIP_EXPLAIN'		=> 'L‘emplacement géographique des spambots est ajouté au journal. Si votre site est assiégé par de nombreux robots, cette fonctionnalité peut augmenter la charge du serveur.',

	'ACP_ANTIBOT42_BAN'					=> 'Bannir les éventuels spammeurs',
	'ACP_ANTIBOT42_BAN_EXPLAIN'			=> 'Bannissez les éventuels spammeurs par IP pendant 5 minutes après 10 tentatives de contournement de la protection. Le compteur de tentatives sera remis à zéro après l‘expiration de la session.',

	'ACP_ANTIBOT42_METHODS_NOTICE'		=> 'Les options suivantes sont utilisées à des fins de test. Si vous ne participez pas aux tests, laissez tous les éléments activés.',

	'ACP_ANTIBOT42_METHOD1'				=> 'Méthode de détection de spambot #1',
	'ACP_ANTIBOT42_METHOD1_EXPLAIN'		=> 'S‘applique au formulaire d‘inscription, au formulaire de publication et au formulaire de contact.',
	'ACP_ANTIBOT42_METHOD2'				=> 'Méthode de détection de spambot #2',
	'ACP_ANTIBOT42_METHOD2_EXPLAIN'		=> 'S‘applique au formulaire d‘inscription, au formulaire de publication et au formulaire de contact.',
	'ACP_ANTIBOT42_METHOD3'				=> 'Méthode de détection de spambot #3',
	'ACP_ANTIBOT42_METHOD3_EXPLAIN'		=> 'S‘applique au formulaire d‘inscription.',
	'ACP_ANTIBOT42_METHOD4'				=> 'Méthode de détection de spambot #4',
	'ACP_ANTIBOT42_METHOD4_EXPLAIN'		=> 'S‘applique au formulaire d‘inscription.',
	'ACP_ANTIBOT42_METHOD5'				=> 'Méthode de détection de spambot #5',
	'ACP_ANTIBOT42_METHOD5_EXPLAIN'		=> 'S‘applique au formulaire d‘inscription, au formulaire de publication, au formulaire de contact, au formulaire de courrier électronique de l‘utilisateur et au formulaire de message privé. Utilisez cette méthode avec prudence : elle peut causer des problèmes aux utilisateurs qui ont désactivé JavaScript dans leurs navigateurs.',

	'ACP_ANTIBOT42_LOG_TEXT'			=> 'Journal des enregistrements',
	'ACP_ANTIBOT42_LOG_COPY'			=> 'Copier le journal',
	'ACP_ANTIBOT42_LOG_COPIED'			=> 'Journal copié dans le presse-papiers.',
	'ACP_ANTIBOT42_LOG_DELETE'			=> 'Supprimer le journal',
	'ACP_ANTIBOT42_LOG_DELETE_CONFIRM'	=> 'Supprimer le journal Antibot 42 ? Sûr ?',
	'ACP_ANTIBOT42_LOG_DELETE_SUCCESS'	=> 'Journal supprimé.',
	'ACP_ANTIBOT42_LOG_NOT_READABLE'	=> 'Le fichier journal %s ou son répertoire ne sont pas lisibles ou n‘existent pas.',
	'ACP_ANTIBOT42_LOG_NOT_WRITABLE'	=> 'Le fichier journal %s ou son répertoire ne sont pas accessibles en écriture ou n‘existent pas.',

	'ACP_ANTIBOT42_GEOIP_NO_DB'			=> 'La fonction GeoIP est activée, mais les bases de données GeoIP sont introuvables. <a href="https://dev.maxmind.com/geoip/geoip2/geolite2/">Téléchargez-les</a> ("GeoLite2 Country" au moins) et décompressez sur %s.',
	'ACP_ANTIBOT42_GEOIP_COUNTRY_ONLY'	=> 'GeoIP est désormais capable de détecter les pays des spambots. Si vous voulez qu‘il détecte également les villes, <a href="https://dev.maxmind.com/geoip/geoip2/geolite2/">téléchargez la base de données « GeoLite2 City »</a> et décompressez dans %s.',

	'ACP_ANTIBOT42_NOTICE'				=> '
		Si vous souhaitez nous aider à <b>améliorer la détection des spambots</b>, veuillez procéder comme suit :
		<ul>
			<li>testez et dites-nous quelle méthode de détection de spambot fonctionne le mieux sur votre site Web (1er jour – 1ère méthode, 2e jour – 2e méthode, etc.);</li>
			<li>désactiver temporairement d‘autres contre-mesures de spambot, y compris le captcha, et nous dire à quel point cette extension était efficace en elle-même;</li>
			<li>activer temporairement la publication d‘invités et nous dire si cela a causé du spam ou non;</li>
			<li>copiez et envoyez-nous le journal dès qu‘il atteint 200-300 lignes ou plus.</li>
		</ul>
		Ce journal ne contient aucune information sur votre site Web ou vos utilisateurs (à l‘exception des IP des robots spammeurs).<br />
		Vous pouvez nous trouver ici : <a href="https://phpbbguru.net/community/">https://phpbbguru.net/community/</a>',

	'ACP_ANTIBOT42_VERSION_ALERT'		=> 'Certaines fonctionnalités de cette extension sont désactivées car elles ne sont pas compatibles avec votre version de phpBB. <br /> La protection contre les robots spammeurs n‘est pas optimale. Version de phpBB recommandée : 3.2.2 ou supérieure.',
));
