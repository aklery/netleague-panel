<?php

// SITE PRESETS
define('SITE_ROOT', dirname(__FILE__, 3)); // DO NOT CHANGE
define('SITE_URL', 'http://'.$_SERVER['SERVER_NAME']); // DO NOT CHANGE

// Website Name
define('SITE_NAME', 'NetLeague');

// Website Description
define('SITE_DESC', 'CS:GO Private League Cheat | Invite Only');

/**
 * Folder name should be defined starting with the "/" (slash)
 * 
 * If you do not plan on having it in a subdomain,
 * keep '' empty without a "/" (slash)
 * example: define('SUB_DIR', '');
 */
define('SUB_DIR', '/painel');

// Loader link // From Root folder
define('LOADER_URL', SITE_ROOT.'/x.exe');

// API key
define('API_KEY', 'a1469abf-387e-4cb3-b55c-1c88bdc94114');