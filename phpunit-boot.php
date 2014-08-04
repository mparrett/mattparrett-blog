<?php

////
// Bootstrap PHPUnit
////

////
// Project autoloader
////

require_once __DIR__.'/src/MP/Framework/AutoLoader.php';

$classLoader = new MP\Framework\AutoLoader(__DIR__.'/src');
$classLoader->register();

////
// Configure the framework for app
////

function test_get_app_config() {
	if (file_exists(__DIR__.'/resources/config/app-test.php')) {
		require_once __DIR__.'/resources/config/app-test.php';
		return $app_config;
	}
}
