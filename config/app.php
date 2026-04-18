<?php

// --------------------------------------------------------------------------|
//                            APP CONFIGURATIONS                             |
// --------------------------------------------------------------------------|

return [
    'name' => env('APP_NAME', 'Baseons'),
    'debug' => env('APP_DEBUG', false),
    'timezone' => env('APP_TIMEZONE', 'America/Los_Angeles'),
    'locale' => env('APP_LOCALE', 'en_US'),
    'url' => env('APP_URL', 'http://localhost:3000'),

    'encryption' => [
        'cipher' => 'AES-256-GCM',
        'key' => env('APP_KEY')
    ],

    'ini' => [
        'memory_limit' => '10000M',
        'max_execution_time' => 1800,
        'max_input_time' => 1800,
        'max_input_vars' => 10000
    ],

    'helpers' => [
        path('app/Helpers/main.php')
    ],
];
