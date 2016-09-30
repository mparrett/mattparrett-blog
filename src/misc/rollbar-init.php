<?php

////
// Rollbar
////

require_once __DIR__.'/../vendor/rollbar.php';
$config = array(
    // required
    'access_token' => 'ae23475d807b46f8a8f6d80997d4f127',
    // optional - environment name. any string will do.
    'environment' => 'dev',
    // optional - dir your code is in. used for linking stack traces.
    'root' => realpath(__DIR__.'/../'),
    // optional - max error number to report. defaults to -1 (report all errors)
    //'max_errno' => E_USER_NOTICE  // ignore E_STRICT and above
);
Rollbar::init($config);
