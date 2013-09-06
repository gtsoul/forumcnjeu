<?php
/**
*
* ucp [French]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group, (c) 2005 phpBB.fr
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> '<strong>Conditions d\'utilisation du forum</strong><br />
<br />
Les mod&eacute;rateurs de ce forum s\'efforceront de supprimer ou &eacute;diter tous les messages &agrave; caract&egrave;re r&eacute;pr&eacute;hensible aussi rapidement que possible. Toutefois, il leur est impossible de passer en revue tous les messages. Vous admettez donc que tous les messages post&eacute;s sur ce forum expriment la vue et opinion de leurs auteurs respectifs, et non celles des mod&eacute;rateurs ou du webmestre (except&eacute; des messages post&eacute;s par eux-mêmes) et par cons&eacute;quent qu\'ils ne peuvent pas être tenus pour responsables des discussions.<br />
<br />
Ce forum utilise des cookies pour stocker des informations sur votre ordinateur. Ces cookies ne contiendront aucune information personnelle, ils servent uniquement &agrave; am&eacute;liorer le confort d\'utilisation. L\'adresse e-mail est uniquement utilis&eacute;e afin de confirmer les d&eacute;tails de votre inscription ainsi que votre mot de passe (et aussi pour vous renvoyer votre mot de passe en cas d\'oubli).<br />

- les messages agressifs ou diffamatoires, les insultes et critiques personnelles, les grossi&egrave;ret&eacute;s et vulgarit&eacute;s, et plus g&eacute;n&eacute;ralement tout message contrevenant aux lois fran&ccedil;aises en vigueur sont interdits&nbsp;;<br />
- les messages incitant &agrave; - ou &eacute;voquant - des pratiques ill&eacute;gales sont interdits&nbsp;;<br />
- si vous diffusez des informations provenant d\'un autre site web, v&eacute;rifiez auparavant si le site en question ne vous l\'interdit pas. Mentionnez l\'adresse du site en question par respect du travail de ses administrateurs&nbsp;!<br />
- merci de poster vos messages une seule fois. Les r&eacute;p&eacute;titions sont d&eacute;sagr&eacute;ables et inutiles&nbsp;!<br />
- merci de faire un effort sur la grammaire et l\'orthographe. Style SMS d&eacute;conseill&eacute;&nbsp;!<br />
<br />
Tout message contrevenant aux dispositions ci-dessus sera &eacute;dit&eacute; ou supprim&eacute; sans pr&eacute;avis ni justification suppl&eacute;mentaire dans des d&eacute;lais qui d&eacute;pendront de la disponibilit&eacute; des mod&eacute;rateurs. Tout abus entraînera la r&eacute;siliation de l\'inscription. Internet n\'est ni un espace anonyme, ni un espace de non-droit&nbsp;! Nous nous r&eacute;servons la possibilit&eacute; d\'informer votre fournisseur d\'acc&egrave;s et/ou les autorit&eacute;s judiciaires de tout comportement malveillant. L\'adresse IP de chaque intervenant est enregistr&eacute;e afin d\'aider &agrave; faire respecter ces conditions.
Vous acceptez de recevoir des lettres d\'information (newsletter) envoy&eacute;es par Forumactif uniquement. Vous pouvez &agrave; tout moment vous d&eacute;sabonner de ces lettres d\'information (newsletter) en modifiant les pr&eacute;f&eacute;rences de votre profil.<br />
<br />
<font color="red">En cliquant sur le bouton \' J\'accepte \' ci-dessous&nbsp;:<br />
- vous reconnaissez avoir lu dans son int&eacute;gralit&eacute; le pr&eacute;sent r&egrave;glement&nbsp;;<br />
- vous vous engagez &agrave; respecter sans r&eacute;serve le pr&eacute;sent r&egrave;glement&nbsp;;<br />
- vous accordez aux mod&eacute;rateurs de ce forum le droit de supprimer, d&eacute;placer ou &eacute;diter n\'importe quel sujet de discussion &agrave; tout moment.</font><br />
	',

	'PRIVACY_POLICY'		=> 'Cette politique de confidentialité explique en détail comment « %1$s » et ses sociétés affiliées (désignés ici par « nous », « notre », « nos », « %1$s », « %2$s ») et phpBB (désigné ici par « ils », « eux », « leur », « logiciel phpBB », « www.phpbb.com », « phpBB Group », « équipes de phpBB ») utilisent toutes les informations qui ont collectées lors des sessions d’utilisation de votre part (désignées ici par « vos informations »).<br />
	<br />
	Vos informations sont collectées de deux manières différentes. Premièrement, en naviguant sur « %1$s », le logiciel phpBB créera un certain nombre de cookies qui sont de petits fichiers texte téléchargés dans les fichiers temporaires du navigateur internet de votre ordinateur. Les deux premiers cookies ne contiennent qu’un identifiant d’utilisateur (désigné ici par « identifiant de l’utilisateur ») et un identifiant de session anonyme (désigné ici par « identifiant de la session ») qui vous sont automatiquement assignés par le logiciel phpBB. Un troisième cookie sera créé une fois que vous naviguerez sur les sujets de « %1$s », archivant de ce fait tous les sujets que vous avez consultés et permettant d’améliorer votre confort de navigation en tant qu’utilisateur.<br />
	<br />
	Lors de votre navigation sur « %1$s », nous pouvons également créer une quatrième sorte de cookies, externes au document qui est prévu pour couvrir uniquement les pages créées par le logiciel phpBB. La seconde manière est de récupérer les informations que vous nous envoyez et que nous collectons. Ceci peut correspondre mais n’est pas limité à la publication de messages en tant qu’utilisateur anonyme (désignée ici par « messages anonymes »), l’inscription sur « %1$s » (désignée ici par « votre compte ») et les messages que vous publiez après votre inscription et lors de votre connexion (désignés ici par « vos messages »).<br />
	<br />
	Votre compte contiendra au minimum un identifiant unique (désigné ici par « votre nom d’utilisateur »), un mot de passe personnel vous permettant de vous connecter à votre compte (désigné ici par « votre mot de passe ») et une adresse de courrier électronique personnelle. Les informations de votre compte sur « %1$s » sont protégées par les lois de protection des données applicables dans le pays qui nous héberge. Toutes les informations, en-dehors de votre nom d’utilisateur, de votre mot de passe et de votre adresse de courrier électronique requis par « %1$s » durant la procédure d’inscription, sont obligatoires ou facultatives, à la discrétion de « %1$s ». Dans tous les cas, vous pouvez contrôler quelles informations de votre compte vous souhaitez rendre publiques ou non. De plus, vous pouvez faire le choix de vous abonner ou non à la liste de diffusion du logiciel phpBB par l’intermédiaire d’une option disponible dans votre compte.<br />
	<br />
	Votre mot de passe est crypté (par un cryptage à sens unique) afin qu’il soit sécurisé. Cependant, il est recommandé de ne pas utiliser le même mot de passe sur plusieurs sites internet différents. Votre mot de passe est le moyen d’accès de votre compte sur « %1$s », veillez à le conservez précieusement. En aucun cas une personne affiliée à « %1$s », à phpBB ou à un site de tierce partie ne peut vous demander légitimement votre mot de passe. Si vous oubliez le mot de passe de votre compte, vous pouvez utiliser la fonction « J’ai perdu mon mot de passe » qui est fournie par le logiciel phpBB. Ce processus vous demandera de spécifier votre nom d’utilisateur et votre adresse de courrier électronique. Le logiciel phpBB générera alors un nouveau mot de passe afin que vous puissiez reprendre le contrôle de votre compte.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Votre compte est à présent activé. Nous vous remercions de votre inscription.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Le compte est à présent activé.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Votre compte est à présent réactivé.',
	'ACCOUNT_ADDED'					=> 'Nous vous remercions de votre inscription, votre compte a été créé. Vous pouvez à présent vous connecter avec votre nom d’utilisateur et votre mot de passe.',
	'ACCOUNT_COPPA'					=> 'Votre compte a été créé mais il nécessite d’être approuvé. Veuillez consulter votre messagerie pour plus d’informations.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Votre compte a été mis à jour. Cependant, vous devez le réactiver car vous avez modifié votre adresse de courrier électronique. Une clé d’activation a été envoyée sur la nouvelle adresse de courrier électronique que vous avez saisie. Veuillez consulter votre messagerie pour plus d’informations.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Votre compte a été mis à jour. Cependant, un des administrateurs doit le réactiver car vous avez modifié votre adresse de courrier électronique. Un courriel leur a été envoyé et vous serez informé(e) de la réactivation de votre compte.',
	'ACCOUNT_INACTIVE'				=> 'Votre compte a été créé. Cependant, vous devez activer votre compte. Une clé d’activation a été envoyée sur l’adresse de courrier électronique que vous avez saisie. Veuillez consulter votre messagerie pour plus d’informations.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Votre compte a été créé. Cependant, un des administrateurs doit activer votre compte. Un courriel leur a été envoyé et vous serez informé(e) de la réactivation de votre compte.',
	'ACTIVATION_EMAIL_SENT'			=> 'Le courriel d’activation a été envoyé à votre adresse de courrier électronique.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Le courriel d’activation a été envoyé aux adresses de courrier électronique des administrateurs.',
	'ADD'							=> 'Ajouter',
	'ADD_BCC'						=> 'Ajouter [Cci]',
	'ADD_FOES'						=> 'Ajouter de nouveaux ignorés ',
	'ADD_FOES_EXPLAIN'				=> 'Vous devez saisir chaque nom d’utilisateur sur une nouvelle ligne.',
	'ADD_FOLDER'					=> 'Ajouter un dossier ',
	'ADD_FRIENDS'					=> 'Ajouter de nouveaux amis ',
	'ADD_FRIENDS_EXPLAIN'			=> 'Vous devez saisir chaque nom d’utilisateur sur une nouvelle ligne.',
	'ADD_NEW_RULE'					=> 'Ajouter une nouvelle règle',
	'ADD_RULE'						=> 'Ajouter une règle',
	'ADD_TO'						=> 'Ajouter [À]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Vous pouvez ajouter ici de nouveaux utilisateurs à des groupes. Vous pouvez décider que ce groupe deviendra le nouveau groupe par défaut concernant les utilisateurs que vous avez sélectionnés. Veuillez saisir chaque nom d’utilisateur sur une nouvelle ligne.',
	'ADMIN_EMAIL'					=> 'Autoriser les administrateurs à me contacter par courriel ',
	'AGREE'							=> 'J’accepte ces conditions',
	'ALLOW_PM'						=> 'Autoriser les utilisateurs à me contacter par message privé ',
	'ALLOW_PM_EXPLAIN'				=> 'Notez que les administrateurs et les modérateurs pourront toujours vous envoyer des messages privés.',
	'ALREADY_ACTIVATED'				=> 'Vous avez déjà activé votre compte.',
	'ATTACHMENTS_EXPLAIN'			=> 'Ceci correspond à la liste des pièces jointes que vous avez insérées dans les messages de ce forum.',
	'ATTACHMENTS_DELETED'			=> 'Les pièces jointes ont été supprimées.',
	'ATTACHMENT_DELETED'			=> 'La pièce jointe a été supprimée.',
	'AVATAR_CATEGORY'				=> 'Catégorie ',
	'AVATAR_EXPLAIN'				=> 'Dimensions maximales ; %1$d pixel(s) de large, %2$d pixel(s) de haut, %3$.2f Kio.',
	'AVATAR_FEATURES_DISABLED'		=> 'Les avatars sont actuellement désactivés.',
	'AVATAR_GALLERY'				=> 'Galerie locale ',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Impossible de transférer l’avatar vers %s.',
	'AVATAR_NOT_ALLOWED'			=> 'Votre avatar ne peut pas être affiché car l’utilisation des avatars n’est pas autorisée.',
	'AVATAR_PAGE'					=> 'Page',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Votre avatar actuel ne peut pas être affiché car son type n’est pas autorisé.',

	'BACK_TO_DRAFTS'			=> 'Retour aux brouillons sauvegardés',
	'BACK_TO_LOGIN'				=> 'Retour à l’écran de connexion',
	'BIRTHDAY'					=> 'Anniversaire ',
	'BIRTHDAY_EXPLAIN'			=> 'Si vous saisissez une année, votre âge sera affiché lors de votre anniversaire.',
	'BOARD_DATE_FORMAT'			=> 'Mon format de date ',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'La syntaxe utilisée est identique à la fonction PHP <a href="http://www.php.net/date">date()</a>.',
	'BOARD_DST'					=> 'L’heure d’été est effective ',
	'BOARD_LANGUAGE'			=> 'Ma langue ',
	'BOARD_STYLE'				=> 'Mon style sur le forum ',
	'BOARD_TIMEZONE'			=> 'Mon fuseau horaire ',
	'BOOKMARKS'					=> 'Signets',
	'BOOKMARKS_EXPLAIN'			=> 'Vous pouvez ajouter des sujets à vos signets afin de les consulter ultérieurement. Pour supprimer des signets, cochez les cases des signets que vous souhaitez supprimer, puis cliquez sur le bouton <em>Supprimer les signets sélectionnés</em>.',
	'BOOKMARKS_DISABLED'		=> 'La fonctionnalité liée aux signets a été désactivée sur ce forum.',
	'BOOKMARKS_REMOVED'			=> 'Vos signets ont été supprimés.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Vous ne pouvez désormais plus éditer ou supprimer ce message.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Les messages ne peuvent pas être déplacés dans le dossier que vous souhaitez supprimer.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Les messages ne peuvent pas être déplacés de la boîte d’envoi.',
	'CANNOT_RENAME_FOLDER'		=> 'Ce dossier ne peut pas être renommé.',
	'CANNOT_REMOVE_FOLDER'		=> 'Ce dossier ne peut pas être supprimé.',
	'CHANGE_DEFAULT_GROUP'		=> 'Modifier le groupe par défaut',
	'CHANGE_PASSWORD'			=> 'Modifier le mot de passe',
	'CLICK_GOTO_FOLDER'			=> '%1$sAller à votre dossier « %3$s »%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sRetour à votre dossier « %3$s »%2$s',
	'CONFIRMATION'				=> 'Confirmation d’inscription',
	'CONFIRM_CHANGES'			=> 'Confirmer les modifications',
	'CONFIRM_EMAIL'				=> 'Confirmer l’adresse de courrier électronique',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Vous ne devez spécifier cela que si vous souhaitez modifier votre adresse de courrier électronique.',
	'CONFIRM_EXPLAIN'			=> 'Pour empêcher les inscriptions automatisées, vous devez saisir un code de confirmation. Le code est affiché dans l’image que vous devriez apercevoir ci-dessous. Si vous êtes visuellement déficient(e) ou que vous éprouvez des difficultés à lire ce code correctement, veuillez contacter l’%sadministrateur du forum%s.',
	'VC_REFRESH'				=> 'Rafraîchir le code de confirmation',
	'VC_REFRESH_EXPLAIN'		=> 'Si vous éprouvez des difficultés à lire ce code correctement, vous pouvez en demander un nouveau en cliquant sur le bouton suivant.',

	'CONFIRM_PASSWORD'			=> 'Confirmer le mot de passe ',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Vous ne devez confirmer votre mot de passe que si vous avez modifié ce dernier ci-dessus.',
	'COPPA_BIRTHDAY'			=> 'Veuillez nous renseigner votre date de naissance afin de continuer le processus d’inscription.',
	'COPPA_COMPLIANCE'			=> 'Conformité de la COPPA',
	'COPPA_EXPLAIN'				=> 'Veuillez noter que si vous cliquez sur le bouton <em>Envoyer</em>, cela créera votre compte. Cependant, sachez que celui-ci ne peut être activé que si un de vos parents ou un tuteur légal approuve votre inscription. Vous recevrez une copie du formulaire contenant les renseignements à envoyer et à quel endroit le faire.',
	'CREATE_FOLDER'				=> 'Ajouter un dossier…',
	'CURRENT_IMAGE'				=> 'Image actuelle ',
	'CURRENT_PASSWORD'			=> 'Mot de passe actuel ',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Vous devez saisir votre mot de passe actuel si vous souhaitez modifier votre mot de passe, votre adresse de courrier électronique ou votre nom d’utilisateur.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => 'Pour modifier votre mot de passe, votre adresse de courrier électronique ou votre nom d’utilisateur, vous devez saisir votre mot de passe actuel.',
	'CUR_PASSWORD_EMPTY'		=> 'Vous n’avez pas saisi votre mot de passe actuel.',
	'CUR_PASSWORD_ERROR'		=> 'Le mot de passe que vous avez saisi est incorrect.',
	'CUSTOM_DATEFORMAT'			=> 'Personnaliser…',

	'DEFAULT_ACTION'			=> 'Action par défaut ',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Cette action sera déclenchée si aucune de ce qui la précède n’est applicable.',
	'DEFAULT_ADD_SIG'			=> 'Insérer ma signature par défaut ',
	'DEFAULT_BBCODE'			=> 'Activer le BBCode par défaut ',
	'DEFAULT_NOTIFY'			=> 'M’envoyer par défaut une notification lorsqu’une réponse a été publiée ',
	'DEFAULT_SMILIES'			=> 'Activer les émoticônes par défaut ',
	'DEFINED_RULES'				=> 'Règles définies',
	'DELETED_TOPIC'				=> 'Le sujet a été supprimé.',
	'DELETE_ATTACHMENT'			=> 'Supprimer la pièce jointe',
	'DELETE_ATTACHMENTS'		=> 'Supprimer les pièces jointes',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Êtes-vous sûr(e) de vouloir supprimer cette pièce jointe ?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Êtes-vous sûr(e) de vouloir supprimer ces pièces jointes ?',
	'DELETE_AVATAR'				=> 'Supprimer l’image',
	'DELETE_COOKIES_CONFIRM'	=> 'Êtes-vous sûr(e) de vouloir supprimer tous les cookies de ce forum ?',
	'DELETE_MARKED_PM'			=> 'Supprimer les messages cochés',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Êtes-vous sûr(e) de vouloir supprimer tous les messages cochés ?',
	'DELETE_OLDEST_MESSAGES'	=> 'Supprimer les anciens messages',
	'DELETE_MESSAGE'			=> 'Supprimer le message',
	'DELETE_MESSAGE_CONFIRM'	=> 'Êtes-vous sûr(e) de vouloir supprimer ce message privé ?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Supprimer tous les messages du dossier que vous souhaitez supprimer',
	'DELETE_RULE'				=> 'Supprimer la règle',
	'DELETE_RULE_CONFIRM'		=> 'Êtes-vous sûr(e) de vouloir supprimer cette règle ?',
	'DEMOTE_SELECTED'			=> 'Rétrograder la sélection',
	'DISABLE_CENSORS'			=> 'Activer la censure de mots ',
	'DISPLAY_GALLERY'			=> 'Afficher la galerie',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Le domaine de l’adresse de courrier électronique que vous avez saisie ne contient aucun enregistrement MX correct.',
	'DOWNLOADS'					=> 'Téléchargements',
	'DRAFTS_DELETED'			=> 'Tous les brouillons que vous avez sélectionnés ont été supprimés.',
	'DRAFTS_EXPLAIN'			=> 'Vous pouvez consulter, éditer et supprimer ici les brouillons que vous avez sauvegardés.',
	'DRAFT_UPDATED'				=> 'Le brouillon a été mis à jour.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Vous pouvez éditer ici votre brouillon. Les brouillons ne contiennent ni pièces jointes, ni sondages.',
	'EMAIL_BANNED_EMAIL'		=> 'L’adresse de courrier électronique que vous avez saisie a été bannie de ce forum.',
	'EMAIL_INVALID_EMAIL'		=> 'L’adresse de courrier électronique que vous avez saisie est incorrecte.',
	'EMAIL_REMIND'				=> 'Ceci doit correspondre à l’adresse de courrier électronique qui est associée à votre compte. Si vous ne l’avez pas modifié par l’intermédiaire de votre panneau de contrôle de l’utilisateur, il s’agit de l’adresse de courrier électronique que vous avez saisie lors de votre inscription.',
	'EMAIL_TAKEN_EMAIL'			=> 'L’adresse de courrier électronique que vous avez saisie est déjà utilisée.',
	'EMPTY_DRAFT'				=> 'Vous devez saisir un message afin d’envoyer vos modifications.',
	'EMPTY_DRAFT_TITLE'			=> 'Vous devez saisir le titre du brouillon.',
	'EXPORT_AS_XML'				=> 'Exporter en XML',
	'EXPORT_AS_CSV'				=> 'Exporter en CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Exporter en CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Exporter en TXT',
	'EXPORT_AS_MSG'				=> 'Exporter en MSG',
	'EXPORT_FOLDER'				=> 'Exporter le dossier ',

	'FIELD_REQUIRED'					=> 'Le champ « %s » doit être complété.',
	'FIELD_TOO_SHORT'					=> 'Le champ « %1$s » est trop court, vous devez saisir au moins %2$d caractère(s).',
	'FIELD_TOO_LONG'					=> 'Le champ « %1$s » est trop long, vous ne pouvez saisir que %2$d caractère(s) au maximum.',
	'FIELD_TOO_SMALL'					=> 'La valeur de « %1$s » est trop faible, la valeur minimale est de %2$d.',
	'FIELD_TOO_LARGE'					=> 'La valeur de « %1$s » est trop importante, la valeur maximale est de %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Le champ « %s » contient des caractères incorrects, seuls les chiffres sont autorisés.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Le champ « %s » contient des caractères incorrects, seuls les lettres et les chiffres sont autorisés.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Le champ « %s » contient des caractères incorrects, seuls les lettres, les chiffres, les espaces, les tirets bas, les crochets et les signes plus et moins sont autorisés.',
	'FIELD_INVALID_DATE'				=> 'La date que vous avez spécifiée dans le champ « %s » est incorrecte.',
	'FIELD_INVALID_VALUE'				=> 'Le champ « %s » contient une valeur incorrecte.',

	'FOE_MESSAGE'				=> 'Message(s) d’un ignoré',
	'FOES_EXPLAIN'				=> 'Les ignorés sont des utilisateurs qui seront ignorés par défaut. Les messages que ces utilisateurs publient ne seront pas entièrement visibles. Les ignorés peuvent néanmoins envoyer des messages privés. Veuillez noter que vous ne pouvez pas ignorer les modérateurs ou les administrateurs.',
	'FOES_UPDATED'				=> 'Votre liste d’ignorés a été mise à jour.',
	'FOLDER_ADDED'				=> 'Le dossier a été ajouté.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d message(s) archivé(s) sur %2$d',
	'FOLDER_NAME_EMPTY'			=> 'Vous devez saisir le nom de ce dossier.',
	'FOLDER_NAME_EXIST'			=> 'Le dossier <strong>%s</strong> existe déjà.',
	'FOLDER_OPTIONS'			=> 'Options du dossier',
	'FOLDER_RENAMED'			=> 'Le dossier a été renommé.',
	'FOLDER_REMOVED'			=> 'Le dossier a été supprimé.',
	'FOLDER_STATUS_MSG'			=> 'Le dossier est utilisé à %1$d %% (%2$d message(s) archivé(s) sur %3$d)',
	'FORWARD_PM'				=> 'Transférer le MP',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Vous devez modifier votre mot de passe afin de continuer à naviguer sur le forum.',
	'FRIEND_MESSAGE'			=> 'Message(s) d’un ami',
	'FRIENDS'					=> 'Amis',
	'FRIENDS_EXPLAIN'			=> 'Les amis vous permettent d’accéder plus rapidement aux membres avec qui vous communiquez fréquemment. Si le template que vous utilisez est compatible avec cette fonctionnalité, les messages de vos amis apparaîtront en surbrillance.',
	'FRIENDS_OFFLINE'			=> 'Hors-ligne',
	'FRIENDS_ONLINE'			=> 'En ligne',
	'FRIENDS_UPDATED'			=> 'Votre liste d’amis a été mise à jour.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'L’action à entreprendre lorsqu’un dossier est plein a été modifiée.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Message original --------',
	'FWD_SUBJECT'				=> 'Sujet : %s',
	'FWD_DATE'					=> 'Date : %s',
	'FWD_FROM'					=> 'Par : %s',
	'FWD_TO'					=> 'À : %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Annonce globale',

	'HIDE_ONLINE'				=> 'Masquer mon statut en ligne ',
	'HIDE_ONLINE_EXPLAIN'		=> 'La modification de cette option ne sera prise en compte que lors de votre prochaine visite sur le forum.',
	'HOLD_NEW_MESSAGES'			=> 'Refuser les nouveaux messages (ils seront mis en attente jusqu’à ce que vous libériez de l’espace)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Les nouveaux messages seront mis en attente',

	'IF_FOLDER_FULL'			=> 'Si le dossier est plein ',
	'IMPORTANT_NEWS'			=> 'Annonces importantes',
	'INVALID_USER_BIRTHDAY'			=> 'La date d’anniversaire que vous avez spécifiée est incorrecte.',
	'INVALID_CHARS_USERNAME'	=> 'Le nom d’utilisateur que vous avez spécifié contient des caractères non autorisés.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Le mot de passe que vous avez spécifié ne contient pas les caractères obligatoires.',
	'ITEMS_REQUIRED'			=> 'Les champs marqués par * sont à compléter obligatoirement.',

	'JOIN_SELECTED'				=> 'Rejoindre la sélection',

	'LANGUAGE'					=> 'Langue ',
	'LINK_REMOTE_AVATAR'		=> 'Lien externe ',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Saisissez le lien où se situe l’image de l’avatar que vous souhaitez insérer.',
	'LINK_REMOTE_SIZE'			=> 'Dimensions de l’avatar ',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Spécifiez la largeur et la hauteur de l’avatar, laissez vide afin de tenter une vérification automatique.',
	'LOGIN_EXPLAIN_UCP'			=> 'Veuillez vous connecter afin d’accéder au panneau de contrôle de l’utilisateur.',
	'LOGIN_REDIRECT'			=> 'Vous êtes à présent connecté(e).',
	'LOGOUT_FAILED'				=> 'Vous n’avez pas été déconnecté(e) car la requête n’a pas fonctionné sur votre session. Si le problème persiste, veuillez contacter l’administrateur du forum.',
	'LOGOUT_REDIRECT'			=> 'Vous êtes à présent déconnecté(e).',

	'MARK_IMPORTANT'				=> '(Dé)marquer comme important(s)',
	'MARKED_MESSAGE'				=> 'Message(s) marqué(s) comme important(s)',
	'MAX_FOLDER_REACHED'			=> 'Le nombre maximum de dossiers autorisés par utilisateur a été atteint.',
	'MESSAGE_BY_AUTHOR'				=> 'par',
	'MESSAGE_COLOURS'				=> 'Légende de couleurs des messages',
	'MESSAGE_DELETED'				=> 'Le message a été supprimé.',
	'MESSAGE_HISTORY'				=> 'Historique du message ',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Ce message a été supprimé par son auteur avant qu’il ait été délivré.',
	'MESSAGE_SENT_ON'				=> 'le',
	'MESSAGE_STORED'				=> 'Le message a été envoyé.',
	'MESSAGE_TO'					=> 'À',
	'MESSAGES_DELETED'				=> 'Les messages ont été supprimés',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Déplacer les messages du dossier que vous avez supprimé vers ',
	'MOVE_DOWN'						=> 'Descendre',
	'MOVE_MARKED_TO_FOLDER'			=> 'Déplacer la sélection vers %s',
	'MOVE_PM_ERROR'					=> 'Une erreur est survenue lors du déplacement des messages vers le nouveau dossier, seuls %1d des %2d messages ont été déplacés.',
	'MOVE_TO_FOLDER'				=> 'Déplacer vers le dossier ',
	'MOVE_UP'						=> 'Monter',

	'NEW_EMAIL_CONFIRM_EMPTY'		=> 'Vous n’avez pas saisi d’adresse de courrier électronique de confirmation.',
	'NEW_EMAIL_ERROR'				=> 'Les adresses de courrier électronique que vous avez saisies ne concordent pas.',
	'NEW_FOLDER_NAME'				=> 'Nom du nouveau dossier ',
	'NEW_PASSWORD'					=> 'Nouveau mot de passe ',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'Vous n’avez pas saisi de mot de passe de confirmation.',
	'NEW_PASSWORD_ERROR'			=> 'Les mots de passe que vous avez saisis ne concordent pas.',
	'NOTIFY_METHOD'					=> 'Méthode de notification ',
	'NOTIFY_METHOD_BOTH'			=> 'Tous les deux',
	'NOTIFY_METHOD_EMAIL'			=> 'Courriel uniquement',
	'NOTIFY_METHOD_EXPLAIN'			=> 'La méthode d’envoi des messages qui sont envoyés par l’intermédiaire de ce forum.',
	'NOTIFY_METHOD_IM'				=> 'Jabber uniquement',
	'NOTIFY_ON_PM'					=> 'M’envoyer une notification lors de la réception d’un nouveau message privé ',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Vous ne pouvez pas ajouter des utilisateurs anonymes à votre liste d’amis.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'Vous ne pouvez pas ajouter des robots à votre liste d’amis.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Vous ne pouvez pas ajouter à votre liste d’amis des utilisateurs qui sont également présents dans votre liste d’ignorés.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Vous ne pouvez pas vous ajouter vous-même à la liste d’amis.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Vous ne pouvez pas ajouter des administrateurs ou des modérateurs à votre liste d’ignorés.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Vous ne pouvez pas ajouter des utilisateurs anonymes à votre liste d’ignorés.',
	'NOT_ADDED_FOES_BOTS'			=> 'Vous ne pouvez pas ajouter des robots à votre liste d’ignorés.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Vous ne pouvez pas ajouter à votre liste d’ignorés des utilisateurs qui sont également présents dans votre liste d’amis.',
	'NOT_ADDED_FOES_SELF'			=> 'Vous ne pouvez pas vous ajouter vous-même à la liste d’ignorés.',
	'NOT_AGREE'						=> 'Je refuse ces conditions',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Le dossier de destination « %s » semble être plein. L’action demandée n’a pas été prise en compte.',
	'NOT_MOVED_MESSAGE'				=> 'Vous avez actuellement 1 message privé en attente car le dossier est plein.',
	'NOT_MOVED_MESSAGES'			=> 'Vous avez actuellement %d messages privés en attente car le dossier est plein.',
	'NO_ACTION_MODE'				=> 'Aucune action n’a été spécifiée concernant ce message.',
	'NO_AUTHOR'						=> 'Aucun auteur n’a été défini pour ce message',
	'NO_AVATAR_CATEGORY'			=> 'Aucune',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Vous n’êtes pas autorisé(e) à supprimer les messages privés.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Vous n’êtes pas autorisé(e) à éditer les messages privés.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Vous n’êtes pas autorisé(e) à transférer des messages privés.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Vous n’êtes pas autorisé(e) à envoyer des messages privés aux groupes.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'Vous n’êtes pas autorisé(e) à demander un nouveau mot de passe.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Vous n’êtes pas autorisé(e) à consulter les messages privés qui sont en liste d’attente.',
	'NO_AUTH_READ_MESSAGE'			=> 'Vous n’êtes pas autorisé(e) à consulter les messages privés.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Vous n’êtes pas autorisé(e) à consulter ce message car il a été supprimé par son auteur.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Vous n’êtes pas autorisé(e) à envoyer des messages privés.',
	'NO_AUTH_SIGNATURE'				=> 'Vous n’êtes pas autorisé(e) à définir une signature.',

	'NO_BCC_RECIPIENT'			=> 'Aucun',
	'NO_BOOKMARKS'				=> 'Vous n’avez aucun signet.',
	'NO_BOOKMARKS_SELECTED'		=> 'Vous n’avez sélectionné aucun signet.',
	'NO_EDIT_READ_MESSAGE'		=> 'Le message privé ne peut dorénavant plus être édité car il a déjà été consulté.',
	'NO_EMAIL_USER'				=> 'L’adresse de courrier électronique ou le nom d’utilisateur demandé est introuvable.',
	'NO_FOES'					=> 'Aucun ignoré n’a été spécifié',
	'NO_FRIENDS'				=> 'Aucun ami n’a été spécifié',
	'NO_FRIENDS_OFFLINE'		=> 'Aucun ami n’est hors-ligne',
	'NO_FRIENDS_ONLINE'			=> 'Aucun ami n’est en ligne',
	'NO_GROUP_SELECTED'			=> 'Aucun groupe n’a été spécifié.',
	'NO_IMPORTANT_NEWS'			=> 'Aucune annonce importante n’est présente.',
	'NO_MESSAGE'				=> 'Le message privé est introuvable.',
	'NO_NEW_FOLDER_NAME'		=> 'Vous devez spécifier un nouveau nom de dossier.',
	'NO_NEWER_PM'				=> 'Aucun nouveau message.',
	'NO_OLDER_PM'				=> 'Aucun ancien message.',
	'NO_PASSWORD_SUPPLIED'		=> 'Vous ne pouvez pas vous connecter sans saisir un mot de passe.',
	'NO_RECIPIENT'				=> 'Aucun destinataire n’a été spécifié.',
	'NO_RULES_DEFINED'			=> 'Aucune règle n’a été spécifiée.',
	'NO_SAVED_DRAFTS'			=> 'Aucun brouillon n’a été sauvegardé.',
	'NO_TO_RECIPIENT'			=> 'Aucun',
	'NO_WATCHED_FORUMS'			=> 'Vous n’êtes abonné(e) à aucun forum.',
	'NO_WATCHED_SELECTED'		=> 'Vous n’avez sélectionné aucun forum ou sujet dont vous êtes abonné(e).',
	'NO_WATCHED_TOPICS'			=> 'Vous n’êtes abonné(e) à aucun sujet.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Le mot de passe doit être compris entre %1$d et %2$d caractères de long, doit contenir des lettres en majuscules et en minuscules et doit contenir des chiffres.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Doit être compris entre %1$d et %2$d caractères.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Le mot de passe doit être compris entre %1$d et %2$d caractères de long et doit contenir des lettres en majuscules et en minuscules.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Le mot de passe doit être compris entre %1$d et %2$d caractères de long, doit contenir des lettres en majuscules et en minuscules, doit contenir des chiffres et doit contenir des symboles.',
	'PASSWORD'					=> 'Mot de passe ',
	'PASSWORD_ACTIVATED'		=> 'Votre nouveau mot de passe a été activé.',
	'PASSWORD_UPDATED'			=> 'Un nouveau mot de passe a été envoyé à l’adresse de courrier électronique que vous avez enregistrée.',
	'PERMISSIONS_RESTORED'		=> 'Les permissions par défaut ont été restaurées.',
	'PERMISSIONS_TRANSFERRED'	=> 'Les permissions de <strong>%s</strong> ont été transférées, vous pouvez à présent parcourir le forum avec les permissions de cet utilisateur.<br />Veuillez noter que les permissions d’administration ne seront pas transférées. Vous pouvez restaurer vos permissions à tout moment.',
	'PM_DISABLED'				=> 'La messagerie privée a été désactivée sur ce forum.',
	'PM_FROM'					=> 'Par ',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Ce message privé a été envoyé par un utilisateur qui n’est désormais plus inscrit.',
	'PM_ICON'					=> 'Icône de MP ',
	'PM_INBOX'					=> 'Boîte de réception',
	'PM_NO_USERS'				=> 'Les utilisateurs que vous souhaitez ajouter n’existent pas.',
	'PM_OUTBOX'					=> 'Boîte d’envoi',
	'PM_SENTBOX'				=> 'Message(s) envoyé(s)',
	'PM_SUBJECT'				=> 'Sujet du message ',
	'PM_TO'						=> 'Envoyer à',
	'PM_USERS_REMOVED_NO_PM'	=> 'Certains utilisateurs ne peuvent pas être ajoutés car ils ont désactivés la réception de messages privés.',
	'POPUP_ON_PM'				=> 'Afficher une fenêtre intruse lors de la réception d’un nouveau message privé ',
	'POST_EDIT_PM'				=> 'Éditer le message',
	'POST_FORWARD_PM'			=> 'Transférer le message',
	'POST_NEW_PM'				=> 'Composer un message',
	'POST_PM_LOCKED'			=> 'La messagerie privée est verrouillée.',
	'POST_PM_POST'				=> 'Citer le message',
	'POST_QUOTE_PM'				=> 'Citer le message',
	'POST_REPLY_PM'				=> 'Répondre au message',
	'PRINT_PM'					=> 'Aperçu avant impression',
	'PREFERENCES_UPDATED'		=> 'Vos préférences ont été mises à jour.',
	'PROFILE_INFO_NOTICE'		=> 'Veuillez noter que ces informations peuvent être visibles aux autres membres. Soyez prudent(e) lors de la saisie d’informations personnelles. Tous les champs marqués par * sont obligatoires.',
	'PROFILE_UPDATED'			=> 'Votre profil a été mis à jour.',

	'RECIPIENT'							=> 'Destinataire ',
	'RECIPIENTS'						=> 'Destinataires',
	'REGISTRATION'						=> 'Inscription',
	'RELEASE_MESSAGES'					=> '%sRendre disponible tous les messages en liste d’attente%s… Ils seront triés de nouveau dans les dossiers appropriés si assez d’espace est libéré.',
	'REMOVE_ADDRESS'					=> 'Supprimer l’adresse',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Supprimer les signets sélectionnés',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Êtes-vous sûr(e) de vouloir supprimer tous les signets que vous avez sélectionnés ?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Supprimer les signets sélectionnés',
	'REMOVE_FOLDER'						=> 'Supprimer le dossier ',
	'REMOVE_FOLDER_CONFIRM'				=> 'Êtes-vous sûr(e) de vouloir supprimer ce dossier ?',
	'RENAME'							=> 'Renommer',
	'RENAME_FOLDER'						=> 'Renommer le dossier ',
	'REPLIED_MESSAGE'					=> 'Message(s) répondu(s)',
	'REPLY_TO_ALL'						=> 'Répondre à l’expéditeur et à tous les destinataires.',
	'REPORT_PM'							=> 'Rapporter le message privé',
	'RESIGN_SELECTED'					=> 'Décocher la sélection',
	'RETURN_FOLDER'						=> '%1$sRetour au dossier précédent%2$s',
	'RETURN_UCP'						=> '%sRetour au panneau de contrôle de l’utilisateur%s',
	'RULE_ADDED'						=> 'La règle a été ajoutée.',
	'RULE_ALREADY_DEFINED'				=> 'Cette règle a déjà été spécifiée antérieurement.',
	'RULE_DELETED'						=> 'La règle a été supprimée.',
	'RULE_LIMIT_REACHED'				=> 'Vous ne pouvez pas ajouter plus de règles de MP. Vous avez atteint le nombre maximal de règles.',
	'RULE_NOT_DEFINED'					=> 'La règle n’est pas correctement spécifiée.',
	'RULE_REMOVED_MESSAGE'				=> 'Un message privé a été supprimé par les filtres de la messagerie privée.',
	'RULE_REMOVED_MESSAGES'				=> '%d messages privés ont été supprimés par les filtres de la messagerie privée.',

	'SAME_PASSWORD_ERROR'		=> 'Le mot de passe que vous avez saisi est identique à votre mot de passe actuel.',
	'SEARCH_YOUR_POSTS'			=> 'Afficher vos messages',
	'SEND_PASSWORD'				=> 'Envoyer le mot de passe',
	'SENT_AT'					=> 'Date d’envoi ',			// Used before dates in private messages
	'SHOW_EMAIL'				=> 'Les utilisateurs peuvent me contacter par courriel ',
	'SIGNATURE_EXPLAIN'			=> 'Ceci est un bloc de texte qui sera ajouté en bas de tous les messages que vous rédigez. Il est limité à %d caractères.',
	'SIGNATURE_PREVIEW'			=> 'Votre signature apparaîtra ainsi dans tous vos messages',
	'SIGNATURE_TOO_LONG'		=> 'Votre signature est trop longue.',
	'SORT'						=> 'Trier par',
	'SORT_COMMENT'				=> 'Description du fichier',
	'SORT_DOWNLOADS'			=> 'Téléchargements',
	'SORT_EXTENSION'			=> 'Extension',
	'SORT_FILENAME'				=> 'Nom du fichier',
	'SORT_POST_TIME'			=> 'Date de publication',
	'SORT_SIZE'					=> 'Taille du fichier',

	'TIMEZONE'					=> 'Fuseau horaire ',
	'TO'						=> 'À ',
	'TOO_MANY_RECIPIENTS'		=> 'Vous ne pouvez pas envoyer de message privé à autant de destinataires.',
	'TOO_MANY_REGISTERS'		=> 'Vous avez dépassé le nombre maximum de tentatives d’inscriptions lors de cette session. Veuillez réessayer ultérieurement.',

	'UCP'						=> 'Panneau de contrôle de l’utilisateur',
	'UCP_ACTIVATE'				=> 'Activer le compte',
	'UCP_ADMIN_ACTIVATE'		=> 'Veuillez noter que vous devez saisir une adresse de courrier électronique correcte afin que votre compte soit activé. L’administrateur vérifiera votre compte et s’il est approuvé, vous recevrez un courriel à l’adresse de courrier électronique que vous avez spécifiée.',
	'UCP_AIM'					=> 'AOL Instant Messenger ',
	'UCP_ATTACHMENTS'			=> 'Pièces jointes',
	'UCP_COPPA_BEFORE'			=> 'Avant le %s',
	'UCP_COPPA_ON_AFTER'		=> 'Le ou après le %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Veuillez noter que vous devez saisir une adresse de courrier électronique correcte afin que votre compte soit activé. Vous recevrez un courriel qui contiendra le lien d’activation à l’adresse de courrier électronique que vous avez spécifiée.',
	'UCP_ICQ'					=> 'Numéro ICQ ',
	'UCP_JABBER'				=> 'Adresse Jabber ',

	'UCP_MAIN'					=> 'Vue d’ensemble',
	'UCP_MAIN_ATTACHMENTS'		=> 'Gérer les pièces jointes',
	'UCP_MAIN_BOOKMARKS'		=> 'Gérer les signets',
	'UCP_MAIN_DRAFTS'			=> 'Gérer les brouillons',
	'UCP_MAIN_FRONT'			=> 'Page principale',
	'UCP_MAIN_SUBSCRIBED'		=> 'Gérer les abonnements',

	'UCP_MSNM'					=> 'WL/MSN Messenger ',
	'UCP_NO_ATTACHMENTS'		=> 'Vous n’avez publié aucun fichier.',

	'UCP_PREFS'					=> 'Préférences du forum',
	'UCP_PREFS_PERSONAL'		=> 'Éditer les réglages globaux',
	'UCP_PREFS_POST'			=> 'Éditer la publication par défaut',
	'UCP_PREFS_VIEW'			=> 'Éditer les options d’affichage',

	'UCP_PM'					=> 'Messages privés',
	'UCP_PM_COMPOSE'			=> 'Composer un message',
	'UCP_PM_DRAFTS'				=> 'Gérer les brouillons de MP',
	'UCP_PM_OPTIONS'			=> 'Règles, dossiers &amp; réglages',
	'UCP_PM_POPUP'				=> 'Messages privés',
	'UCP_PM_POPUP_TITLE'		=> 'Fenêtre intruse de message privé',
	'UCP_PM_UNREAD'				=> 'Messages non lus',
	'UCP_PM_VIEW'				=> 'Consulter les messages',

	'UCP_PROFILE'				=> 'Profil',
	'UCP_PROFILE_AVATAR'		=> 'Éditer l’avatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Éditer le profil',
	'UCP_PROFILE_REG_DETAILS'	=> 'Éditer les réglages du compte',
	'UCP_PROFILE_SIGNATURE'		=> 'Éditer la signature',

	'UCP_USERGROUPS'			=> 'Groupes d’utilisateurs',
	'UCP_USERGROUPS_MEMBER'		=> 'Éditer les adhésions',
	'UCP_USERGROUPS_MANAGE'		=> 'Gérer les groupes',

	'UCP_REGISTER_DISABLE'			=> 'La création de nouveaux comptes est actuellement désactivée.',
	'UCP_REMIND'					=> 'Envoyer le mot de passe',
	'UCP_RESEND'					=> 'Envoyer le courriel d’activation',
	'UCP_WELCOME'					=> 'Bienvenue sur le panneau de contrôle de l’utilisateur. Vous pouvez surveiller, consulter et mettre à jour ici votre profil, vos préférences et vos abonnements aux forums et aux sujets. Vous pouvez également, si cela est autorisé, envoyer des messages aux autres utilisateurs. Veuillez vous assurer d’avoir consulté toutes les annonces avant de continuer.',
	'UCP_YIM'						=> 'Yahoo Messenger ',
	'UCP_ZEBRA'						=> 'Amis &amp; ignorés',
	'UCP_ZEBRA_FOES'				=> 'Gérer les ignorés',
	'UCP_ZEBRA_FRIENDS'				=> 'Gérer les amis',
	'UNDISCLOSED_RECIPIENT'			=> 'Destinataire confidentiel',
	'UNKNOWN_FOLDER'				=> 'Dossier inconnu',
	'UNWATCH_MARKED'				=> 'Ne plus surveiller la sélection',
	'UPLOAD_AVATAR_FILE'			=> 'Transférer depuis votre ordinateur ',
	'UPLOAD_AVATAR_URL'				=> 'Transférer depuis un lien ',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Saisissez le lien de l’image. L’image sera ensuite copiée sur ce site.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Le nom d’utilisateur doit être compris entre %1$d et %2$d caractères de long et ne doit contenir que des lettres et des chiffres.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Le nom d’utilisateur doit être compris entre %1$d et %2$d caractères de long et ne doit contenir que des lettres, des chiffres, des espaces, des tirets bas, des crochets et des signes plus et moins.',
	'USERNAME_ASCII_EXPLAIN'		=> 'Le nom d’utilisateur doit être compris entre %1$d et %2$d caractères de long et ne doit contenir aucun symbole spécial, seulement des caractères ASCII.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Le nom d’utilisateur doit être compris entre %1$d et %2$d caractères de long et ne doit contenir que des lettres et des chiffres.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Le nom d’utilisateur doit être compris entre %1$d et %2$d caractères de long et ne doit contenir que des lettres, des chiffres, des espaces, des tirets bas, des crochets et des signes plus et moins.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'La longueur doit être comprise entre %1$d et %2$d caractères.',
	'USERNAME_TAKEN_USERNAME'		=> 'Le nom d’utilisateur que vous avez saisi est déjà utilisé, veuillez en sélectionner un autre.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Le nom d’utilisateur que vous avez saisi a été interdit ou contient un mot interdit, veuillez en sélectionner un autre.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Les noms d’utilisateurs que vous avez spécifiés sont introuvables ou ces utilisateurs ne sont pas encore activés.',

	'VIEW_AVATARS'				=> 'Afficher les avatars ',
	'VIEW_EDIT'					=> 'Consulter et/ou éditer',
	'VIEW_FLASH'				=> 'Afficher les animations Flash ',
	'VIEW_IMAGES'				=> 'Afficher les images dans les messages ',
	'VIEW_NEXT_HISTORY'			=> 'MP suivant dans l’ordre chronologique',
	'VIEW_NEXT_PM'				=> 'MP suivant',
	'VIEW_PM'					=> 'Consulter le message',
	'VIEW_PM_INFO'				=> 'Informations sur le message',
	'VIEW_PM_MESSAGE'			=> '1 message',
	'VIEW_PM_MESSAGES'			=> '%d message(s)',
	'VIEW_PREVIOUS_HISTORY'		=> 'MP précédent dans l’ordre chronologique',
	'VIEW_PREVIOUS_PM'			=> 'MP précédent',
	'VIEW_SIGS'					=> 'Afficher les signatures ',
	'VIEW_SMILIES'				=> 'Afficher les émoticônes comme des images ',
	'VIEW_TOPICS_DAYS'			=> 'Afficher les sujets des jours antérieurs ',
	'VIEW_TOPICS_DIR'			=> 'Afficher les sujets triés par ordre ',
	'VIEW_TOPICS_KEY'			=> 'Afficher les sujets triés par ',
	'VIEW_POSTS_DAYS'			=> 'Afficher les messages des jours antérieurs ',
	'VIEW_POSTS_DIR'			=> 'Afficher les messages triés par ordre ',
	'VIEW_POSTS_KEY'			=> 'Afficher les messages triés par ',

	'WATCHED_EXPLAIN'			=> 'La liste ci-dessous vous informe sur les forums et les sujets auxquels vous êtes abonné(e). Vous recevrez une notification lorsqu’un nouveau message sera publié dans ces derniers. Pour vous désabonner, sélectionnez le forum ou le sujet souhaité, puis cliquez sur le bouton <em>Ne plus surveiller la sélection</em>.',
	'WATCHED_FORUMS'			=> 'Forums surveillés',
	'WATCHED_TOPICS'			=> 'Sujets surveillés',
	'WRONG_ACTIVATION'			=> 'La clé d’activation que vous avez spécifiée est incorrecte car elle est inconnue de la base de données.',

	'YOUR_DETAILS'				=> 'Votre activité',
	'YOUR_FOES'					=> 'Vos ignorés ',
	'YOUR_FOES_EXPLAIN'			=> 'Pour supprimer des noms d’utilisateurs, sélectionnez-les et cliquez sur le bouton <em>Envoyer</em>.',
	'YOUR_FRIENDS'				=> 'Vos amis ',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Pour supprimer des noms d’utilisateurs, sélectionnez-les et cliquez sur le bouton <em>Envoyer</em>.',
	'YOUR_WARNINGS'				=> 'Votre niveau d’avertissement ',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Placer dans le dossier',
		'MARK_AS_READ'		=> 'Marquer comme lu',
		'MARK_AS_IMPORTANT'	=> 'Marquer le message',
		'DELETE_MESSAGE'	=> 'Supprimer le message'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Sujet',
		'SENDER'	=> 'Expéditeur',
		'MESSAGE'	=> 'Message',
		'STATUS'	=> 'Statut du message',
		'TO'		=> 'Envoyé à'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'est comme',
		'IS_NOT_LIKE'	=> 'n’est pas comme',
		'IS'			=> 'est',
		'IS_NOT'		=> 'n’est pas',
		'BEGINS_WITH'	=> 'commence par',
		'ENDS_WITH'		=> 'termine par',
		'IS_FRIEND'		=> 'est un ami',
		'IS_FOE'		=> 'est un ignoré',
		'IS_USER'		=> 'est un utilisateur',
		'IS_GROUP'		=> 'est dans un groupe d’utilisateurs',
		'ANSWERED'		=> 'répondu',
		'FORWARDED'		=> 'transféré',
		'TO_GROUP'		=> 'à mon groupe d’utilisateurs par défaut',
		'TO_ME'			=> 'à moi'
	),


	'GROUPS_EXPLAIN'	=> 'Les groupes d’utilisateurs permettent aux administrateurs de mieux administrer les utilisateurs. Par défaut, vous serez placé(e) dans un groupe d’utilisateurs spécifique qui correspond à votre groupe par défaut. Ce groupe défini comment vous apparaîtrez aux autres utilisateurs, grâce à, par exemple, une colorisation de votre nom d’utilisateur, une utilisation d’un avatar ou d’un rang spécifique, etc. Selon la politique de l’administrateur, vous pouvez être autorisé(e) à modifier votre groupe par défaut. Vous pouvez également être membre d’autres groupes d’utilisateurs et être autorisé(e) à en rejoindre de nouveaux. Certains groupes d’utilisateurs peuvent vous procurer des permissions supplémentaires afin de consulter un contenu exclusif ou augmenter vos fonctionnalités dans d’autres domaines.',
	'GROUP_LEADER'		=> 'Responsables',
	'GROUP_MEMBER'		=> 'Membres',
	'GROUP_PENDING'		=> 'Membres en attente',
	'GROUP_NONMEMBER'	=> 'Non membres',
	'GROUP_DETAILS'		=> 'Informations sur le groupe',

	'NO_LEADER'		=> 'Aucun responsable du groupe',
	'NO_MEMBER'		=> 'Aucun membre du groupe',
	'NO_PENDING'	=> 'Aucun membre en attente',
	'NO_NONMEMBER'	=> 'Aucun non membre du groupe',
));

?>