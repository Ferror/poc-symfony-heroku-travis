<?php

/**
 * @see https://symfony.com/doc/current/messenger.html
 */
$container->loadFromExtension('framework', [
    'messenger' => [
        'routing' => [
            // route all messages that extend this example base class or interface
            'App\Message\AbstractAsyncMessage' => 'async',
            'App\Message\AsyncMessageInterface' => 'async',
            'My\Message\ToBeSentToTwoSenders' => ['async', 'audit'],
        ],
    ],
]);
