<?php

/**
*
* @package - NV recent topics
* @version $Id$
* @copyright (c) nickvergessen ( http://www.flying-bits.org/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'RECENT_TOPICS'						=> 'Sujets Récents',
	'RECENT_TOPICS_LIST'				=> 'Visible dans les sujets récents',
	'RECENT_TOPICS_LIST_EXPLAIN'		=> 'Est-ce que les sujets de ce forum doivent &ecirc;tres affich&eacute;s dans l&#39;index du MOD "Sujets r&eacute;cents"?',
	'RECENT_TOPICS_MOD'					=> 'MOD "Sujets r&eacute;cents"',

	'RT_CONFIG'							=> 'Configuration',
	'RT_ANTI_TOPICS'					=> 'Sujets exclus',
	'RT_ANTI_TOPICS_EXP'				=> 'Séparé par ", " (Exemple: "7, 9")<br />Si vous ne souhaitez pas exclure de sujets, entrez juste 0.',
	'RT_NUMBER'							=> 'Sujets récents',
	'RT_NUMBER_EXP'						=> 'Nombre de sujets à afficher sur l’index.',
	'RT_PAGE_NUMBER'					=> 'Pages de sujets récents',
	'RT_PAGE_NUMBER_EXP'				=> 'Vous pouvez afficher plus de sujets récents au moyen d’une pagination. Entrez seulement 1 pour désactiver cette fonctionnalité. Si vous entrez 0, il y aura autant de pages que nécessaire pour afficher tous les sujets.',
	'RT_PARENTS'						=> 'Afficher les forums parents',
	'RT_SAVED'							=> 'Paramètres sauvegardés.',

	'RT_VIEW_ON'		=> 'Afficher les Sujets récents dans',
	'RT_MEMBERLIST'		=> 'Liste des membres',
	'RT_INDEX'			=> 'Index',
	'RT_SEARCH'			=> 'Recherche',
	'RT_FAQ'			=> 'FAQ',
	'RT_MCP'			=> 'Panneau de modération',
	'RT_UCP'			=> 'Panneau d’utilisateur',
	'RT_VIEWFORUM'		=> 'Page des forums',
	'RT_VIEWTOPIC'		=> 'Page des sujets',
	'RT_VIEWONLINE'		=> 'Qui est en ligne',
	'RT_POSTING'		=> 'Page de rédaction de message',
	'RT_REPORT'			=> 'Page des rapports',
	'RT_OTHERS'			=> 'Autre site',

	// Installer
	'INSTALL_RECENT_TOPICS_MOD'				=> 'Installation du MOD "Sujets récents"',
	'INSTALL_RECENT_TOPICS_MOD_CONFIRM'		=> '&Ecirc;tes-vous sûr de vouloir installer le MOD "Sujets récents" ?',
	'UPDATE_RECENT_TOPICS_MOD'				=> 'Mise à jour du MOD "Sujets récents"',
	'UPDATE_RECENT_TOPICS_MOD_CONFIRM'		=> '&Ecirc;tes-vous sûr de vouloir mettre à jour le MOD "Sujets récents" ?',
	'UNINSTALL_RECENT_TOPICS_MOD'			=> 'Désinstallation du MOD "Sujets récents"',
	'UNINSTALL_RECENT_TOPICS_MOD_CONFIRM'	=> '&Ecirc;tes-vous sûr de vouloir désinstaller le MOD "Sujets récents" ?',
));

?>