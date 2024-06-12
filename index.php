<?php 
// source https://github.com/VolkanSah/MiniGreX
// content management system
//  .-.   .-..-..-. .-..-. .---. .----. .----..-.  .-.
//  |  `.'  || ||  `| || |/   __}| {}  }| {_   \ \/ / 
//  | |\ /| || || |\  || |\  {_ }| .-. \| {__  / /\ \ 
//  `-' ` `-'`-'`-' `-'`-' `---' `-' `-'`----'`-'  `-'
//  Copyright @S. Volkan Kücükbudak

// Path definitions
define('INIT_MGREX', __DIR__ . '/includes/init.php');
define('SECURITY_MGREX', __DIR__ . '/includes/security.php');
define('LOOP_MGREX', __DIR__ . '/includes/loop.php');
define('FUNCTION_MGREX', __DIR__ . '/includes/functions.php');
define('UPLOAD_MGREX', __DIR__ . '/includes/upload.php');
define('IMAGES_MGREX', __DIR__ . '/includes/images.php');
define('CMS_MGREX', __DIR__ . '/includes/cms.php');
define('CACHE_MGREX', __DIR__ . '/includes/cache.php');
define('PLUGIN_LOADER', __DIR__ . '/plugins/plugin_loader.php');
define('THEME_LOADER', __DIR__ . '/themes/theme_loader.php');

// Include the init file
require_once INIT_MGREX;
require_once SECURITY_MGREX;
require_once LOOP_MGREX;
require_once FUNCTION_MGREX;
require_once UPLOAD_MGREX;
require_once IMAGES_MGREX;
require_once CMS_MGREX;
require_once CACHE_MGREX;
require_once PLUGIN_LOADER; // plugin init (integration of plugins)
require_once THEME_LOADER; // theme init (integration of plugins)

// Initialize the CMS
$cms = new CMS($pdo);

// Start the user interface
$cms->run();
?>



