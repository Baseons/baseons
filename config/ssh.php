<?php

// --------------------------------------------------------------------------|
//                              SSH CONFIGURATIONS                           |
// --------------------------------------------------------------------------|

return [
    'default' => env('SSH_DEFAULT', 'default'),

    'connections' => [
        'default' => [
            'host' => env('SSH_HOST', 'localhost'),
            'port' => env('SSH_PORT', 22),
            'user' => env('SSH_USER', 'root'),
            'password' => env('SSH_PASSWORD', '')
        ]
    ]
];
