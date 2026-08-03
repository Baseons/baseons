<?php

// --------------------------------------------------------------------------|
//                           SESSION CONFIGURATIONS                          |
// --------------------------------------------------------------------------|

return [
    'name' => env('SESSION_NAME', 'session'),
    'path' => env('SESSION_PATH', path()->storage('sessions')),
    'secure' => env('SESSION_SECURE', true),
    'httponly' => env('SESSION_SECURE', true),
    'samesite' =>  env('SESSION_SAMESITE', 'Strict'),
    'lifetime' => env('SESSION_LIFETIME', 86400), // 1 day
    'domain' => env('SESSION_DOMAIN')
];
