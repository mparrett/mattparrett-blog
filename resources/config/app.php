<?php

$app_config = array();

$app_config['app_controller_namespace'] 	= 'MPBlog\\Controllers';
$app_config['not_found_template'] 			= '404-not-found.php';
$app_config['default_template'] 			= 'front.php';
$app_config['project_prefix'] 				= '';

$app_config['db'] = array(
    'host'      => 'mysql.test',
    'user'      => 'blog_mp',
    'password'  => 'changeme',
    'database'  => 'blog_mp_dev'
);

$app_config['mc'] = array(
	'servers' => array(
		array('127.0.0.1', 11211, 100)
	),
	'options' => array(
		'OPT_COMPRESSION' => true,
		'OPT_PREFIX_KEY' => 'mp-blog.dev'
	)
);