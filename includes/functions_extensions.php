<?php
/**
 * @package phpBB3
 * @version 1.0.0 2010-02-18
 * @copyright (c) 2009 RMcGirr83
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License(
 */
/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * get_min_php_size
 *
 * @return maximum filesize uploading per PHP ini setting
 *
*/
function get_min_php_size ()
{
	// allowed file size uploaded per PHP ini settings
	$php_upload_max = return_ini_bytes(@ini_get('upload_max_filesize'));

	$php_post_max = return_ini_bytes(@ini_get('post_max_size'));
	
	// check for php allowed max size
	$php_max_allowed = min($php_upload_max, $php_post_max);
	
	unset($php_upload_max);
	unset($php_post_max);
	
	return $php_max_allowed;
}

/**
 * return_ini_bytes
 *
 * @return value of ini entry in bytes
 *
*/
function return_ini_bytes($val)
{
    $val = trim($val);
    $last = strtolower($val[strlen($val)-1]);
    switch($last) 
	{
        // The 'G' modifier is available since PHP 5.1.0
        case 'g':
            $val *= 1024;
        case 'm':
            $val *= 1024;
        case 'k':
            $val *= 1024;
    }

    return $val;
}

/**
 * allowed_extensions
 * 
 * @param array $forum_id
 * @return string a list of extensions and allowed sizes of
 * 
 */
function allowed_extensions($forum_id = false)
{
	global $config, $template, $cache, $user;
	
	// need a lang file
	$user->add_lang('acp/attachments');
	
	$allowed_extensions = $cache->obtain_attach_extensions($forum_id);
	unset($allowed_extensions['_allowed_']);
	ksort($allowed_extensions);
	$first_extension = true;
	
	// the maximum allowed size per config settings
	$max_size = !empty($forum_id) ? (int) $config['max_filesize'] : (int) $config['max_filesize_pm'];
	
	// check for php allowed max size
	$php_max_size = get_min_php_size();
	$ext_count = 0;
	foreach($allowed_extensions as $ext => $vals)
	{
		$ext_count++;
		// now the max filesize allowed by the board per extension
		$max_filesize = 0;
		if ($vals['max_filesize'] > $max_size || $vals['max_filesize'] == 0)
		{
			$max_filesize = ($max_size <= $php_max_size) ? $max_size : $php_max_size;
		}
		else
		{
			$max_filesize = ($vals['max_filesize'] <= $php_max_size) ? $vals['max_filesize'] : $php_max_size;
		}
		
		switch($max_filesize)
		{
			case ($max_filesize < 1024):
				$ext_size = number_format($max_filesize) . ' ' . $user->lang['BYTES'];
			break;
			
			case ($max_filesize / 1024 < 1024):
				$ext_size = number_format($max_filesize / 1024) . ' ' . $user->lang['KB'];
			break;

			case ($max_filesize / 1048576 < 1024):
				$ext_size = number_format($max_filesize / 1048576) . ' ' . $user->lang['MB'];
			break;
		}
		
		$template->assign_block_vars('allowed_extension', array(
			'FILESIZE'	=> $ext_size,
			'EXTENSION' => strtolower(trim($ext)),
			'FIRST'  	=> $first_extension)
		);
		$first_extension = false;
	}

	if (sizeof($allowed_extensions))
	{
		$template->assign_vars(array(
			'S_EXTENSIONS'	=> true,
			'S_EXT_PLURAL'	=> ($ext_count) > 1 ? true : false,
		));
	}
	
	return $allowed_extensions;
}
?>