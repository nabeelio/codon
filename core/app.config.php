<?php
/**
 * phpVMS - Virtual Airline Administration Software
 * Copyright (c) 2008 Nabeel Shahzad
 * For more information, visit www.phpvms.net
 *	Forums: http://www.phpvms.net/forum
 *	Documentation: http://www.phpvms.net/docs
 *
 * phpVMS is licenced under the following license:
 *   Creative Commons Attribution Non-commercial Share Alike (by-nc-sa)
 *   View license.txt in the root, or visit http://creativecommons.org/licenses/by-nc-sa/3.0/
 *
 * @author Nabeel Shahzad
 * @copyright Copyright (c) 2008, Nabeel Shahzad
 * @link http://www.phpvms.net
 * @license http://creativecommons.org/licenses/by-nc-sa/3.0/
 */

/**
 * DO NOT MODIFY THESE SETTINGS HERE!!
 * They will get over-ridden in an update. These are just defaults 
 * To change, copy-paste and change the line/option/setting into your
 *  local.config.php file
 *
 * Most of these are in your local.config.php already
 * 
 * View the docs for details about these settings
 */

# Debug mode is off by default
Config::Set('DEBUG_MODE', false);
Config::Set('DEBUG_LEVEL', 1); // 1 logs query errors, 2 logs all queries
Config::Set('ERROR_LEVEL', E_ALL ^ E_NOTICE);

# Page encoding options
Config::Set('PAGE_ENCODING', 'UTF-8');
Config::Set('DB_CHARSET_NAME', 'utf8');

Config::Set('CURRENT_SKIN', 'crystal');

Config::Set('TEMPLATE_USE_CACHE', false);
Config::Set('TEMPLATE_CACHE_EXPIRE', '24');
Config::Set('DBASE_USE_CACHE', false);
Config::Set('CACHE_PATH', SITE_ROOT . '/core/cache');
Config::Set('TPL_EXTENSION', '.tpl');
Config::Set('BASE_TEMPLATE_PATH', SITE_ROOT.'/core/templates');

Template::SetTemplatePath(Config::Get('BASE_TEMPLATE_PATH'));
	
define('CODON_MODULES_PATH', SITE_ROOT.'/core/modules');
define('CODON_DEFAULT_MODULE', 'Frontpage');

/* Cache settings */
$cache_settings = array(
	'active' => false,
	'engine' => 'file',			/* "file" or "apc" */
	'location' => CACHE_PATH,	/* For the "file" engine type */
	'prefix' => 'phpvms_',		/* Specify a prefix for any entries */
	'profiles' => array(
		'default' => array(
			'duration' => '+10 minutes',
		),
		
		'short' => array(
			'duration' => '+3 minutes',
		),
		
		'15minute' => array(
			'duration' => '+15 minutes',
		),
		
		'medium' => array(
			'duration' => '+1 hour',
		),
		
		'long' => array(
			'duration' => '+6 hours'
		),
	)
);