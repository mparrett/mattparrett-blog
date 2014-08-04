<?php

////
// Basic Setup
////

date_default_timezone_set('UTC');

////
// Autoloader
////
require_once __DIR__.'/../src/MP/Framework/AutoLoader.php';

$classLoader = new MP\Framework\AutoLoader(__DIR__.'/../src');
spl_autoload_register(array($classLoader, 'loadOptionalClass'));

$di = new \MP\Framework\DI();

////
// Configure the framework for app
////

require_once __DIR__.'/../resources/config/mp-blog/app.php';

// Make configuration available to DI
$di->set('app_config', $app_config);

////
// Add DB Capability
////
$di->set('db', function() use (&$di) {
	$c = $di->get('app_config')['db'];
	return new \MP\Framework\DB($c['host'], $c['user'], $c['password'], $c['database']);
});
