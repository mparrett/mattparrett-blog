<?php


// Composer autoloader
require_once '../vendor/autoload.php';

$app->registerCustomErrorHandler();

////
// Load config file
////
$di->set('app_config', function () {
    if (file_exists(__DIR__.'/../resources/config/app.php')) {
        require_once __DIR__.'/../resources/config/app.php';
        return $app_config;
    }
});

// Activate templates
$t = new \MP\Framework\Templates(__DIR__.'/../resources/templates', new ParsedownExtra());
$di->set('templates', $t);

////
// Add memcached
////

$app->di->set('mc', function () use (&$di) {
    $c = $di->get('app_config')['mc'];

    if (!$c) {
        return;
    }

    $mc = new Memcached;

    if ($mc->getServerList()) {
        return;
    }

    $mc->addServers($c['servers']);
    if (isset($c['options']) && $c['options']) {
        foreach ($c['options'] as $k => $v) {
            $mc->setOption($k, $v);
        }
    }

    return $mc;
});

////
// Memcache sessions!
// (PHP 5.3 compatible)
////

$app->di->set('sess', function () use (&$di) {
    $mc = $di->get('mc');

    if (!$mc) {
        return;
    }

    $h = new \MP\Framework\MemcachedSessionHandler($mc);
    session_set_save_handler(
        array($h, 'open'),
        array($h, 'close'),
        array($h, 'read'),
        array($h, 'write'),
        array($h, 'destroy'),
        array($h, 'gc')
    );
    session_start();
    return $h;
});

// Optional, register/start the session by retrieving it
#$app->di->get('sess');

////
// Add DB Capability
////

$app->di->set('db', function () use (&$di) {
    $c = $di->get('app_config')['db'];
    return new \MP\Framework\DB($c['host'], $c['user'], $c['password'], $c['database']);
});
