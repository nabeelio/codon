<?php

/**
 * This is the phpVMS Main Configuration File
 *
 * This file won't be modified/touched by future versions
 * of phpVMS, you can change your settings here
 * 
 * There may also be additional settings in app.config.php
 * To change it, copy the line into this file here, for the
 * settings to take effect
 *
 */
define('DBASE_USER', '');
define('DBASE_PASS', '');
define('DBASE_NAME', '');
define('DBASE_SERVER', 'localhost');
define('DBASE_TYPE', 'mysql');
define('TABLE_PREFIX', '');
define('SITE_URL', '');

# What skin to use
Config::Set('CURRENT_SKIN', 'crystal');

# Debug mode is off by default
Config::Set('DEBUG_MODE', false);
Config::Set('ERROR_LEVEL', E_ALL ^ E_NOTICE);

Config::Set('SESSION_LOGIN_TIME', (60*60*24*30)); # Expire after 30 days, in seconds