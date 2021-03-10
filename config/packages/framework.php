<?php

/**
 * @see https://symfony.com/doc/current/reference/configuration/framework.html
 */
$container->loadFromExtension('framework', [
    'secret' => '%env(APP_SECRET)%',
//    'csrf_protection' => true,
//    'http_method_override' => true,
    'session' => [
        'handler_id' => null,
        'cookie_secure' => 'auto',
        'cookie_samesite' => 'lax',
    ],
//    'esi' => true,
//    'fragments' => true,
    'php_errors' => [
        'log' => true,
    ],
]);
