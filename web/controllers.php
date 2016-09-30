<?php

// Specific URL pattern matches

// /2014/01/powerful-advice-might-ever-hear-unless-like-miserable/
$app->route('`^/20\d{2}/\d{2}/[-a-z0-9]+/?$`',    'blog::post_shortlink');

// /2014/01
$app->route('`^/20\d{2}/\d{2}/?$`',            'blog::archive');

// Markdown pages
$app->route('`^/about/?$`',                        'blog::page_md');
$app->route('`^/photos/?$`',                    'blog::page_md');

// PHP pages
$app->route('`^/resume/?$`',                    'blog::page_php');
$app->route('`^/$`',                            'blog::index');
