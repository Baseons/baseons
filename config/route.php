<?php

// --------------------------------------------------------------------------|
//                            ROUTES CONFIGURATIONS                          |
// --------------------------------------------------------------------------|

return [
    'http' => [
        'web' => [
            'path' => path('routes/web.php'),
            'middleware' => 'Routes::web',
            'prefix' => null,

            'csrf' => [
                'active' => true,
                'lifetime' => 1800// 30 minutes
            ]
        ],

        'api' => [
            'path' => path('routes/api.php'),
            'middleware' => 'Routes::api',
            'prefix' => 'api',

            'csrf' => [
                'active' => false,
                'lifetime' => 1800// 30 minutes
            ]
        ]
    ],

    /**
     * The alias parameter serves as a substitute for the host used in
     * the server() function that may be running locally.
     *
     * SSL will only be active if it is enabled and the certificates exist.
     *
     * Crt path: /etc/letsencrypt/live/[domain]/fullchain.pem
     * Key path: /etc/letsencrypt/live/[domain]/privkey.pem
     */
    'server' => [
        'host' => env('SERVER_HOST', 'localhost'),
        'alias' => env('SERVER_ALIAS', null),

        'ssl' => [
            'active' => env('SERVER_SSL', false),
            'crt' => env('SERVER_CRT'),
            'key' => env('SERVER_KEY')
        ],

        'path' => [
            path('routes/server.php')
        ]
    ],

    'console' => [
        path('routes/console.php')
    ],

    'job' =>  [
        path('routes/job.php')
    ]
];
