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

# Maintenance mode - this disables the site to non-admins
Config::Set('MAINTENANCE_MODE', false);
Config::Set('MAINTENANCE_MESSAGE', 'We are currently down for maintenance, please check back soon.');

# See more details about these in the docs
Config::Set('PAGE_EXT', '.htm');	# .htm is fine. You can still run PHP

# Cookie information
Config::Set('SESSION_LOGIN_TIME', (60*60*24*30)); # Expire after 30 days, in seconds
//Config::Set('SESSION_COOKIE_NAME', 'VMS_AUTH_COOKIE');

# Email Settings
Config::Set('EMAIL_FROM_NAME', '');
Config::Set('EMAIL_FROM_ADDRESS', '');

Config::Set('EMAIL_USE_SMTP', false);
# Add multiple SMTP servers by separating them with ;
Config::Set('EMAIL_SMTP_SERVERS', '');
Config::Set('EMAIL_SMTP_PORT', '25');
Config::Set('EMAIL_SMTP_USE_AUTH', false);
Config::Set('EMAIL_SMTP_USER', '');
Config::Set('EMAIL_SMTP_PASS', '');

/* Keys for recaptcha, you can change these if you want to your own but it's
	a global key so it should just work */
Config::Set('RECAPTCHA_PUBLIC_KEY', '6LcklAsAAAAAAJqmghmMPOACeJrAxW3sJulSboxx');
Config::Set('RECAPTCHA_PRIVATE_KEY', '6LcklAsAAAAAAMeQy5ZBoDu8JOMTP-UL7ek1GedO');

Config::Set('URL_REWRITE', false);

Config::Set('SITE_LANGUAGE', 'en');

/**
 * *******************************************************
 * 
 * 
 * 
 * 
 * 
 * 
 * Advanced options, don't edit unless you
 * know what you're doing!!
 * 
 * Actually, don't change them, at all. Please.
 * For your sake. And mine. :)
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */

Config::Set('TEMPLATE_USE_CACHE', false);
Config::Set('TEMPLATE_CACHE_EXPIRE', '24');
Config::Set('DBASE_USE_CACHE', false);
Config::Set('CACHE_PATH', SITE_ROOT . '/core/cache');
Config::Set('TPL_EXTENSION', '.tpl');
Config::Set('BASE_TEMPLATE_PATH', SITE_ROOT.'/core/templates');


/* Cache settings */
$cache_settings = array(
	'active' => true,
	'engine' => 'file',					/* "file" or "apc" */
	'location' => CACHE_PATH,	/* For the "file" engine type */
	'prefix' => 'phpvms_',				/* Specify a prefix for any entries */
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

Config::Set('CACHE_KEY_LIST', array());


define('VMS_AUTH_COOKIE', 'VMSAUTH');

/**
 * Library Includes (from 3rd Party)
 */
