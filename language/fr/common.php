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
	'ANTIBOT42_JS_NOTICE'						=> 'Vérifiez si JavaScript est activé dans votre navigateur.',
	'ANTIBOT42_POSSIBLE_SPAMBOTS'				=> 'Spambots possibles',
));
